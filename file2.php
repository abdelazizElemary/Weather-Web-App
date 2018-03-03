<?php
if (!empty($_GET['cityname'])){

	$temp_url = 'http://api.weatherbit.io/v2.0/forecast/hourly?city='.$_GET['cityname'].'&key=75d700a5197a4aabb316e431ebb70835';
	$temp_json = file_get_contents($temp_url);
	$temp_array = json_decode($temp_json , true);
}
?>
<!DOCTYPE html>
<html lang="en">.
<head>
	<meta charset="utf-8" />
	<title>file2</title>
	<link rel="stylesheet" href="zizo.css" />
</head>
<body>
	<div class="weather">
		<h1>Weather</h1>   
            <h2>Forecast Hourly</h2>
	</div>
	<div class="con">
	<form action="">
		<input type="text" name="cityname" id="input" placeholder="CityName"/>
		<br>
		<button type="submit" id="submit">submit</button>
		<br>
	<br/>
	<?php
		if(!empty($temp_array)){

		echo $temp_array['data'][0]['temp'];
}
	?>
	</form>
</div>
</body>
</html>
