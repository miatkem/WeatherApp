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
//5. Retrieve url response
$fp = fopen ( $url , "r" ); 

//6.  Convert response to string
$contents = "";
while ( $more = fread ( $fp, 1000  ) ) {
   $contents .=  $more ;
}  

//8.  Transmit string to ajax  -- NO NO NO extra characters like <br> or other text!!!
echo $contents ; 

?>