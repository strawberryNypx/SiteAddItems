<?php
session_start();
// error_reporting(E_ALL);
// ini_set("display_errors",1);

if(isset($_POST["email"]) && isset($_POST["senha"])){
    
    include('../Conexao/Conexao.php');

    $conexao = new Conexao();

    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $sql = "SELECT * FROM Usuario WHERE email = '$email' AND senha = '$senha'";

    $res = $conexao->select($sql);

    $row = $res->fetch_object();

    $qnt = $res->num_rows;
            

    if($qnt > 0){
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['logado'] = True;
            header('Location: /Projetos/SiteAddItems2/Paginas/adicionarItem.php');
            exit;
    }else{
        header('Location: /Projetos/SiteAddItems2/index.php');
        echo"error";
        exit;
}
}else{
    header('Location: /Projetos/SiteAddItems2/index.php');
    exit;
}
?>