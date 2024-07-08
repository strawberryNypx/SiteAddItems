<?php   

error_reporting(E_ALL);
ini_set("display_errors",1);

require('../funcoes.php');


if(!empty($_POST)) { 
    
    $emailCriar = $_POST['emailCriar'];
    $senhaCriar = $_POST['senhaCriar'];
        
    $funcoes = new funcoes();
    $funcoes->CriarUsuario($emailCriar,$senhaCriar);
    header('Location: ../../index.php');
    exit;

}else{
    echo"error ";
    exit;
}
?>