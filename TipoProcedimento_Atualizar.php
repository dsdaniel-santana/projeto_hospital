<?php 
include_once("services/conexao.php");
include_once("controller/controller_tipos_procedimentos.php");
include_once("model/model_tipos_procedimentos.php");


$data = json_decode(file_get_contents("php://input"), true);
$descricao_procedimento = $data["descricao_procedimento"];
$id_tipos_procedimento = $data["id_tipos_procedimento"];



$controllerProcedimentos = new controllerProcedimentos();
$resultado = $controllerProcedimentos->atualizarProcedimentos($descricao_procedimento, $id_tipos_procedimento);
if($resultado){
    $msg = array ("msg" => "Atualização do Status realizada com sucesso!");
    echo json_encode($msg);
} else {
    $msg = array ("msg" => "Não foi possivel atualizar o Status!");
    echo json_encode($msg);
}





//CREATE TABLE IF NOT EXISTS tbl_tipos_procedimentos(
//    id_tipos_procedimento INT AUTO_INCREMENT PRIMARY KEY,
//    descricao_procedimento VARCHAR(50) 
//);


?>