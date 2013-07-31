<?php
App::uses('AppController', 'Controller');
/**
 * Films Controller
 *
 * @property Film $Film
 * @property PaginatorComponent $Paginator
 */
class FilmsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Film->recursive = 0;
		$this->set('films', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Film->exists($id)) {
			throw new NotFoundException(__('Invalid film'));
		}
		$options = array('conditions' => array('Film.' . $this->Film->primaryKey => $id));
		$this->set('film', $this->Film->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Film->create();
			if ($this->Film->save($this->request->data)) {
				$path = 'img/' . $this->request->data['Film']['imdbid'] . '.jpg';
				if (!file_exists($path)) {
					file_put_contents($path, file_get_contents($this->request->data['Film']['poster']));
				}
				$this->Session->setFlash(__('The film has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The film could not be saved. Please, try again.'));
			}
		}
		$users = $this->Film->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Film->exists($id)) {
			throw new NotFoundException(__('Invalid film'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Film->save($this->request->data)) {
				$this->Session->setFlash(__('The film has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The film could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Film.' . $this->Film->primaryKey => $id));
			$this->request->data = $this->Film->find('first', $options);
		}
		$users = $this->Film->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Film->id = $id;
		if (!$this->Film->exists()) {
			throw new NotFoundException(__('Invalid film'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Film->delete()) {
			$this->Session->setFlash(__('Film deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Film was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
