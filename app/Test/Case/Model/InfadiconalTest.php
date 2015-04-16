<?php
App::uses('Infadiconal', 'Model');

/**
 * Infadiconal Test Case
 *
 */
class InfadiconalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.infadiconal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Infadiconal = ClassRegistry::init('Infadiconal');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Infadiconal);

		parent::tearDown();
	}

}
