<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Regulacoes Controller
 *
 * @property \App\Model\Table\RegulacoesTable $Regulacoes
 */
class RegulacoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $regulacoes = $this->paginate($this->Regulacoes);

        $this->set(compact('regulacoes'));
        $this->set('_serialize', ['regulacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Regulaco id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $regulaco = $this->Regulacoes->get($id, [
            'contain' => []
        ]);

        $this->set('regulaco', $regulaco);
        $this->set('_serialize', ['regulaco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $regulaco = $this->Regulacoes->newEntity();
        if ($this->request->is('post')) {
            $regulaco = $this->Regulacoes->patchEntity($regulaco, $this->request->data);
            if ($this->Regulacoes->save($regulaco)) {
                $this->Flash->success(__('The regulaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The regulaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('regulaco'));
        $this->set('_serialize', ['regulaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Regulaco id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $regulaco = $this->Regulacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $regulaco = $this->Regulacoes->patchEntity($regulaco, $this->request->data);
            if ($this->Regulacoes->save($regulaco)) {
                $this->Flash->success(__('The regulaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The regulaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('regulaco'));
        $this->set('_serialize', ['regulaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Regulaco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $regulaco = $this->Regulacoes->get($id);
        if ($this->Regulacoes->delete($regulaco)) {
            $this->Flash->success(__('The regulaco has been deleted.'));
        } else {
            $this->Flash->error(__('The regulaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
