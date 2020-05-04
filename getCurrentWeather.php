<?php
	if(isset($_GET["lon"]))
	{
		$lat=$_GET["lat"];
		$lon=$_GET["lon"];
		$url = "http://api.openweathermap.org/data/2.5/weather?lat=$lat&lon=$lon&units=imperial&appid=894895e7ad11df3d369014afcf073287"; 
	}else{
		$z = $_GET["zip"];	
		$url = "http://api.openweathermap.org/data/2.5/weather?zip=$z,us&units=imperial&appid=894895e7ad11df3d369014afcf073287"; 
	}

	sleep (2);

	$fp = fopen ( $url , "r" ); 

	$contents = "";
	while ( $more = fread ( $fp, 1000  ) ) {
	   $contents .=  $more ;
	}  

	echo $contents;
?>