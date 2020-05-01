<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/weather_style.css">
	</head>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		
	<script type = "text/javascript"> 
	   function setZipcode(){ 
		
		 var zip = $("#zip").val();
		   
			 $.ajax({
				 type: 		"GET",
				 url: 		"weather-0.php",
				 data: 		"zip="+zip,
				 
				 beforeSend: function(){ 		
								  $("#B").html("<b>waiting....</b>");                },
			 
				 error: 		function(xhr, status, error) {  
								  alert( "Error Mesaage:  \r\nNumeric code is: "  + xhr.status + " \r\nError is " + error);   },
				 
				 success: 	function(result){
					  
					r = JSON.parse(result);
					
					res =  "<br>City: "		   + r.name +  " "			 +	 /* name property 			*/
						   "<br>Temperature: " + r.main.temp + "&deg;C " +	 /* main's temp 				*/
						   "<br>Weather: " 	   + r.weather[0].main + " "		  		/* weather's main property 	*/
						   ;
					
					$("#B").html(res); 
					
				}	//         - }  ends definition of function(result){ ... }
			});	    //         - }) ends  $.ajax({ ...  })  
	  });			//         - }) ends event handler for button:  click(function(){ })
	});				//         - }) ends ready event handler:  		ready( function(){ ... })
		 
	</script>
	
	
	
	
	<body>
			<!-- Tab links -->
		<div class="header">
			<img src="img/weatherlogo.png" width='150px' height='150px'>
			<div class="searchbar">
				<form onsubmit="setZipcode()">
					<input type="text" id="zip" placeholder="Search Zip Code" name="search">
					<button type="submit"><img src="https://img.icons8.com/search" width='20px' height='20px'></button>
				</form>
				<p>-OR-</p>
				<form onsubmit="setLocation()">
					<button type="submit" name="search" value="location">Use My Location</button>
				</form>
			</div>
		</div>
		
		<div class="tab">
			<button class="tablinks" onclick="openTab('Today')" id="firsttab">Today</button>
			<button class="tablinks" onclick="openTab('Tomorrow')">Tomorrow</button>
			<button class="tablinks" onclick="openTab('10-Day')">10-Day</button>
		</div>
	

		<!-- Tab content -->
		<div id="Today" class="tabcontent">
			<h2>Today's Current Weather</h2>
			<div class="weatherBox">
				<div id="town">
					<b>Hawthorne, NJ</b><br>
					<i>Coordinates: -118.41, 34.09</i>
				</div>
				<div id="weather">
					<div class="weatherTextContainer">
						<div class="weatherText" id="temp"><span>55 &deg;F</span></div>
						<div class="weatherText" id="status"><span>CLOUDY</span></div>
						<div class="weatherText" id="highlow"><span>High: 52 &deg;F</span></div>
						<div class="weatherText" id="highlow"><span>Low: 40 &deg;F</span></div>
						<div class="weatherText" id="humidity"><span>Humidity: 20%</span></div>
						<div class="weatherText" id="UV"><span>UV Index 0 of 10</span></div>
						<div class="weatherText" id= "wind"><span>Wind Speed: 2.71m/s NE</span></div>
						<hr>
						<div class="weatherText" id= "sunrise"><span>Sunrise: 7:37am</span></div>
						<div class="weatherText" id= "sunset"><span>Sunset:  5:37pm</span></div>
					</div>
					<div  id = "weatherPhoto">
						<img src="http://openweathermap.org/img/wn/10d@2x.png">
					</div>
				</div>
			</div>
			
			<div class="hourlyForecast">
				<table>
					<th>Date</th><th>Time</th><th>Temp.</th><th>Outlook</th>
						<tr><td>4/29/2020</td><td>7:00pm</td><td>40&deg;F</td><td>Rainy</td></tr>
						<tr><td>4/29/2020</td><td>8:00pm</td><td>40&deg;F</td><td>Rainy</td></tr>
						<tr><td>4/29/2020</td><td>9:00pm</td><td>40&deg;F</td><td>Rainy</td></tr>
						<tr><td>4/29/2020</td><td>10:00pm</td><td>40&deg;F</td><td>Rainy</td></tr>
						<tr><td>4/29/2020</td><td>11:00pm</td><td>40&deg;F</td><td>Rainy</td></tr>
						<tr><td>4/29/2020</td><td>12:00pm</td><td>40&deg;F</td><td>Rainy</td></tr>
						<tr><td>4/29/2020</td><td>7:00pm</td><td>40&deg;F</td><td>Rainy</td></tr>
						<tr><td>4/29/2020</td><td>7:00pm</td><td>40&deg;F</td><td>Rainy</td></tr>
						<tr><td>4/29/2020</td><td>7:00pm</td><td>40&deg;F</td><td>Rainy</td></tr>
						<tr><td>4/29/2020</td><td>7:00pm</td><td>40&deg;F</td><td>Rainy</td></tr>
				</table>
			</div>
		</div>

		<div id="Tomorrow" class="tabcontent">
			<h2>Tomorrow's Weather Outlook</h2>
			<div class="weatherBox">
				<div id="town">
					<b>Hawthorne, NJ</b><br>
					<i>Coordinates: -118.41, 34.09</i>
				</div>
				<div id="weather">
					<div class="weatherTextContainer">
						<div class="weatherText" id="temp"><span>55 &deg;F</span></div>
						<div class="weatherText" id="status"><span>CLOUDY</span></div>
						<div class="weatherText" id="highlow"><span>High: 52 &deg;F</span></div>
						<div class="weatherText" id="highlow"><span>Low: 40 &deg;F</span></div>
						<div class="weatherText" id="humidity"><span>Humidity: 20%</span></div>
						<div class="weatherText" id="UV"><span>UV Index 0 of 10</span></div>
						<div class="weatherText" id= "wind"><span>Wind Speed: 2.71m/s NE</span></div>
						<hr>
						<div class="weatherText" id= "sunrise"><span>Sunrise: 7:37am</span></div>
						<div class="weatherText" id= "sunset"><span>Sunset:  5:37pm</span></div>
					</div>
					<div  id = "weatherPhoto">
						<img src="http://openweathermap.org/img/wn/10d@2x.png">
					</div>
				</div>
			</div>
		
		</div>

		<div id="10-Day" class="tabcontent">
		  <h3>10-Day Forecast</h3>
		 <div class="hourlyForecast">
				<table>
					<th>Day</th><th>Outlook</th><th>High/Low</th><th>Wind</th><th>Humidity</th>
						<tr><td>THU<br>April 30<img src="http://openweathermap.org/img/wn/10d@2x.png"></td><td>Rainy</td><td>60&deg;F/40&deg;F</td><td>ESE 11 mph</td><td>77%</td></tr>
						<tr><td>THU<br>April 30<img src="http://openweathermap.org/img/wn/10d@2x.png"></td><td>Rainy</td><td>60&deg;F/40&deg;F</td><td>ESE 11 mph</td><td>77%</td></tr>
						<tr><td>THU<br>April 30<img src="http://openweathermap.org/img/wn/10d@2x.png"></td><td>Rainy</td><td>60&deg;F/40&deg;F</td><td>ESE 11 mph</td><td>77%</td></tr>
						<tr><td>THU<br>April 30<img src="http://openweathermap.org/img/wn/10d@2x.png"></td><td>Rainy</td><td>60&deg;F/40&deg;F</td><td>ESE 11 mph</td><td>77%</td></tr>
						<tr><td>THU<br>April 30<img src="http://openweathermap.org/img/wn/10d@2x.png"></td><td>Rainy</td><td>60&deg;F/40&deg;F</td><td>ESE 11 mph</td><td>77%</td></tr>
						<tr><td>THU<br>April 30<img src="http://openweathermap.org/img/wn/10d@2x.png"></td><td>Rainy</td><td>60&deg;F/40&deg;F</td><td>ESE 11 mph</td><td>77%</td></tr>
						<tr><td>THU<br>April 30<img src="http://openweathermap.org/img/wn/10d@2x.png"></td><td>Rainy</td><td>60&deg;F/40&deg;F</td><td>ESE 11 mph</td><td>77%</td></tr>
						<tr><td>THU<br>April 30<img src="http://openweathermap.org/img/wn/10d@2x.png"></td><td>Rainy</td><td>60&deg;F/40&deg;F</td><td>ESE 11 mph</td><td>77%</td></tr>
						<tr><td>THU<br>April 30<img src="http://openweathermap.org/img/wn/10d@2x.png"></td><td>Rainy</td><td>60&deg;F/40&deg;F</td><td>ESE 11 mph</td><td>77%</td></tr>
						<tr><td>THU<br>April 30<img src="http://openweathermap.org/img/wn/10d@2x.png"></td><td>Rainy</td><td>60&deg;F/40&deg;F</td><td>ESE 11 mph</td><td>77%</td></tr>
				</table>
			</div>
		</div>
		
		<script>
			function openTab(tabName)
			{
				var tabcontent = document.getElementsByClassName("tabcontent");
				for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				}
				document.getElementById(tabName).style.display="block";
			}
		</script>
	</body>
</html>