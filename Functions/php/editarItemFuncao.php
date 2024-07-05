<?php
require_once("../funcoes.php");
if(isset($_POST['itemEdd'])){
    
    $funcoes = new funcoes();
    $novapalavra = $_POST['itemEdd'];
    
    $funcoes->EditarItens($_POST['id'],$novapalavra);
    
    header('Location: /Projetos/SiteAddItems2/Paginas/listarItems.php');
    exit;
}

?>