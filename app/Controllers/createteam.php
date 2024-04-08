<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\TeamModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Illuminate\Support\Facades\DB;

class createteam extends BaseController
{
    public function createteams()
    {
        $team = new TeamModel();
        $data['team']=$team->findAll();

        $auth = new AuthModel();
        $db = \Config\Database::connect();
        $builder = $db->table( 'user_account' );
        $builder->select( '*' );
        $builder->join( 'wallet_master', 'user_account.user_id = wallet_master.user_id', 'left' );
        $query = $builder->get();
        $data['user'] = $query->getRow();
        
        return view('createteams',$data);
    }

    public function insert()
    {
        $team = new TeamModel();

        $data = ["team_name" => $this->request->getPost("team_name"),];
        $team->insert($data);
      
        return redirect()->to(site_url('createteam'));
    }

    public function deleteteam($team_id)
    {
        $team = new TeamModel();
        
        $team->where('team_id', $team_id)->delete();
        // echo "oo";
        return redirect()->to('/createteam');
    }

    public function createteamsf($team_id): string
    {
        $model = new TeamModel();
        $data = [
            "team_name" => $this->request->getPost("team_name")        
        ];
        $data['team'] = $model->where('team_id',$team_id)->first();
        
        $auth = new AuthModel();
        $db = \Config\Database::connect();
        $builder = $db->table( 'user_account' );
        $builder->select( '*' );
        $builder->join( 'wallet_master', 'user_account.user_id = wallet_master.user_id', 'left' );
        $query = $builder->get();
        $data['user'] = $query->getRow();

        return view('createteams_f', $data);
    }

    public function updateTablee()
    {
        $model = new TeamModel();

        $new = [
            "team_name" => $this->request->getPost("team_name")        
        ];
        // echo "<pre>";
        // print_r($new);

        // Insert data into the database
        $model->update($this->request->getPost('team_id'), $new);
        // echo "kk";
      
         return redirect()->to(site_url('/createteam'));
    
    }
    
}
