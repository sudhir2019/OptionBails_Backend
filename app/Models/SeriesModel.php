<?php

namespace App\Models;

use CodeIgniter\Model;

class SeriesModel extends Model
{
    protected $table = 'custom_series';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','name','matches','start_date','end_date','odi','t20','test','squads','aid'];
}
