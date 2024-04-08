<?php

namespace App\Models;

use CodeIgniter\Model;

class createuserModel extends Model
{
    protected $table = 'user_account';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['user_id','user_name','password','email','status','mobile_no'];
}