<?php
require_once('../funcoes.php');

$funcoes = new funcoes();
$funcoes->deletarItem($_GET['id']);

header('Location: /Projetos/SiteAddItems2/Paginas/listarItems.php');
?>

