<?php
include_once("services/conexao.php");
include_once("controller/controllerCargos.php");
include_once("model/modelCargos.php");

$controllerCargos = new controllerCargos();
$resultado = $controllerCargos->listarCargos();

if($resultado){
    $msg = array("status"=> $resultado);
    echo json_encode($msg);
} else{
    $msg = array("Erro:"=> "Erro ao consultar dados");
    echo json_encode($msg);

}


?>