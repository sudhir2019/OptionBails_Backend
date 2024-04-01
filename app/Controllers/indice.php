<?php

namespace App\Controllers;

use App\Models\IndiceModel;
use App\Models\AuthModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Illuminate\Support\Facades\DB;

class indice extends BaseController
{

    public function createIndices(): string
    {
        $auth = new AuthModel();
        $model = new IndiceModel();
        $data['indice'] = $model->findAll();
        
        $db = \Config\Database::connect();
        $builder = $db->table( 'user_account' );
        $builder->select( '*' );
        $builder->join( 'wallet_master', 'user_account.user_id = wallet_master.user_id', 'left' );
        $query = $builder->get();
        $data['user'] = $query->getRow();

        return view('create_indice', $data);
    }
    public function createIndicesf(): string
    {
        $auth = new AuthModel();
        $db = \Config\Database::connect();
        $builder = $db->table( 'user_account' );
        $builder->select( '*' );
        $builder->join( 'wallet_master', 'user_account.user_id = wallet_master.user_id', 'left' );
        $query = $builder->get();
        $data['user'] = $query->getRow();
        
        return view('create_indicef', $data);
    }
    // create_indice_edit

    public function createIndicesedit($index_id): string
    {
        $model = new IndiceModel();
        $data = [
            "index_name" => $this->request->getPost("index_name"),
            "index_value" => $this->request->getPost("index_Value"),
            "index_subvalue" => $this->request->getPost("index_subvalue"),
            "match_id" => $this->request->getPost("match_id"),
            "start_date" => $this->request->getPost("start_date"),
            "end_date" => $this->request->getPost("end_date"),
            "start_time" => $this->request->getPost("start_time"),
            "end_time" => $this->request->getPost("end_time")
        ];
        $data['indice'] = $model->where('index_id',$index_id)->first();
        
        $auth = new AuthModel();
        $db = \Config\Database::connect();
        $builder = $db->table( 'user_account' );
        $builder->select( '*' );
        $builder->join( 'wallet_master', 'user_account.user_id = wallet_master.user_id', 'left' );
        $query = $builder->get();
        $data['user'] = $query->getRow();

        return view('create_indice_edit', $data);
    }
    public function insert()
    {
        $model = new IndiceModel();

        $data = [
            "index_name" => $this->request->getPost("index_name"),
            "index_value" => $this->request->getPost("index_value"),
            "index_subvalue" => $this->request->getPost("index_subvalue"),
            "match_id" => $this->request->getPost("match_id"),
            "start_date" => $this->request->getPost("start_date"),
            "end_date" => $this->request->getPost("end_date"),
            "start_time" => $this->request->getPost("start_time"),
            "end_time" => $this->request->getPost("end_time")
        ];

        
        // Insert data into the database
        $model->insert($data);
        return redirect()->to(site_url('createIndices'));
    
    }
    // updateTable
    public function updateTable()
    {
        $model = new IndiceModel();

        $new = [
            // "index_id"=> $this->request->getPost('index_id'),
            "index_name" => $this->request->getPost("index_name"),
            "index_value" => $this->request->getPost("index_value"),
            "index_subvalue" => $this->request->getPost("index_subvalue"),
            "match_id" => $this->request->getPost("match_id"),
            "start_date" => $this->request->getPost("start_date"),
            "end_date" => $this->request->getPost("end_date"),
            "start_time" => $this->request->getPost("start_time"),
            "end_time" => $this->request->getPost("end_time")
        ];
        // echo "<pre>";
        // print_r($new);

        // Insert data into the database
        $model->update($this->request->getPost('index_id'), $new);
        

        return redirect()->to(site_url('createIndices'));
    
    }
    // delete
    public function delete($index_id)
    {
        $userModel = new IndiceModel();
        $userModel->where('index_id', $index_id)->delete();
        return redirect()->to('/createIndices');
    }

}
