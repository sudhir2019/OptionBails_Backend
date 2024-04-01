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
    
}
