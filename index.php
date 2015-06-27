<?php
if(!empty($_GET['q'])){
	$q = $_GET['q'];
}
else {
	$q = 'home';
}
$root = $_SERVER['DOCUMENT_ROOT'];
include_once($root.'/dist/inc/head.php');
include_once($root.'/dist/inc/nav.php');

if (!empty($q) && ($q != 'home')) {
	if (file_exists($root.'/content/'.$q.'.html')) {
		include_once($root.'/content/'.$q.'.html');
	}
	else {
		include_once($root.'/content/404.html');
	}
}
else {
	include_once($root.'/content/home.html');
}

include_once($root.'/dist/inc/footer.php');
include_once($root.'/dist/inc/scripts.php');
?>
