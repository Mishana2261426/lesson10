<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Запись в файл</title>
</head>
<body>
	<form action="index4.php" method="POST">
		<div>
			<label for="">Что записать ?</label>
			<input type="text" name="line" required>
		</div>
		<div>
			<input type="submit" value="Записать">
		</div>
	</form>
	<ul>
		<?php  
			$file_name = __DIR__ . '/log.txt';
			$lines = explode(
				"\n",
				file_get_contents($file_name)
			);

			foreach ($lines as $line) {
				?>
					<li><?=$line ?></li>
				<?php
			}
		?>
	</ul>
</body>
</html>