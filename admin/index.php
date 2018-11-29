<?php
session_start();
if(isset($_SESSION['user'])) {
  header("Location: admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login administrativo</title>
  <link rel="icon" href="../favicon.ico">
  <link rel="stylesheet" href="../require/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../require/css/style.css">
</head>
<body>
  <div class="content-page">
    <div class="container">
      <div class="row">
        <form class="justify-content-center form-login" action="actions/login.php" method="POST">
          <div class="logo-admin">
            <img class="img-fluid" src="../require/img/uni.png" alt="Imagem não encontrada">
          </div>
          <div class="form-group">
            <label for="text">Usuário</label>
            <input type="text" class="form-control" name="user" id="user" aria-describedby="user" placeholder="Email ou Usuário">
          </div>
          <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
          </div>
          <button type="submit" class="btn">Login</button>
          <a class="link-for-site" href="../app/index.php">Ir para o site</a>
        </form>
      </div>
    </div>
  </div>
  

</body>
</html>
