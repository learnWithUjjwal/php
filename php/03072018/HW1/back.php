<!DOCTYPE html>
<html>
	<head>
		<title>Registration result</title>
		<style type="text/css">
			.container{
				width:65%;
				margin:auto;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<center>
				<table style="margin-top:150px; border-collapse: collapse;" border="3">
			
					<?php
					array_walk($_POST, function($v, $k){
						echo "<tr><th>$k</th><td>$v</td></tr>";		
					})
					?>
				</table>
			</center>
		</div>
</body>
</html>