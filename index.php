<?php  
// preg_match_all('/\/(\w+)/', $_SERVER['REQUEST_URI'], $parts);
//$parts = $parts[1];

include 'tpl/header.html';

switch (TRUE) {
	case preg_match('/^\/(|home)$/', $_SERVER['REQUEST_URI']):
		require 'logic/home.php';
		break;
	case preg_match('/^\/user$/', $_SERVER['REQUEST_URI']):
		require 'logic/user/user.php';
		break;
	default:
		require 'logic/404.php';
		break;
}


include 'tpl/footer.html';
?>