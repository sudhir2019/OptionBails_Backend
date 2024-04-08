<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\createuserModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Illuminate\Support\Facades\DB;

class creteuser extends BaseController
{

    public function createUseraccount(): string
    {
        $user = new createuserModel;
        
        $data['mayur'] = $user->findAll();
        
        $db = \Config\Database::connect();
        $builder = $db->table( 'user_account' );
        $builder->select( '*' );
        $builder->join( 'wallet_master', 'user_account.user_id = wallet_master.user_id', 'left' );
        $query = $builder->get();
        $data['user'] = $query->getRow();

        return view('create_user_accounts', $data);
    }
    public function createUseraccountf(): string
    {
        $auth = new AuthModel();
        $db = \Config\Database::connect();
        $builder = $db->table( 'user_account' );
        $builder->select( '*' );
        $builder->join( 'wallet_master', 'user_account.user_id = wallet_master.user_id', 'left' );
        $query = $builder->get();
        $data['user'] = $query->getRow();
        
        return view('create_user_accountf', $data);
    }

    public function insert()
    {
        $user = new createuserModel();

        $data = ["user_name" => $this->request->getPost("user_name"),
        "password" => $this->request->getPost("password"),
        "email" => $this->request->getPost("email"),
        "status" => $this->request->getPost("status"),
        "mobile_no" => $this->request->getPost("mobile_no"),
    ];
        $user->insert($data);
      
        return redirect()->to(site_url('createUseraccount'));
    }

    public function deleteuser($user_id)
    {
        $userModel = new createuserModel();
        $userModel->where('user_id', $user_id)->delete();
        return redirect()->to('/createUseraccount');
    }
    
    public function createUseraccountedit($user_id): string
    {
        $model = new createuserModel();
        $data = ["user_name" => $this->request->getPost("user_name"),
        "password" => $this->request->getPost("password"),
        "email" => $this->request->getPost("email"),
        "status" => $this->request->getPost("status"),
        "mobile_no" => $this->request->getPost("mobile_no"),
    ];
        $data['account'] = $model->where('user_id',$user_id)->first();
        
        $auth = new AuthModel();
        $db = \Config\Database::connect();
        $builder = $db->table( 'user_account' );
        $builder->select( '*' );
        $builder->join( 'wallet_master', 'user_account.user_id = wallet_master.user_id', 'left' );
        $query = $builder->get();
        $data['user'] = $query->getRow();

        return view('create_user_account_edit', $data);
    }

    public function updateTablle()
    {
        $model = new createuserModel();

        $new = ["user_name" => $this->request->getPost("user_name"),
        "password" => $this->request->getPost("password"),
        "email" => $this->request->getPost("email"),
        "status" => $this->request->getPost("status"),
        "mobile_no" => $this->request->getPost("mobile_no"),
    ];
        // echo "<pre>";
        // print_r($new);

        // Insert data into the database
        $model->update($this->request->getPost('user_id'), $new);
        

        return redirect()->to(site_url('createUseraccount'));
    
    }
}