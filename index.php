<?php  
// preg_match_all('/\/(\w+)/', $_SERVER['REQUEST_URI'], $parts);
//$parts = $parts[1];

require 'base/init.php';
//const LGC_DIR = 'logic/';
//const TPL_DIR = 'tpl/';

include TPL_DIR . 'header.html';

switch (TRUE) {
	case preg_match('/^\/(|home)$/', $_SERVER['REQUEST_URI']):
		require LGC_DIR . 'home.php';
		break;
	case preg_match('/^\/user$/', $_SERVER['REQUEST_URI']):
		require LGC_DIR . 'user/user.php';
		break;
	default:
		require LGC_DIR .'404.php';
		break;
}


include TPL_DIR . 'footer.html';
?>