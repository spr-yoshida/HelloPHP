<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Index</title>
</head>

<body>
	<?php
		require "User.php";
		
		echo 'test<br>';
		
		$object = new User;
		
		$object->name = "Joe";
		$object->password = "abc@123%&";
		print_r($object);
		
		echo '<br>';
		
		$object->save_user();
	?>

</body>
</html>
