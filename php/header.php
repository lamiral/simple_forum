<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Cache-Control" content="no-cache">
	<title>Форум</title>
	<link rel="stylesheet" type="text/css" href="http://magazin/css/style.css">
</head>
<body>

	<div id="header">
		<h1>ШАПКА</h1>
		<?php
			if(isset($_SESSION['id']))
			{
				?>

				<a href="http://magazin/profile/view/<?php echo $_SESSION['id'];?>">Просмотреть профиль</a>

				<?php
			}
			else
			{
				?>
					<a href="http://magazin/enter">Войти</a><br><br>
				<?php
			}
		?>

	</div>

	<div id="content">