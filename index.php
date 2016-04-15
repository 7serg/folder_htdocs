<?php 

require 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('tpl1/');

$twig = new Twig_Environment($loader);

echo $twig->render('home.twig'); 
 ?>