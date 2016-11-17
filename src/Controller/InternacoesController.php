<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Internacoes Controller
 *
 * @property \App\Model\Table\InternacoesTable $Internacoes
 */
class InternacoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $internacoes = $this->paginate($this->Internacoes);

        $this->set(compact('internacoes'));
        $this->set('_serialize', ['internacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Internaco id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $internaco = $this->Internacoes->get($id, [
            'contain' => []
        ]);

        $this->set('internaco', $internaco);
        $this->set('_serialize', ['internaco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $internaco = $this->Internacoes->newEntity();
        if ($this->request->is('post')) {
            $internaco = $this->Internacoes->patchEntity($internaco, $this->request->data);
            if ($this->Internacoes->save($internaco)) {
                $this->Flash->success(__('The internaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The internaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('internaco'));
        $this->set('_serialize', ['internaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Internaco id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $internaco = $this->Internacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $internaco = $this->Internacoes->patchEntity($internaco, $this->request->data);
            if ($this->Internacoes->save($internaco)) {
                $this->Flash->success(__('The internaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The internaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('internaco'));
        $this->set('_serialize', ['internaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Internaco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $internaco = $this->Internacoes->get($id);
        if ($this->Internacoes->delete($internaco)) {
            $this->Flash->success(__('The internaco has been deleted.'));
        } else {
            $this->Flash->error(__('The internaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
