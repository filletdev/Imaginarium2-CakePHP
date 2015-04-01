<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sideposts Controller
 *
 * @property \App\Model\Table\SidepostsTable $Sideposts
 */
class SidepostsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $this->set('sideposts', $this->paginate($this->Sideposts));
        $this->set('_serialize', ['sideposts']);
    }

    /**
     * View method
     *
     * @param string|null $id Sidepost id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sidepost = $this->Sideposts->get($id, [
            'contain' => ['Users']
        ]);
        $this->set('sidepost', $sidepost);
        $this->set('_serialize', ['sidepost']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sidepost = $this->Sideposts->newEntity();
        if ($this->request->is('post')) {
            $sidepost = $this->Sideposts->patchEntity($sidepost, $this->request->data);
            if ($this->Sideposts->save($sidepost)) {
                $this->Flash->success('The sidepost has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The sidepost could not be saved. Please, try again.');
            }
        }
        $users = $this->Sideposts->Users->find('list', ['limit' => 200]);
        $this->set(compact('sidepost', 'users'));
        $this->set('_serialize', ['sidepost']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sidepost id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sidepost = $this->Sideposts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sidepost = $this->Sideposts->patchEntity($sidepost, $this->request->data);
            if ($this->Sideposts->save($sidepost)) {
                $this->Flash->success('The sidepost has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The sidepost could not be saved. Please, try again.');
            }
        }
        $users = $this->Sideposts->Users->find('list', ['limit' => 200]);
        $this->set(compact('sidepost', 'users'));
        $this->set('_serialize', ['sidepost']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sidepost id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sidepost = $this->Sideposts->get($id);
        if ($this->Sideposts->delete($sidepost)) {
            $this->Flash->success('The sidepost has been deleted.');
        } else {
            $this->Flash->error('The sidepost could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
