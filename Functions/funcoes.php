<?php
require_once('Conexao/Conexao.php');

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

    public function ValidarLogin($email, $senha){
        $dadosDaConta = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

        $result = parent::select($dadosDaConta); 

        $row = $result->fetch_object();

        if($result->num_rows > 0){
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            header('Location: ../Paginas/adicionarItem.php');

        }else{
            header('../index.php');
        }
    }
}
?>