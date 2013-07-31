<?php
/**
 * FilmFixture
 *
 */
class FilmFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => true),
		'year' => array('type' => 'integer', 'null' => true),
		'rated' => array('type' => 'string', 'null' => true, 'length' => 10),
		'released' => array('type' => 'date', 'null' => true),
		'runtime' => array('type' => 'string', 'null' => true, 'length' => 10),
		'genre' => array('type' => 'string', 'null' => true),
		'director' => array('type' => 'string', 'null' => true),
		'writer' => array('type' => 'string', 'null' => true),
		'actors' => array('type' => 'string', 'null' => true),
		'plot' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'poster' => array('type' => 'string', 'null' => true),
		'imdbrating' => array('type' => 'float', 'null' => true),
		'imdbvotes' => array('type' => 'string', 'null' => true, 'length' => 10),
		'imdbid' => array('type' => 'string', 'null' => true, 'length' => 20),
		'user_id' => array('type' => 'biginteger', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'title' => 'Lorem ipsum dolor sit amet',
			'year' => 1,
			'rated' => 'Lorem ip',
			'released' => '2013-07-31',
			'runtime' => 'Lorem ip',
			'genre' => 'Lorem ipsum dolor sit amet',
			'director' => 'Lorem ipsum dolor sit amet',
			'writer' => 'Lorem ipsum dolor sit amet',
			'actors' => 'Lorem ipsum dolor sit amet',
			'plot' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'poster' => 'Lorem ipsum dolor sit amet',
			'imdbrating' => 1,
			'imdbvotes' => 'Lorem ip',
			'imdbid' => 'Lorem ipsum dolor ',
			'user_id' => ''
		),
	);

}
