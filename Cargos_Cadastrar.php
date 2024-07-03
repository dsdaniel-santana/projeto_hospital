<?php
include_once("services/conexao.php");
include_once("controller/controllerCargos.php");
include_once("model/modelCargos.php");

$data = json_decode (file_get_contents('php://input'), true);

$descricao_cargo = $data["descricao_cargo"];

$contorllerCargos = new contorllerCargos() ;
$resultado = $contorllerCargos->cadastrarCargo($descricao_cargo);
if($resultado){
    $msg = array("msg" => "Cadastro Efetuado com Sucesso!");
    echo json_encode($msg);
} else {
    $msg = array("erro" =>"Erro ao Cadastrar Cargo");
    echo $e;
    echo json_encode($msg);
}


//CREATE TABLE IF NOT EXISTS tbl_cargos(
//    id_cargo INT AUTO_INCREMENT PRIMARY KEY,
//    descricao_cargo VARCHAR(50)
//);
//public function listarCargo
//public function cadastrarCargo
//public function atualizarCargo



?>