<?php
include_once("services/conexao.php");
include_once("controller/controllerProcedimentoExame.php");
include_once("model/modelProcedimentoExame.php");

$data = json_decode(file_get_contents('php://input'), true);

$id_tipos_procedimento = $data["id_tipos_procedimento"];

$controllerProcedimentosExame = new controllerProcedimentosExame();
$resultado = $controllerProcedimentosExame->cadastrarProcedimentoExame($id_tipos_procedimento);

if ($resultado) {
    $msg = array("msg" => "Cadastro Efetuado Com Sucesso!");
    echo json_encode($msg);
} else {
    $msg = array("erro" => "Erro ao cadastrar Procedimento de Exame");
    echo json_encode($msg);
}
?>
