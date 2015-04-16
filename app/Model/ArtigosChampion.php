<?php
App::uses('AppModel', 'Model');
/**
 * ArtigosChampion Model
 *
 * @property Artigo $Artigo
 * @property Champion $Champion
 */
class ArtigosChampion extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'artigo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'champion_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Artigo' => array(
			'className' => 'Artigo',
			'foreignKey' => 'artigo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Champion' => array(
			'className' => 'Champion',
			'foreignKey' => 'champion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
