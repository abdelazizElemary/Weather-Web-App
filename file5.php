<?php
if (!empty($_GET['cityname']) &&!empty($_GET['startDate']) &&!empty($_GET['endDate'])){

	$history_url = 'http://api.weatherbit.io/v2.0/history/hourly?city='.$_GET['cityname'].'&start_date=2018-02-'.urlencode($_GET['startDate']).'&end_date=2018-02-'.urldecode($_GET['endDate']).'&key=75d700a5197a4aabb316e431ebb70835';
	$history_json = file_get_contents($history_url);
	$history_array = json_decode($history_json , true);
}
?>
<!DOCTYPE html>
<html lang="en">.
<head>
	<meta charset="utf-8" />
	<title>file5</title>
	<link rel="stylesheet" type="text/css" href="zizo.css">
</head>
<body>
	<div class="weather">
		<h1>Weather</h1>
		<h2>History Hourly</h2>
	</div>
	<div class="con">
	<form action="">
		<input type="text" name="cityname" id="input" placeholder="City Name" />
		<br>
		<input type="text" name="startDate" id="Sdate" placeholder="Start Date" />
		<br>
		<input type="text" name="endDate" id="Edate" placeholder="End Date" />
		<br>
		<button type="submit" id="submit">submit</button>
		<br>
	<br/>
	<?php
		if(!empty($history_array)){

		echo $history_array['data'][0]['wind_spd'];
}
	?>
	</form>
</div>
</body>
</html>
