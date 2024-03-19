<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'user_account';
    protected $allowedFields = ['user_id','user_name','email','password','mobile_no'];
  
}
