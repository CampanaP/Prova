<?php
	if(!isset($_COOKIE["contatore"]))
	{
		setcookie("contatore",'1',time()+(86400*7),"/");
		print("Benvenuto, questa è la prima volta che entri in questo sito.");
	}
	else
	{
		$conta=$_COOKIE["contatore"]+1;
		setcookie("contatore",$conta,time()+(86400*7),"/");
		print("Hai visitato questo sito ".$conta."volte.");
	}
?>
<html>
	<head>
	<title>Compito </title>
	</head>
	<body>
	</body>
</html>
