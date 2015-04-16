<?php
App::uses('Conteudo', 'Model');

/**
 * Conteudo Test Case
 *
 */
class ConteudoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.conteudo',
		'app.artigo',
		'app.usuario',
		'app.categoria',
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
		$this->Conteudo = ClassRegistry::init('Conteudo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Conteudo);

		parent::tearDown();
	}

}
