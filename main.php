<?php
include('url_response.php');

$urlpatterns = array(
  '/' => '/index.php',
  '/admin/' => '../admin/index.php'
);
url_response($urlpatterns);