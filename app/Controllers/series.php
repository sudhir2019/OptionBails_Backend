<?php

namespace App\Controllers;

use App\Models\SeriesModel;
use App\Models\AuthModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Illuminate\Support\Facades\DB;

class series extends BaseController
{

    public function t20ipllive(): string
    {
        $auth = new AuthModel();
        // $model = new IndiceModel();
        // $data['indice'] = $model->findAll();
        
        $db = \Config\Database::connect();
        $builder = $db->table( 'user_account' );
        $builder->select( '*' );
        $builder->join( 'wallet_master', 'user_account.user_id = wallet_master.user_id', 'left' );
        $query = $builder->get();
        $data['user'] = $query->getRow();

        return view('t20_ipl_live', $data);
    }

    public function t20iplupcoming(): string
    {
        $auth = new AuthModel();
        // $model = new IndiceModel();
        // $data['indice'] = $model->findAll();
        
        $db = \Config\Database::connect();
        $builder = $db->table( 'user_account' );
        $builder->select( '*' );
        $builder->join( 'wallet_master', 'user_account.user_id = wallet_master.user_id', 'left' );
        $query = $builder->get();
        $data['user'] = $query->getRow();

        return view('t20_ipl_upcoming', $data);
    }

    public function allseries()
    {
        $auth = new AuthModel();
        // $model = new IndiceModel();
        // $data['indice'] = $model->findAll();
        
        $db = \Config\Database::connect();
        $builder = $db->table( 'user_account' );
        $builder->select( '*' );
        $builder->join( 'wallet_master', 'user_account.user_id = wallet_master.user_id', 'left' );
        $query = $builder->get();
        $data['user'] = $query->getRow();

        $secondbuilder = $db->table( 'custom_series');
        $secondbuilder->select( '*');
        $querysecond = $secondbuilder->get();
        $data['customseries'] = $querysecond->getResult();

        // print_r($data['customseries']);


        return view('allseries',$data);
    }


    public function getMatchList(){
      
        $db = \Config\Database::connect();
        $builder = $db->table( 'user_account' );
        $builder->select( '*' );
        $builder->join( 'wallet_master', 'user_account.user_id = wallet_master.user_id', 'left' );
        $query = $builder->get();
        $data['user'] = $query->getRow();

        return view('getmatchlist',$data);
    }

    public function addcustomseries(){
      
        $db = \Config\Database::connect();
        $builder = $db->table( 'user_account' );
        $builder->select( '*' );
        $builder->join( 'wallet_master', 'user_account.user_id = wallet_master.user_id', 'left' );
        $query = $builder->get();
        $data['user'] = $query->getRow();

        return view('addcustomseries',$data);
    }
    public function insertseries()
    {
        $model1 = new SeriesModel();

        $data = [
            "id" => $this->request->getPost("id"),
            "name" => $this->request->getPost("name"),
            "matches" => $this->request->getPost("matches"),
            "start_date" => $this->request->getPost("start_date"),
            "end_date" => $this->request->getPost("end_date"),
            "odi" => $this->request->getPost("odi"),
            "t20" => $this->request->getPost("t20"),
            "test" => $this->request->getPost("test"),
            "squads" => $this->request->getPost("squads"),
            "aid" => $this->request->getPost("aid")
        ];

        
        // Insert data into the database
        $model1->insert($data);
        return redirect()->to(site_url('addcustomseries'));

       
    }


    public function makeIndex(){
        $db = \Config\Database::connect();
        $builder = $db->table( 'user_account' );
        $builder->select( '*' );
        $builder->join( 'wallet_master', 'user_account.user_id = wallet_master.user_id', 'left' );
        $query = $builder->get();
        $data['user'] = $query->getRow();

        return view('create_index',$data);
        // echo "ok";
    }

    
   
}
