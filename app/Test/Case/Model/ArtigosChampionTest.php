<?php
App::uses('ArtigosChampion', 'Model');

/**
 * ArtigosChampion Test Case
 *
 */
class ArtigosChampionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.artigos_champion',
		'app.artigo',
		'app.usuario',
		'app.infadicional',
		'app.categoria',
		'app.conteudo',
		'app.champion',
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
		$this->ArtigosChampion = ClassRegistry::init('ArtigosChampion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArtigosChampion);

		parent::tearDown();
	}

}
