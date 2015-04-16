<?php
App::uses('Champion', 'Model');

/**
 * Champion Test Case
 *
 */
class ChampionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.champion',
		'app.artigo',
		'app.usuario',
		'app.categoria',
		'app.conteudo',
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
		$this->Champion = ClassRegistry::init('Champion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Champion);

		parent::tearDown();
	}

}
