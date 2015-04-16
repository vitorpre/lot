<?php
App::uses('AppController', 'Controller');
/**
 * ArtigosItems Controller
 *
 * @property ArtigosItem $ArtigosItem
 * @property PaginatorComponent $Paginator
 */
class ArtigosItemsController extends AppController {

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
		$this->ArtigosItem->recursive = 0;
		$this->set('artigosItems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ArtigosItem->exists($id)) {
			throw new NotFoundException(__('Invalid artigos item'));
		}
		$options = array('conditions' => array('ArtigosItem.' . $this->ArtigosItem->primaryKey => $id));
		$this->set('artigosItem', $this->ArtigosItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ArtigosItem->create();
			if ($this->ArtigosItem->save($this->request->data)) {
				$this->Session->setFlash(__('The artigos item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The artigos item could not be saved. Please, try again.'));
			}
		}
		$artigos = $this->ArtigosItem->Artigo->find('list');
		$items = $this->ArtigosItem->Item->find('list');
		$this->set(compact('artigos', 'items'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ArtigosItem->exists($id)) {
			throw new NotFoundException(__('Invalid artigos item'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ArtigosItem->save($this->request->data)) {
				$this->Session->setFlash(__('The artigos item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The artigos item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ArtigosItem.' . $this->ArtigosItem->primaryKey => $id));
			$this->request->data = $this->ArtigosItem->find('first', $options);
		}
		$artigos = $this->ArtigosItem->Artigo->find('list');
		$items = $this->ArtigosItem->Item->find('list');
		$this->set(compact('artigos', 'items'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ArtigosItem->id = $id;
		if (!$this->ArtigosItem->exists()) {
			throw new NotFoundException(__('Invalid artigos item'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ArtigosItem->delete()) {
			$this->Session->setFlash(__('The artigos item has been deleted.'));
		} else {
			$this->Session->setFlash(__('The artigos item could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
