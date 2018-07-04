<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.container{
			background-color: grey;
			text-align: center;
			padding:40px 0;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>
			<?= $greeting ?> 
		</h1>
	</div>
	<div class="content">
		<ul>
			<?php foreach($names as $name): ?>
				<li><?= $name ?></li>
			<?php endforeach ?>
		</ul>
	</div>

</body>
</html>