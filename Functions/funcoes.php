<?php
require_once('Conexao.php');

class Funcoes extends Conexao {

    public function addItens($item) {
        if ($result = parent::insert("INSERT INTO ItemsAdicionados (ItemAdd) VALUES ('".$item."')")) {
        }
    }

    public function EditarItens($id ,$novapalavra) {

        if(isset($novapalavra)){
            parent::insert("UPDATE  ItemsAdicionados SET ItemAdd = '".$novapalavra."' WHERE id = '".$id."'");

        }else{
            echo "nova palava esta vazia";
        }
    }

    public function deletarItem($id) {
        unset($this->lista[$id]);

        parent::insert("DELETE FROM ItemsAdicionados WHERE id = '".$id."'");
    }

    public function listarItens(){

        $result = parent::insert("SELECT * FROM ItemsAdicionados");
        return $resposta = $result->fetch_all(MYSQLI_ASSOC);
    }              

    public function CriarUsuario($emailCriar, $senhaCriar){
        $dadosDaConta = "INSERT INTO `Usuario`(`email`, `senha`) VALUES ('$emailCriar','$senhaCriar')";
        $result = parent::insert($dadosDaConta);
    }


}
?>