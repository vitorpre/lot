<?php
/**
 * UsuarioFixture
 *
 */
class UsuarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'login' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'senha' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'usuario_lol' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'liga' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => true),
		'divisao' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => true),
		'foto' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fl_permite_divulgar' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'infadicional_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'login' => array('column' => 'login', 'unique' => 1),
			'usuario_lol' => array('column' => 'usuario_lol', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'login' => 'Lorem ipsum dolor sit amet',
			'senha' => 'Lorem ipsum dolor sit amet',
			'usuario_lol' => 'Lorem ipsum dolor sit amet',
			'liga' => 1,
			'divisao' => 1,
			'foto' => 'Lorem ipsum dolor sit amet',
			'fl_permite_divulgar' => 1,
			'infadicional_id' => 1
		),
	);

}
