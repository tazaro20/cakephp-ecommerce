<?php
declare(strict_types=1);

namespace App\Controller\Admin;

/**
 * PartnerServices Controller
 *
 * @property \App\Model\Table\PartnerServicesTable $PartnerServices
 */
class PartnerServicesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->PartnerServices->find()
            ->contain(['Partners']);
        $partnerServices = $this->paginate($query);

        $this->set(compact('partnerServices'));
    }

    /**
     * View method
     *
     * @param string|null $id Partner Service id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $partnerService = $this->PartnerServices->get($id, contain: ['Partners']);
        $this->set(compact('partnerService'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $partnerService = $this->PartnerServices->newEmptyEntity();
        if ($this->request->is('post')) {
            $partnerService = $this->PartnerServices->patchEntity($partnerService, $this->request->getData());
            if ($this->PartnerServices->save($partnerService)) {
                $this->Flash->success(__('The partner service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The partner service could not be saved. Please, try again.'));
        }
        $partners = $this->PartnerServices->Partners->find('list', limit: 200)->all();
        $this->set(compact('partnerService', 'partners'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Partner Service id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $partnerService = $this->PartnerServices->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $partnerService = $this->PartnerServices->patchEntity($partnerService, $this->request->getData());
            if ($this->PartnerServices->save($partnerService)) {
                $this->Flash->success(__('The partner service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The partner service could not be saved. Please, try again.'));
        }
        $partners = $this->PartnerServices->Partners->find('list', limit: 200)->all();
        $this->set(compact('partnerService', 'partners'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Partner Service id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $partnerService = $this->PartnerServices->get($id);
        if ($this->PartnerServices->delete($partnerService)) {
            $this->Flash->success(__('The partner service has been deleted.'));
        } else {
            $this->Flash->error(__('The partner service could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
