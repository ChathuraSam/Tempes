<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
	<link rel="icon" href="assets/weather-icon.png" type="image/png" sizes="16x16">
	<title>Tempes-Weather Search</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
	<div class="cont">
		<div class="main">
			<img src="assets/fogg-coffee-break.png" width="30%">
			<h1>Weather Forecast</h1>
			<form action="index.php" method="GET">
				<input type="text" name="city" class="form-input" placeholder="City">
				<input type="submit" class="btn" value="Find">
			</form>
		</div>
	</div>
	<div>Humidity: <?php echo $data->main->humidity; ?> %</div>
	<div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
	<?php
	if (isset($_GET['city'])) {
		$city = $_GET['city'];
		echo "***********";

		$apiKey = "ff1ab9a051b88deba1cc6fa45581d638";
		$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=" . $city . "&lang=en&units=metric&APPID=" . $apiKey;

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_VERBOSE, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$response = curl_exec($ch);

		curl_close($ch);
		$data = json_decode($response);
		$currentTime = time();
	} else {
		echo "Nothin";
	}
	?>
</body>

</html>