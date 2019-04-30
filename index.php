<?php
require_once "get-data.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="icon" href="assets/weather-icon.png" type="image/png" sizes="16x16">
	<title>Tempes-Weather Search</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>

<body>

	<div class="cont">
		<div class="main">
			<img src="assets/fogg-coffee-break.png" width="30%">
			<h1>Weather Forecast..</h1>
			<form action="index.php" method="GET">
				<input type="text" name="city" class="form-input" placeholder="City">
				<input type="submit" class="btn" value="Find">
			</form>
			<?php
			if (isset($data)) {
				// print_r($data);

				echo "
				
				<div class='card'>
				<span class='city'>$data->name</span>
				<ul class='menu'>
					<li></li>
					<li></li>
					<li></li>
				</ul>
				<br>
				<div class='sun'>
				<img src='http://openweathermap.org/img/w/".$data->weather[0]->icon.".png' class='weather-icon'>
				</div>
				<span class='temp'>".floor($data->main->temp_max)."°C</span>
				<span>
					<ul class='variations'>
						<li>".ucwords($data->weather[0]->description)."</li>
						<li><span class='speed'>".$data->wind->speed."km/h</span></span></li>
					</ul>
				</span>
				<div class='forecast clear'>
					<div class='day tue'>TUE
						<br> <span class='cloudy'></span> <br> <span class='highTemp'>79&#176;</span> <br> <span class='lowTemp'>57&#176;</span>
					</div>
					<div class='day wed'>WED
						<br> <span class='sunny'></span> <br> <span class='highTemp'>79&#176;</span> <br> <span class='lowTemp'>57&#176;</span>
					</div>
				</div>
			</div>
				";
			}
			?>
		</div>
	</div>

	<div class="back">
		<div class="div-center">

			<div class="weather-forecast">
				 <?php echo $data->main->temp_max; ?>°C<span class="min-temperature"><?php echo $data->main->temp_min; ?>°C</span>
			</div>
			<div class="time">
				<div>Humidity: <?php echo $data->main->humidity; ?> %</div>
				<div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
			</div>
			<div class="location">
				<div>Country: <?php echo $data->sys->country; ?></div>
			</div>
		</div>
	</div>

	
</body>

</html>