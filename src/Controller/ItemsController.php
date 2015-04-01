<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items
 */
class ItemsController extends AppController
{
    /**
     * Before filter, control acl roles and public methods here
     *
     * @return void
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['displaysecond']);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('items', $this->paginate($this->Items));
        $this->set('_serialize', ['items']);
    }

    /**
     * View method
     *
     * @param string|null $id Item id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => []
        ]);
        $this->set('item', $item);
        $this->set('_serialize', ['item']);
    }

    /**
     * View method
     *
     * @param string|null $id Block id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function displaysecond($id = null)
    {   
        $id = 1;
        $item = $this->Items->get($id, [
            'contain' => []
        ]);
        $this->set('item', $item);
        $this->set('_serialize', ['item']);
        $this->set('title', 'Second' ); 
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $item = $this->Items->newEntity();
        if ($this->request->is('post')) {
            $item = $this->Items->patchEntity($item, $this->request->data);
            if ($this->Items->save($item)) {
                $this->Flash->success('The item has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The item could not be saved. Please, try again.');
            }
        }
        $this->set(compact('item'));
        $this->set('_serialize', ['item']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Item id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $item = $this->Items->patchEntity($item, $this->request->data);
            if ($this->Items->save($item)) {
                $this->Flash->success('The item has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The item could not be saved. Please, try again.');
            }
        }
        $this->set(compact('item'));
        $this->set('_serialize', ['item']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Item id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $item = $this->Items->get($id);
        if ($this->Items->delete($item)) {
            $this->Flash->success('The item has been deleted.');
        } else {
            $this->Flash->error('The item could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
