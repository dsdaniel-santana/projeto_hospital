<?php

class controllerCargos{

    public function listarCargos(){
        try {
            
            $modelCargos =  new modelCargos();
            return $modelCargos->listarCargos();
        } catch (PDOException $e) {
            return false;
        }

    }

    public function cadastrarCargo($descricao_cargo){
        try {
            $modelCargos =  new modelCargos();
            return $modelCargos->cadastrarCargo($descricao_cargo);
        } catch (PDOException $e) {
            return false;
        }

    }

    public function atualizarCargo($descricao_cargo, $id_cargo){
        try {
            $modelCargos =  new modelCargos();
            return $modelCargos->atualizarCargo($descricao_cargo, $id_cargo);
        } catch (PDOException $e) {
            return false;
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