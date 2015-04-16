<?php
App::uses('AppController', 'Controller');
/**
 * Champions Controller
 *
 * @property Champion $Champion
 * @property PaginatorComponent $Paginator
 */
class ChampionsController extends AppController {

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
		$this->Champion->recursive = 0;
		$this->set('champions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Champion->exists($id)) {
			throw new NotFoundException(__('Invalid champion'));
		}
		$options = array('conditions' => array('Champion.' . $this->Champion->primaryKey => $id));
		$this->set('champion', $this->Champion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Champion->create();
			if ($this->Champion->save($this->request->data)) {
				$this->Session->setFlash(__('The champion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The champion could not be saved. Please, try again.'));
			}
		}
		$artigos = $this->Champion->Artigo->find('list');
		$this->set(compact('artigos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Champion->exists($id)) {
			throw new NotFoundException(__('Invalid champion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Champion->save($this->request->data)) {
				$this->Session->setFlash(__('The champion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The champion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Champion.' . $this->Champion->primaryKey => $id));
			$this->request->data = $this->Champion->find('first', $options);
		}
		$artigos = $this->Champion->Artigo->find('list');
		$this->set(compact('artigos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Champion->id = $id;
		if (!$this->Champion->exists()) {
			throw new NotFoundException(__('Invalid champion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Champion->delete()) {
			$this->Session->setFlash(__('The champion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The champion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
