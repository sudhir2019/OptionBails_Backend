<?php

namespace App\Models;

use CodeIgniter\Model;

class IndiceModel extends Model
{
    protected $table = 'game_indices';
    protected $primaryKey = 'index_id';
    protected $allowedFields = ['index_name','index_value','index_subvalue','match_id',"start_date","end_date","start_time","end_time"];
}
