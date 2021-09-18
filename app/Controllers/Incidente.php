<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Database\Query;

class Incidente extends BaseController
{
    use ResponseTrait;
    
    public function index()
    {
        return view('incidente');
    }
    
    public function cadastrarincidente()
    {
        $incidente_model = new \App\Models\IncidenteModel();
        $incidente =$incidente_model->save($this->request->getPost());
        return view('home');
    }

    public function visualizarportipo()
    {
        $db = \Config\Database::connect();
        $sql = $db->query('SELECT * FROM incidente ORDER BY tipo');
        $resultado = $sql->getResult();
        foreach($resultado as $linha){
            echo $linha->tipo . "<br>";
            echo $linha->nome . "<br>";
            echo $linha->localizacao . "<br>";
            echo $linha->data_cadastro . "<br>";
            echo $linha->path_foto . "<br>";
            echo $linha->condicao_incidente . "<br>";
        }
        echo 'Total de Incidentes: ' . count($resultado);
    }

    public function visualizarporlocalizacao()
    {
        $db = \Config\Database::connect();
        $sql = $db->query('SELECT * FROM incidente ORDER BY localizacao');
        $resultado = $sql->getResult();
        foreach($resultado as $linha){
            echo $linha->tipo . "<br>";
            echo $linha->nome . "<br>";
            echo $linha->localizacao . "<br>";
            echo $linha->data_cadastro . "<br>";
            echo $linha->path_foto . "<br>";
            echo $linha->condicao_incidente . "<br>";
        }
        echo 'Total de Incidentes: ' . count($resultado);
    }

    public function visualizarpordata()
    {
        $db = \Config\Database::connect();
        $sql = $db->query('SELECT * FROM incidente ORDER BY data_cadastro');
        $resultado = $sql->getResult();
        foreach($resultado as $linha){
            echo $linha->tipo . "/ ";
            echo $linha->nome . "/ ";
            echo $linha->localizacao . "/ ";
            echo $linha->data_cadastro . "/ ";
            echo $linha->path_foto . "/ ";
            echo $linha->condicao_incidente . "<br><br>";
        }
        echo 'Total de Incidentes: ' . count($resultado);
    }

    /*public function marcarincidente(){
        $dados = $this->request->getPost();
        $incidente_model = new \App\Models\IncidenteModel();
        $data = [
            'username' => 'darth',
            'email'    => 'd.vader@theempire.com',
        ];
        $incidente_model->update($id, $data);
    }*/
}
