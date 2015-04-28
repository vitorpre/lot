<?php
App::uses('AppController', 'Controller');
// App::import('Vendor', 'zend_include_path');
// App::import('Vendor', 'Zend_Gdata', true, false, 'Zend/Gdata.php');

// Zend_Loader::loadClass('Zend_Gdata_AuthSub');
// Zend_Loader::loadClass('Zend_Gdata_ClientLogin'); 

// Zend_Loader::loadClass('Zend_Gdata_Photos');
// Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
// Zend_Loader::loadClass('Zend_Gdata_AuthSub');
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
		$this->Artigo->create($this->request->data);
		$this->Artigo->data['Artigo']['imagem_capa'] = $this->data['Artigo']['upload']['name'];
		if ($this->Artigo->saveAll()) {
			$file = $this->data['Artigo']['upload']; //put the data into a var for easy use

                $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions

                //only process if the extension is valid
                if(in_array($ext, $arr_ext)){
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it

                	$path = str_replace("\\", "/", IMAGES) . "artigos/";
                	mkdir($path . $this->Artigo->getLastInsertId(), 0700);
                	move_uploaded_file($file['tmp_name'], $path . $this->Artigo->getLastInsertId() . "/" . $file['name']);
                	
                    //prepare the filename for database entry
                	$this->data['Artigo']['product_image'] = $file['name'];
                }
                $this->Session->setFlash(__('The artigo has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
            	$this->Session->setFlash(__('The artigo could not be saved. Please, try again.'));
            }



        }

        $usuarios = $this->Artigo->Usuario->find('list',array(
        	'fields' => array('Usuario.id','Usuario.login')
        	));
        $categorias = $this->Artigo->Categoria->find('list',array(
        	'fields' => array('Categoria.id','Categoria.nome')
        	));
        $champions = $this->Artigo->Champion->find('list',array(
        	'fields' => array('Champion.id','Champion.nome')
        	));
        $items = $this->Artigo->Item->find('list',array(
        	'fields' => array('Item.id','Item.nome')
        	));
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
