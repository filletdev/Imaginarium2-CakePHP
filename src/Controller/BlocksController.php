<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Blocks Controller
 *
 * @property \App\Model\Table\BlocksTable $Blocks
 */
class BlocksController extends AppController
{   
    /**
     * Before filter, control acl roles and public methods here
     *
     * @return void
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['displayhome']);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('blocks', $this->paginate($this->Blocks));
        $this->set('_serialize', ['blocks']);
    }

    /**
     * View method
     *
     * @param string|null $id Block id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $block = $this->Blocks->get($id, [
            'contain' => []
        ]);
        $this->set('block', $block);
        $this->set('_serialize', ['block']);
    }

    /**
     * View method
     *
     * @param string|null $id Block id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function displayhome($id = null)
    {   
        $id = 1;
        $block = $this->Blocks->get($id, [
            'contain' => []
        ]);
        $this->set('block', $block);
        $this->set('_serialize', ['block']);
        $this->set('title', 'Home' ); 
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $block = $this->Blocks->newEntity();
        if ($this->request->is('post')) {
            $block = $this->Blocks->patchEntity($block, $this->request->data);
            if ($this->Blocks->save($block)) {
                $this->Flash->success('The block has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The block could not be saved. Please, try again.');
            }
        }
        $this->set(compact('block'));
        $this->set('_serialize', ['block']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Block id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $block = $this->Blocks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $block = $this->Blocks->patchEntity($block, $this->request->data);
            if ($this->Blocks->save($block)) {
                $this->Flash->success('The block has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The block could not be saved. Please, try again.');
            }
        }
        $this->set(compact('block'));
        $this->set('_serialize', ['block']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Block id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $block = $this->Blocks->get($id);
        if ($this->Blocks->delete($block)) {
            $this->Flash->success('The block has been deleted.');
        } else {
            $this->Flash->error('The block could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
