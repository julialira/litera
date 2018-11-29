<?php
if(!defined('BASE')){
  define('BASE','http://localhost/default/');
}

if(!defined('PROJECT_DIR'))
  define('PROJECT_DIR', 'default');

if(!defined('APPLICATION_DIR'))
  define('APPLICATION_DIR', 'app');

if(!defined('REQUEST_URI'))
  define('REQUEST_URI',str_replace('/'.PROJECT_DIR,'',$_SERVER['REQUEST_URI']));

function url_response($urlpatterns) {
  foreach ($urlpatterns as $pcre => $app) {
    if(preg_match("@^{$pcre}$@", REQUEST_URI, $_GET)) {
      include(APPLICATION_DIR.'/'.$app);
      exit();
    } else {
      $erro = true;
    }
  }
  if(isset($erro) && $erro == true){
    include("app/404.php");
  }
  return;
}