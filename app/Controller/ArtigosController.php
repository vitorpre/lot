<?php
App::uses('AppController', 'Controller');
/**
 * Artigos Controller
 *
 * @property Artigo $Artigo
 * @property PaginatorComponent $Paginator
 */
class ArtigosController extends AppController {

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
		$this->Artigo->recursive = 0;
		$this->set('artigos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Artigo->exists($id)) {
			throw new NotFoundException(__('Invalid artigo'));
		}
		$options = array('conditions' => array('Artigo.' . $this->Artigo->primaryKey => $id));
		$this->set('artigo', $this->Artigo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Artigo->create();
			if ($this->Artigo->save($this->request->data)) {
				$this->Session->setFlash(__('The artigo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The artigo could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Artigo->Usuario->find('list');
		$categorias = $this->Artigo->Categoria->find('list');
		$champions = $this->Artigo->Champion->find('list');
		$items = $this->Artigo->Item->find('list');
		$this->set(compact('usuarios', 'categorias', 'champions', 'items'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Artigo->exists($id)) {
			throw new NotFoundException(__('Invalid artigo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Artigo->save($this->request->data)) {
				$this->Session->setFlash(__('The artigo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The artigo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Artigo.' . $this->Artigo->primaryKey => $id));
			$this->request->data = $this->Artigo->find('first', $options);
		}
		$usuarios = $this->Artigo->Usuario->find('list');
		$categorias = $this->Artigo->Categorium->find('list');
		$champions = $this->Artigo->Champion->find('list');
		$items = $this->Artigo->Item->find('list');
		$this->set(compact('usuarios', 'categorias', 'champions', 'items'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Artigo->id = $id;
		if (!$this->Artigo->exists()) {
			throw new NotFoundException(__('Invalid artigo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Artigo->delete()) {
			$this->Session->setFlash(__('The artigo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The artigo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
