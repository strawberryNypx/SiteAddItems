<?php

session_start();
session_unset();
session_destroy();

header("Location: /Projetos/SiteAddItems2/index.php");

?>