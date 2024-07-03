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

    public function cadastrarExames(){
        try {
            $pdo = Database::conexao();
            



        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarExames(){
        try {
            $pdo = Database::conexao();
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