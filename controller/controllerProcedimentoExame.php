<?php class controllerProcedimentosExame {

public function listarExames() {
    try {
        $modelProcedimentosExames = new modelProcedimentosExames();
        return $modelProcedimentosExames->listarExames(); 
    } catch (PDOException $e) {
        return false;
    }
}

public function cadastrarProcedimentoExame($id_tipos_procedimento) {
    try {
        $modelProcedimentosExames = new modelProcedimentosExames();
        return $modelProcedimentosExames->cadastrarProcedimentoExame($id_tipos_procedimento);
    } catch (PDOException $e) {
        return false;
    }
}

public function atualizarProcedimentoExame($id_procedimentos_exame, $id_tipos_procedimento) {
    try {
        $modelProcedimentosExames = new modelProcedimentosExames();
        return $modelProcedimentosExames->atualizarProcedimentoExame($id_procedimentos_exame, $id_tipos_procedimento);
    } catch (PDOException $e) {
        return false;
    }
}
}
?>