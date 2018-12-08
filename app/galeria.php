<!doctype html>
<html lang="en" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../require/css/bootstrap.css">

    <title>Galeria de Fotos</title>
  </head>
  <body>

  <!-- ________COMECO HEADER_________-->
    <?php require_once "../app/components/header.php"; ?>
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
    <h1 class="display-5 container">Galeria de Fotos </h1>
    <p class="lead container">Bem-vindx a nossa galeria, nosso conteúdo está disponível para você!</p>
  </div>
</div>
  <!-- FIM HEADER-->
  <!-- ________INICIO MAIN_________-->
    <!-- FIM MAIN-->

    <?php
    include_once("../require/functions/files.php");
    include_once("../connection/connection.php");

    $conn = connect();

    $query = "SELECT * from arquivo";
    $result = mysqli_query($conn, $query);

    while($fetch = mysqli_fetch_row($result)){
        
        $nomeImg = $fetch[3];
        ?>
        <main id="page-galeria" class="container pt-4" style="">

         <div class="d-flex bloco">
              <div class="col-12 col-sm-12 col-md-8" style="">
                 <img  style=";" class=" img-galeria col-12 col-sm-6 col-md-8 " style="margin: 0 auto;" src="../require/uploads/ <?= $nomeImg ?>">
              </div>
         </div>

        </main>
        <style type="text/css">
          .img-galeria{
            height: auto;
          }

          .bloco{
             justify-content: center;

          }

        </style>
        <?php
        
    }
  #header("Location: ../app/galeria.php")

?>
 



    <!-- ________SECAO FOOTER_________-->
    <div class="pt-4">  
       <?php require_once "../app/components/footer.php"; ?>
    </div>

 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
