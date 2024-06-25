<?php 

class controllerStatus{

    public function listarStatus(){
        try {
            $modelsStatus = new modelStatus();
            return $modelsStatus->listarStatus();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastarStatus($descricao){
        try {
            $descricao = filter_var($descricao, FILTER_SANITIZE_STRING);

            $pdo = Database::conexao();
            $inserir = $pdo->prepare("INSERT INTO tbl_status
            (descricao) VALUES (:descricao)" );

            $inserir->bindParam(':descricao', $descricao);
            $inserir->execute();

        } catch (\PDOException $e) {
            return false;
        }
    }
}



//CREATE TABLE IF NOT EXISTS tbl_status(
//    id_status INT AUTO_INCREMENT PRIMARY KEY,
//    descricao VARCHAR(20)
//);

?>