<?php
include_once("services/conexao.php");
include_once("controller/controller_tipos_procedimentos.php");
include_once("model/model_tipos_procedimentos.php");

$controllerProcedimentos = new controllerProcedimentos();
$resultado = $controllerProcedimentos->listarProcedimentos();

if($resultado){
    $msg = array("status"=> $resultado);
    echo json_encode($msg);
    
} else {
    $msg = array("Erro:"=> "Erro ao consultar dados");
    echo json_encode($msg);
}


?>