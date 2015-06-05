<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Index</title>
</head>

<body>
	<?php
		require "User.php";
		
		print 'test<br>';
		
		$object = new User;
		
		$object->name = "Joe";
		$object->password = "abc@123%&";
		print_r($object);
		
		print '<br>';
		
		$object->save_user();
	?>

</body>
</html>
