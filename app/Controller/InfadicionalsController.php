<?php
App::uses('AppController', 'Controller');
/**
 * Infadicionals Controller
 *
 * @property Infadicional $Infadicional
 * @property PaginatorComponent $Paginator
 */
class InfadicionalsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Infadicional->recursive = 0;
		$this->set('infadicionals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Infadicional->exists($id)) {
			throw new NotFoundException(__('Invalid infadicional'));
		}
		$options = array('conditions' => array('Infadicional.' . $this->Infadicional->primaryKey => $id));
		$this->set('infadicional', $this->Infadicional->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Infadicional->create();
			if ($this->Infadicional->save($this->request->data)) {
				$this->Session->setFlash(__('The infadicional has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The infadicional could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Infadicional->exists($id)) {
			throw new NotFoundException(__('Invalid infadicional'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Infadicional->save($this->request->data)) {
				$this->Session->setFlash(__('The infadicional has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The infadicional could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Infadicional.' . $this->Infadicional->primaryKey => $id));
			$this->request->data = $this->Infadicional->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Infadicional->id = $id;
		if (!$this->Infadicional->exists()) {
			throw new NotFoundException(__('Invalid infadicional'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Infadicional->delete()) {
			$this->Session->setFlash(__('The infadicional has been deleted.'));
		} else {
			$this->Session->setFlash(__('The infadicional could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
