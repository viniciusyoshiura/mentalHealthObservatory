<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Unidades Controller
 *
 * @property \App\Model\Table\UnidadesTable $Unidades
 */
class UnidadesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $unidades = $this->paginate($this->Unidades);

        $this->set(compact('unidades'));
        $this->set('_serialize', ['unidades']);
    }

    /**
     * View method
     *
     * @param string|null $id Unidade id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $unidade = $this->Unidades->get($id, [
            'contain' => []
        ]);

        $this->set('unidade', $unidade);
        $this->set('_serialize', ['unidade']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $unidade = $this->Unidades->newEntity();
        if ($this->request->is('post')) {
            $unidade = $this->Unidades->patchEntity($unidade, $this->request->data);
            if ($this->Unidades->save($unidade)) {
                $this->Flash->success(__('The unidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The unidade could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('unidade'));
        $this->set('_serialize', ['unidade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Unidade id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $unidade = $this->Unidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $unidade = $this->Unidades->patchEntity($unidade, $this->request->data);
            if ($this->Unidades->save($unidade)) {
                $this->Flash->success(__('The unidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The unidade could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('unidade'));
        $this->set('_serialize', ['unidade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Unidade id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $unidade = $this->Unidades->get($id);
        if ($this->Unidades->delete($unidade)) {
            $this->Flash->success(__('The unidade has been deleted.'));
        } else {
            $this->Flash->error(__('The unidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
