<?php

namespace App\Controllers;

class Incidente extends BaseController
{
    use ResponseTrait;
    
    public function index()
    {
        return view('incidente');
    }
    
    public function cadastrar()
    {
        $incidente_model = new \App\Models\IncidenteModel();
        $incidente =$incidente_model->save($this->request->getPost());
        return view('home');
    }

    public function visualizar()
    {
        
    }
}
