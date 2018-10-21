<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Return Values from functions </title>
</head>
<body>

<?php

	function add($n1, $n2)
	{
		$add = $n1 + $n2;

		return $add;
	}
	

	$result = add(7,3);	

	echo $result;

	echo "<br>";

	$result = add(5, $result);

	echo $result;

	echo "<br>";
	
	for ($i=0; $i <= $result ; $i++) { 
		# code...
		echo $i;
		echo "<br>";
		
	}
	echo "<br>";
	echo "<br>";

	for ($i=$result; $i > 0 ; $i--) { 
		# code...
		echo $i;
		echo "<br>";
		
	}
	

?>


</body>
</html>