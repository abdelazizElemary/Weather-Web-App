<?php
if (!empty($_GET['cityname'])){

	$hour_url = 'http://api.weatherbit.io/v2.0/forecast/3hourly?city='.$_GET['cityname'].'&key=75d700a5197a4aabb316e431ebb70835';
	$hour_json = file_get_contents($hour_url);
	$hour_array = json_decode($hour_json , true);
}
?>
<!DOCTYPE html>
<html lang="en">.
<head>
	<meta charset="utf-8" />
	<title>file3</title>
	<link rel="stylesheet" type="text/css" href="zizo.css" />
</head>
<body>
	<div class="weather">
		<h1>Weather</h1>
		<h2>Forecast 3hourly</h2>
	</div>
	<div class="con">
	<form action="">
		<input type="text" name="cityname" id="input" placeholder="Cityname" />
		<br>
		<button type="submit" id="submit">submit</button>
		<br>
	<br/>
	<?php
		if(!empty($hour_array)){

		echo $hour_array['data'][0]['wind_spd'];
}
	?>
</form>
</div>
</body>
</html>