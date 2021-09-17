<?php

namespace App\Controllers;

class Incidente extends BaseController
{
    use ResponseTrait;
    
    public function index()
    {
        return view('incidente');
    }
    
    public function cadastrarIncidente()
    {
        $incidente_model = new \App\Models\IncidenteModel();
        $incidente =$incidente_model->save($this->request->getPost());
        return view('home');
    }

    public function visualizarPorTipo()
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM incidente ORDER BY tipo";
        $resultado = $db->query($sql);
        $linhas_afetadas = $resultado->getNumRows()
        if($linhas_afetadas > 0){
            while($row = $resultado->fetch_assoc()){
                echo "ID: " . $row["id"] . "Tipo: " . $row["tipo"] . "Nome: " . $row["nome"] . "Localização: " . $row["localizacao"] . "Data de cadastro: " . $row["data_cadastro"] . "Foto: " . $row["path_foto"] . "Condição do incidente: " . $row["condicao_incidente"] . "<br>";
            }
        }
        else{
            echo "Não há incidentes cadastrados!";
        }
    }

    public function visualizarPorLocalizacao()
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM incidente ORDER BY localizacao";
        $resultado = $db->query($sql);
        $linhas_afetadas = $resultado->getNumRows()
        if($linhas_afetadas > 0){
            while($row = $resultado->fetch_assoc()){
                echo "ID: " . $row["id"] . "Tipo: " . $row["tipo"] . "Nome: " . $row["nome"] . "Localização: " . $row["localizacao"] . "Data de cadastro: " . $row["data_cadastro"] . "Foto: " . $row["path_foto"] . "Condição do incidente: " . $row["condicao_incidente"] . "<br>";
            }
        }
        else{
            echo "Não há incidentes cadastrados!";
        }
    }

    public function visualizarPorData()
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM incidente ORDER BY data_cadastro";
        $resultado = $db->query($sql);
        $linhas_afetadas = $resultado->getNumRows()
        if($linhas_afetadas > 0){
            while($row = $resultado->fetch_assoc()){
                echo "ID: " . $row["id"] . "Tipo: " . $row["tipo"] . "Nome: " . $row["nome"] . "Localização: " . $row["localizacao"] . "Data de cadastro: " . $row["data_cadastro"] . "Foto: " . $row["path_foto"] . "Condição do incidente: " . $row["condicao_incidente"] . "<br>";
            }
        }
        else{
            echo "Não há incidentes cadastrados!";
        }
    }

    /*public function marcarIncidente(){
        $dados = $this->request->getPost();
        $incidente_model = new \App\Models\IncidenteModel();
        $data = [
            'username' => 'darth',
            'email'    => 'd.vader@theempire.com',
        ];
        $incidente_model->update($id, $data);
    }*/
}
