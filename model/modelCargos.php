<?php
class modelCargos{
    public function listarCargos(){
        try {
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_cargos");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarCargo(){
        try {
            $pdo = Database::conexao();
            $inserir = $pdo->prepare("INSERT INTO tbl_cargos (descricao_cargo) VALUES(:descricao_cargo)");

            $inserir->bindParam(':descricao_cargo', $descricao_cargo);
            $inserir->execute();

        } catch (PDOException $e) {
            return false;
        }        
    }

    public function atualizarCargo($descricao_cargo, $id_cargo ){
        try {
            $pdo = Database::conexao();
            $atualizar = $pdo->prepare("UPDATE tbl_cargos
            SET descricao_cargo = :descricao_cargo,
            WHERE id_cargo = :id_cargo");

            $atualizar->bindParam(":descricao_cargo", $descricao_cargo);
            $atualizar->bindParam(":id_cargo",$id_cargo);

            $atualizar->execute();
            return true;

        } catch (PDOException $e) {
            //throw $th;
        }        
    }
}


//CREATE TABLE IF NOT EXISTS tbl_cargos(
//    id_cargo INT AUTO_INCREMENT PRIMARY KEY,
//    descricao_cargo VARCHAR(50)
//);
//public function listarCargo
//public function cadastrarCargo
//public function atualizarCargo


?>

