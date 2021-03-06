<?php
namespace App\Controller;
use Cake\Event\Event;
use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
	public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow([ 'logout', 'registration']);
    }

	public function logout()
	{
		return $this->redirect($this->Auth->logout());
	}
	
    public function login()
    {
		$this->viewBuilder()->layout('login');
        if ($this->request->is('post')) 
		{
            $user = $this->Auth->identify();
            if ($user) 
			{
				$user=$this->Users->get($user['id'], [
					'contain' =>['Companies'=>
									['FinancialYears'=>function($q){
										return $q->where(['FinancialYears.status'=>'open'])->order(['FinancialYears.fy_from'=>'ASC']);
									}]
								]
				]);
				if($user->company){
					$fyValidFrom=$user->company->financial_years[0]->fy_from;
					foreach($user->company->financial_years as $financial_year){
						$fyValidTo=$financial_year->fy_to;
					}
					$user->fyValidFrom=$fyValidFrom;
					$user->fyValidTo=$fyValidTo;
					unset($user->company->financial_years);
				}
				
				
                $this->Auth->setUser($user);
				return $this->redirect(['controller'=>'Users','action' => 'Dashboard']);
            }
            $this->Flash->error(__('Invalid Username or Password'));
        }
		$user = $this->Users->newEntity();
        $this->set(compact('user'));
    }

    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function registration()
    {
		$this->viewBuilder()->layout('login');
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function dashboard()
    {
        $this->viewBuilder()->layout('index_layout');
    }
    
}
