<?php

class modelProcedimentosExames{

    public function listarExames(){
        try {
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_procedimentos_exame");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
            
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarProcedimentoExame($id_tipos_procedimento) {
        try {
            $pdo = Database::conexao();
            $cadastrar = $pdo->prepare("INSERT INTO tbl_procedimentos_exame (id_tipos_procedimento) VALUES (:id_tipos_procedimento)");
            $cadastrar->bindParam(":id_tipos_procedimento", $id_tipos_procedimento);
    
            $cadastrar->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    

    public function atualizarProcedimentoExame($id_procedimentos_exame, $id_tipos_procedimento) {
        try {
            $pdo = Database::conexao();
            $atualizar = $pdo->prepare("UPDATE tbl_procedimentos_exame SET id_tipos_procedimento=:id_tipos_procedimento WHERE id_procedimentos_exame=:id_procedimentos_exame");
            $atualizar->bindParam(":id_procedimentos_exame", $id_procedimentos_exame);
            $atualizar->bindParam(":id_tipos_procedimento", $id_tipos_procedimento);
            $atualizar->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    
}



//CREATE TABLE IF NOT EXISTS tbl_procedimentos_exame(
//    id_procedimentos_exame INT AUTO_INCREMENT PRIMARY KEY,
//    id_tipos_procedimento INT,
//    CONSTRAINT fk_id_tipos_procedimento FOREIGN KEY (id_tipos_procedimento) REFERENCES tbl_tipos_procedimentos(id_tipos_procedimento)
//);
?>