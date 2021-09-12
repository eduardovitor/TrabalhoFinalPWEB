<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Database\Query;

class Login extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        return view('login');
    }

    public function validar(){

        $request=$this->request->getPost();
        $email=$request["email"];
        $senha=$request["senha"];
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM cidadao WHERE email = ? AND senha = ?";
        $result=$db->query($sql, [$email, $senha]);
        $linhas_afetadas=$result->getNumRows();

        if($linhas_afetadas>0){
            session_start();
            $_SESSION['email']=$email;
            $_SESSION['senha']=$senha;
            return view('home');
        }   
        else{
            echo "Usuário ou senha incorretos !";
        }
    }
}
