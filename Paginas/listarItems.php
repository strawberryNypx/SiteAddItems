<?php
    require("../Functions/Includes/header.php");    
    require_once('../Functions/funcoes.php');

    $funcoes = new funcoes();        
    $lista = $funcoes->listarItens();
?>
<body>  
<div class="container" >
    <div class="row justify-content-md-center" >
        <div class="col-6" >
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Palavra</th>
                    <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    if($lista) {
                        foreach($lista AS $i) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $i['Id']; ?></th>
                            <td><a href='/Projetos/SiteAddItems2/Paginas/areaDeEdicao.php?id=<?php echo $i['Id'] ?>' ><i class='fa-solid fa-pen-to-square'></i>  </a></td>
                            <td><h4 class='h4listar'><?php $i['Id']; ?> Item: <?php echo $i['Item']; ?></h4></td>
                            <td><a href='../Functions/php/deletarFuncao.php?id=<?php echo $i['Id']; ?>' ><i class='fa-solid fa-trash-can' style='color: #c01c28;'></i></a></td>
                        </tr>
                    <?php
                        }
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
       

    </div>
</div>
</body>
</html>