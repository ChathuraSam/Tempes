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
				if ($data->cod == '404') {
					echo "<span class='city'>City Not Found</span>";
				} else {
					// print_r($data);
					// print("<pre>".print_r($data,true)."</pre>");
					echo "
				
			<table >
			<tr>
				<td colspan=' 4 '><span class='city'>Weather in " . $data->name." ".date('H:i:s', strtotime('+210 minutes', date($data->dt))). "</span></td>
			</tr>
			<tr>
				<td rowspan=' 2 '>
					<img src='http://openweathermap.org/img/w/" . $data->weather[0]->icon . ".png' class='weather-icon'></br>
					".$data->weather[0]->description."
				</td>
				<td rowspan=' 2 ' colspan=' 2 '><span class='temp'>" . floor($data->main->temp) . "°C</span></td>
				<td><span class='highTemp'>" . $data->main->temp_max . "°C</span></td>
			</tr>
			<tr>
				<td><span class='highTemp'>" . $data->main->temp_min . "°C</span></td>
			</tr>
			<tr>
				<td>Wind</td>
				<td>" . $data->wind->speed . " meter/sec</td>
				<td>Rain</td>
				<td>-No data-</td>
			</tr>
			<tr>
				<td>Cloudness</td>
				<td>".$data->clouds->all."</td>
				<td>Sunrise</td>
				<td>".date('h:i:s A', strtotime('+210 minutes', $data->sys->sunrise))."</td>
				
			</tr>
			<tr>
				<td>Pressure</td>
				<td>".$data->main->pressure ." hPa</td>
				<td>Sunset</td>
				<td>".date('h:i:s A', strtotime('+210 minutes', $data->sys->sunset))."</td>
			</tr>
			<tr>
				<td>Humidity</td>
				<td>".$data->main->humidity." %</td>
				<td>Country</td>
				<td>".$data->sys->country."</td>
				
			</tr>
		</table>
			";
				}
			}
			?>
		</div>

	</div>
</body>

</html>