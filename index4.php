<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Запись в файл</title>
</head>
<body>
	<?php
		$file_name = __DIR__ . '/log.txt';
		$line = $_POST['line'];
		file_put_contents(
			$file_name,
			$line . "\n",
			FILE_APPEND
		);
		echo 'Строка добавлена!';
	?>
	
	<a href="index3.php">Back</a>
</body>
</html>