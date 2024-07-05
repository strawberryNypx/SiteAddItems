<?php
    include("../Functions/Includes/header.php");
?>

<body>
  <link rel="stylesheet" href="../Style/addItem.css">
  <div class="container">
    <div class="content">
      <main class="form-signin w-100 m-auto">
        <form class="EddItem" method="post" action="../Functions/php/editarItemFuncao.php">
          <h1 class="h3 mb-3 fw-normal">Editar Item</h1>

          <div class="form-floating">
            <input name="itemEdd" type="text" class="form-control" id="floatingInput" placeholder="">
            <label for="floatingInput">Nova palavra...</label>
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
          </div>
          <br>
          <button class="btn btn-primary w-100 py-2" type="submit">Editar</button>
        </form>
      </main>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>