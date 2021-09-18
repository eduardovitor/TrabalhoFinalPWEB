<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }
    public function dezfavorecidas(){
        $i=15;
			while($i<21){
				$json = file_get_contents("http://transparencia.al.gov.br/despesa/json-despesa-favorecido/?data_registro_dti_=01/01/20".$i."&data_registro_dtf_=31/12/20".$i."&limit=10&offset=0&sort=total_pago&order=desc");
				$obj = json_decode($json);
				echo "<ul>10 empresas mais favorecidas por no ano de 20".$i.":</ul>";
				for($aux=0;$aux<10;$aux++){
					echo "<li>".$obj->rows[$aux]->nome_favorecido."</li>";
				}
				$i++;
			}
    }
    public function dezorgaos(){
        //Não foi possível receber dados do ano vigente e do ano anterior devido a limitações da API
			$json = file_get_contents("http://transparencia.al.gov.br/despesa/json-despesa-favorecido-ug/19775376000104/?data_registro_dti_=01/01/2015&data_registro_dtf_=31/12/2015&limit=10&offset=0");
			$obj = json_decode($json);
			echo "<ul>10 orgãos que mais receberam recursos no ano de 2015:</ul>";
			echo "<li>".$obj->rows[0]->descricao_ug."</li>";
			echo "<li>".$obj->rows[1]->descricao_ug."</li>";
			echo "<li>".$obj->rows[2]->descricao_ug."</li>";
    }
}
