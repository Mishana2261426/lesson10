<?php 
	session_start();
	// var_dump($_SESSION);die();
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$_SESSION['session_key'] = $_POST['session_key'];
	}
	$value = isset($_SESSION['session_key']) ? $_SESSION['session_key'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Запись в файл</title>
</head>
<body>
	<form action="" method="POST">
		<div>
			<input type="text" name="session_key" value="<?php echo $value ?>">
		</div>
		<div>
			<input type="submit" value="Сохранить">
		</div>
	</form>
</body>
</html>