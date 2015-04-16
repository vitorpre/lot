<?php
App::uses('ArtigosItem', 'Model');

/**
 * ArtigosItem Test Case
 *
 */
class ArtigosItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.artigos_item',
		'app.artigo',
		'app.usuario',
		'app.infadicional',
		'app.categoria',
		'app.conteudo',
		'app.champion',
		'app.artigos_champion',
		'app.item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArtigosItem = ClassRegistry::init('ArtigosItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArtigosItem);

		parent::tearDown();
	}

}
