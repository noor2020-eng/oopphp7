<?php include 'newClass.php'?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title></title>

</head>

<body>

	<?php

	$object = new NewClass();
	unset($object);
	echo $object->getProperty();
	
	?>
</body>

</html>
