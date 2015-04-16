<?php
App::uses('AppController', 'Controller');
/**
 * ArtigosChampions Controller
 *
 * @property ArtigosChampion $ArtigosChampion
 * @property PaginatorComponent $Paginator
 */
class ArtigosChampionsController extends AppController {

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
		$this->ArtigosChampion->recursive = 0;
		$this->set('artigosChampions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ArtigosChampion->exists($id)) {
			throw new NotFoundException(__('Invalid artigos champion'));
		}
		$options = array('conditions' => array('ArtigosChampion.' . $this->ArtigosChampion->primaryKey => $id));
		$this->set('artigosChampion', $this->ArtigosChampion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ArtigosChampion->create();
			if ($this->ArtigosChampion->save($this->request->data)) {
				$this->Session->setFlash(__('The artigos champion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The artigos champion could not be saved. Please, try again.'));
			}
		}
		$artigos = $this->ArtigosChampion->Artigo->find('list');
		$champions = $this->ArtigosChampion->Champion->find('list');
		$this->set(compact('artigos', 'champions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ArtigosChampion->exists($id)) {
			throw new NotFoundException(__('Invalid artigos champion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ArtigosChampion->save($this->request->data)) {
				$this->Session->setFlash(__('The artigos champion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The artigos champion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ArtigosChampion.' . $this->ArtigosChampion->primaryKey => $id));
			$this->request->data = $this->ArtigosChampion->find('first', $options);
		}
		$artigos = $this->ArtigosChampion->Artigo->find('list');
		$champions = $this->ArtigosChampion->Champion->find('list');
		$this->set(compact('artigos', 'champions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ArtigosChampion->id = $id;
		if (!$this->ArtigosChampion->exists()) {
			throw new NotFoundException(__('Invalid artigos champion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ArtigosChampion->delete()) {
			$this->Session->setFlash(__('The artigos champion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The artigos champion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
