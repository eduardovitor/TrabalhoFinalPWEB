<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Database\ConnectionInterface;

class Cidadao extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        return view('cidadao');
    }
    public function cadastrar(){
        $cidadao_model=new \App\Models\CidadaoModel();
        $cidadao=$cidadao_model->save($this->request->getPost());
        return view('home');
    }
}
