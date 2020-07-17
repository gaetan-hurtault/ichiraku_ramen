<?php

if (isset($_GET['p'])) {
	$p = $_GET['p'];
}
else
{
	$p = 'home';
}

ob_start();

switch ($p) {
	case 'home':
		require '../pages/home.php';
		break;
	case 'ramen':
		require '../pages/ramen.php';
		break;
	case 'the':
		require '../pages/the.php';
		break;
	case 'menu':
		require '../pages/menu.php';
		break;
	case 'contact':
		require '../pages/administrative/contact.php';
		break;
	case 'mention':
		require '../pages/administrative/mentionlegale.php';
		break;
}

$content = ob_get_clean();

require '../pages/templates/default.php';