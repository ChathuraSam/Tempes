<?php
	if (isset($_GET['city']) && $_GET['city'] !=="") {
		$city = $_GET['city'];

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
	}
	?>