<?php
require('../funcoes.php');;

$funcao = new funcoes();
$item = $_POST['item'];

$funcao->addItens($item);

header('Location: ../../Paginas/adicionarItem.php');
exit;
?>