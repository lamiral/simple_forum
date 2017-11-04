<?php

require_once"php/template.php";
require_once"php/route.php";

$url = $_GET['route'];

$template = new Template();

$template->header();

Route::start($url);

if(isset($_SESSION['id']))
{
	//echo 'Вы вошли под своим логином : '.$_SESSION['login'];
}

$template->footer();

?>