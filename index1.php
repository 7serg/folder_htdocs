<?php  
// preg_match_all('/\/(\w+)/', $_SERVER['REQUEST_URI'], $parts);
//$parts = $parts[1];

require '/base/init.php';
//const LGC_DIR = 'logic/';
//const TPL_DIR = 'tpl/';

$additional_templates = [];

switch (TRUE) {
	case preg_match('/^\/(|home)$/', $_SERVER['REQUEST_URI']):
		require LGC_DIR . 'home.php';
		break;
	case preg_match('/^\/user$/', $_SERVER['REQUEST_URI']):
		require LGC_DIR . 'user/user.php';
		break;
	case preg_match('/^\/blog$/', $_SERVER['REQUEST_URI']):
		require LGC_DIR . 'blog/blog.php';
		break;
		case preg_match('/^\/blog\/new$/', $_SERVER['REQUEST_URI'], $post_data):
		require LGC_DIR . 'blog/new.php';
		break;
		case preg_match('/^\/blog\/(\w+)$/', $_SERVER['REQUEST_URI'], $post_data):
		require LGC_DIR . 'blog/blog_item.php';
		break;
	default:
		require LGC_DIR .'404.php';
		break;
}

include TPL_DIR . 'header.html';



foreach ($additional_templates as $template) {
	require $template;
}

include TPL_DIR . 'footer.html';
?>