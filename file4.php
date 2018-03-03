<?php
if (!empty($_GET['cityname'])){

	$daily_url = 'http://api.weatherbit.io/v2.0/forecast/daily?city='.$_GET['cityname'].'&key=75d700a5197a4aabb316e431ebb70835';
	$daily_json = file_get_contents($daily_url);
	$daily_array = json_decode($daily_json , true);
}
?>
<!DOCTYPE html>
<html lang="en">.
<head>
	<meta charset="utf-8" />
	<title>file4</title>
	<link rel="stylesheet" type="text/css" href="zizo.css">
</head>
<body>
	<div class="weather">
		<h1>Weather</h1>
		<h2>Forecast Daily</h2>
	</div>
	<div class="con">
	<form action="">
		<input type="text" name="cityname" id="input" placeholder="City Name" />
		<br>
		<button type="submit" id="submit">submit</button>
		<br>
	<br/>
	<?php
		if(!empty($daily_array)){

		echo $daily_array['data'][0]['wind_spd'];
}
	?>
	</form>
</div>
</body>
</html>
