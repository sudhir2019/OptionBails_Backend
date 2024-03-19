<?php

namespace App\Controllers;

use App\Models\IndiceModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Illuminate\Support\Facades\DB;

class indice extends BaseController
{

    public function createIndices(): string
    {
        $model = new IndiceModel();
        $data['indice'] = $model->findAll();

        return view('create_indice', $data);
    }
    public function createIndicesf(): string
    {
        return view('create_indicef');
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
}
