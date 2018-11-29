<?php 
session_start();

include_once '../../connection/connection.php';
include_once '../../connection/close_connection.php';
include_once '../../require/functions/select.php';

if(isset($_POST['user']) 
  && isset($_POST['password'])
  && $_POST['user'] != ""
  && $_POST['password'] != "") {

  $user = $_POST['user']; 
  $password = $_POST['password'];
  print_r($_POST);

  if(empty($user) || empty($password)) {
    header("Location:../?i");
  } elseif(!empty($user) && !empty($password)) {
    $return = select("admin", "*", "email='".$user."' AND password='".md5($password)."'");

    if(!$return) {
      header("Location:../?i");
    } elseif($return) {
      $_SESSION['user'] = $user;
      header("Location:../admin.php");
    }
  }
} else {
  header("Location:../?i");
}
