<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Passing Parameter in function</title>
</head>
<body>

<?php 

//type-1
	function greeting($message)
	{
		echo $message;

	}


	echo "passing a string as a Parameter.<br/>";

	greeting("Hello Friends");

?>

<p> --------------------  </p>


<?php 

//type-2
	function add($n1, $n2)
	{
		$add = $n1 + $n2;

		//echo $add;
		echo "This is 1st number ".$n1;
		echo "<br/>";

		echo "This is 2nd number ".$n2;
		echo "<br/>";

		echo "This is there addition ".$add;
	}

	echo "passing number as parameter<br/>";
	
	add(12,22);
?>

</body>
</html>