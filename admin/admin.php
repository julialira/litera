<?php 
session_start();

if(!isset($_SESSION['user'])) {
  header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel Administrativo</title>
  <link rel="icon" href="../favicon.ico">
  <link rel="stylesheet" href="../require/css/bootstrap.min.css">
  <link rel="stylesheet" href="../require/css/style.css">
</head>
<body>
  <?php require_once "components/header.php"; ?>

  <div class="jumbotron jumbotron-admin">
    <h1 class="display-4 title-first-pg-admin">Painel administrativo.</h1>
    <p class="lead">Bem-vindo!</p>
  </div>

  <div class="container content-elements-action">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-10 col-md-10 mb-10 ">
        <!-- <a href="slides.php" class="element-action">Slides</a> -->
        <form action="../app/galeria.php" method="post" enctype="multipart/form-data">
      <fieldset>
 
      <!-- Título do formulário -->
      <legend class="text-center">Inserir Imagem na Galeria de Fotos</legend>
 
      <!-- Campo: anexo --> 
      <div class="form-group">
        <div class="form-group">
            <label for="text">Nome Arquivo: </label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="arquive" placeholder="Nome do Arquivo">
          </div>
          <div class="form-group">
            <label for="evento">Evento/Entrevista</label>
            <input type="text" class="form-control" name="event" id="event" placeholder="Nome do Evento/Entrevista">
          </div>
          <div class="">
            <label for="evento">Arquivo:</label>
            <input type="file" class="" name="file" id="file" >
          </div>
          
      </div>    
      
      <!-- Botão Enviar -->
    
      <div class="form-group">
        <label class="col-lg-10 col-md-10 mb-10 control-label" for="submit"></label>
        <div class="">
          <!--  action="../require/apps/galeria.php"--><button type="submit" class="btn btn-inverse"  method="POST" style="width: 100%;" action="../require/functions/files.php">Enviar</button>
        </div>
      </div>
 
 
      </fieldset>
    </form>
      </div>
    </div>
  </div>
  <?php require_once "../app/components/footer.php"; ?>

  <script src="../require/js/jquery-3.3.1.min.js"></script>
  <script src="../require/js/bootstrap.min.js"></script>
</body>
</html>
