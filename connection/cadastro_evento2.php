
<?php
    include_once("../require/functions/files.php");
    include_once("connection.php");
    $name = $_POST['name'];
    $event = $_POST['event'];
    $file = $_FILES['file'];

    $conn = connect();

    define('DEST_DIR', 'C:\xampp\htdocs\litera\require\uploads\ ');

    $salvarArquivo = saveFile($name, "file", DEST_DIR);
  
    $query = "INSERT INTO arquivo(name, event, file, date) VALUES ('$name','$event', '$salvarArquivo', '2018-11-30')";

    $resultado_usuario = mysqli_query($conn, $query);

    header("Location: ../app/galeria.php")
    
  
?>
