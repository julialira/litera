<?php

function saveFile($name, $file, $url = NULL) {
  date_default_timezone_set("Brazil/East");

  if(isset($file) && !empty($url)) {
    $ext = strtolower(substr($_FILES[$file]['name'], -4));
    $new_name = $name . $ext;
    $dir = $url;

    move_uploaded_file($_FILES['file']['tmp_name'], $dir.$new_name);

    return $new_name;
  } else {
    return "erro ao salvar arquivo";
  }
}

function changeFiles($newFile, $oldFile, $url) {
  $new_name = saveFile($newFile, $url);

  unlink($url.$oldFile);

  return $new_name;
}

function saveImage($nome, $image, $url) {
  $img = $_FILES[$image];
  
  if (!empty($img["name"])) {

    // Largura máxima em pixels
    $largura = 2000;
    // Altura máxima em pixels
    $altura = 2000;
    // Tamanho máximo do arquivo em bytes
    $tamanho = 2000000;
 
    $error = array();
 
      // Verifica se o arquivo é uma imagem
      if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $img["type"])){
         $error[1] = "Isso não é uma imagem.";
      } 

    // Pega as dimensões da imagem
    $dimensoes = getimagesize($img["tmp_name"]);
  
    // Verifica se a largura da imagem é maior que a largura permitida
    if($dimensoes[0] > $largura) {
      $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
    }
 
    // Verifica se a altura da imagem é maior que a altura permitida
    if($dimensoes[1] > $altura) {
      $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
    }
    
    // Verifica se o tamanho da imagem é maior que o tamanho permitido
    if($img["size"] > $tamanho) {
        $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
    }
 
    // Se não houver nenhum erro
    if (count($error) == 0) {
    
      // Pega extensão da imagem
      preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $img["name"], $ext);
 
          // Gera um nome único para a imagem
          $nome_imagem = $nome . "." . $ext[1];
 
          // Caminho de onde ficará a imagem
          $caminho_imagem = $url.$nome_imagem;
 
      // Faz o upload da imagem para seu respectivo caminho
      move_uploaded_file($img["tmp_name"], $caminho_imagem);
    
      return $nome_imagem;
    } else {
      return false;
    }
  } else {
    return false;
  } 
}
