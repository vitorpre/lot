<?php
App::uses('Artigo', 'Model');

/**
 * Artigo Test Case
 *
 */
class ArtigoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.artigo',
		'app.usuario',
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
		$this->Artigo = ClassRegistry::init('Artigo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Artigo);

		parent::tearDown();
	}

}
