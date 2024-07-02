<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="../Style/index.css">
  <title>Create account</title>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
  <div class="container">
    <div class="content">
      <main class="form-signin w-100 m-auto">
        <form class="Login" method="post">
          <h1 class="h3 mb-3 fw-normal">Criar Conta</h1>

          <div class="form-floating">
            <input name="emailCriar" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
          </div>
          <br>
          <div class="form-floating">
            <input name="senhaCriar"type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Senha</label>
          </div>
          <br>
          <button class="btn btn-primary w-100 py-2" type="submit">Criar</button>
          <p class="mt-5 mb-3 text-body-secondary"><a href="../index.php">Entrar</a></p>
        </form>
      </main>
    </div>
  </div>

  <?php
     if (!empty($_POST)) { 
      var_dump($conexao->$conn );
        require('Funcoes.php');

        $emailCriar = $_POST['emailCriar'];
        $senhaCriar = $_POST['senhaCriar'];
    
        $funcoes = new Funcoes();
        $funcoes->CriarUsuario($emailCriar,$senhaCriar);
    
        header("Location: index.php");
        
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>