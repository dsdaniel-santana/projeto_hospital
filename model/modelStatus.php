<?php
class modelStatus{
    public function listarStatus(){
        try{
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_status");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch(PDOException $e){
            return false;
        }
    }

}

//CREATE TABLE IF NOT EXISTS tbl_status(
//    id_status INT AUTO_INCREMENT PRIMARY KEY,
//    descricao VARCHAR(20)
//);

?>