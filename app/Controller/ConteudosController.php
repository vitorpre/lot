<?php
App::uses('AppController', 'Controller');
/**
 * Conteudos Controller
 *
 * @property Conteudo $Conteudo
 * @property PaginatorComponent $Paginator
 */
class ConteudosController extends AppController {

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
		$this->Conteudo->recursive = 0;
		$this->set('conteudos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Conteudo->exists($id)) {
			throw new NotFoundException(__('Invalid conteudo'));
		}
		$options = array('conditions' => array('Conteudo.' . $this->Conteudo->primaryKey => $id));
		$this->set('conteudo', $this->Conteudo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Conteudo->create();
			if ($this->Conteudo->save($this->request->data)) {
				$this->Session->setFlash(__('The conteudo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conteudo could not be saved. Please, try again.'));
			}
		}
		$artigos = $this->Conteudo->Artigo->find('list');
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
		if (!$this->Conteudo->exists($id)) {
			throw new NotFoundException(__('Invalid conteudo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Conteudo->save($this->request->data)) {
				$this->Session->setFlash(__('The conteudo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conteudo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Conteudo.' . $this->Conteudo->primaryKey => $id));
			$this->request->data = $this->Conteudo->find('first', $options);
		}
		$artigos = $this->Conteudo->Artigo->find('list');
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
		$this->Conteudo->id = $id;
		if (!$this->Conteudo->exists()) {
			throw new NotFoundException(__('Invalid conteudo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Conteudo->delete()) {
			$this->Session->setFlash(__('The conteudo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The conteudo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
