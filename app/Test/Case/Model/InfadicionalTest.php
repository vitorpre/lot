<?php
App::uses('Infadicional', 'Model');

/**
 * Infadicional Test Case
 *
 */
class InfadicionalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.infadicional',
		'app.usuario',
		'app.artigo',
		'app.categoria',
		'app.conteudo',
		'app.champion',
		'app.artigos_champion',
		'app.item',
		'app.artigos_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Infadicional = ClassRegistry::init('Infadicional');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Infadicional);

		parent::tearDown();
	}

}
