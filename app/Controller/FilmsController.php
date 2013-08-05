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
		$this->paginate = array(
			'limit' => 10,
  			'order' => array('Film.title' => 'asc')
		);

		$data = $this->paginate('Film');
		$this->set('films', $data);
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
			$newdate = date('Y-m-d', strtotime($this->request->data['Film']['released']));
			$this->request->data['Film']['released'] = $newdate;
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

	public function getrandom() {
		$users = $this->Film->User->find('list');
		$random_id = array_rand($users, 1);
		$films = $this->Film->findAllByUserId($random_id);
		if (!empty($films)) {
			$random_film_id = array_rand($films, 1);
			$film = $films[$random_film_id]['Film'];
			$user = $films[$random_film_id]['User'];
			$this->set(compact('film', 'user'));
		}
		else {
			$this->Session->setFlash($users[$random_id] . " hasn't added any films!");
		}

	}

}
