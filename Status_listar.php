<?php
include_once("services/conexao.php");
include_once("controller/cotrollerStatus.php");
include_once("model/modelStatus.php");

$controllerStatus = new controllerStatus();
$lista = $controllerStatus->listarStatus();

if($lista){
    $msg = array ("status"=> $lista);
}

?>