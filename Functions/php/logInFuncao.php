<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

require('../funcoes.php');

if(isset($_POST["email"]) && isset($_POST["senha"])){

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    $funcoes = new funcoes();
    $funcoes->ValidarLogin($email, $senha);

}else{
    echo"error conts ou senha incorretos";
}
?>