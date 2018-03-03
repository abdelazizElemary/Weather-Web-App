<?php
if (!empty($_GET['cityname'])){

	$weather_url = 'http://api.weatherbit.io/v2.0/current?city='.$_GET['cityname'].'&key=75d700a5197a4aabb316e431ebb70835';
	$weather_json = file_get_contents($weather_url);
	$weather_array = json_decode($weather_json , true);
}
?>

<!DOCTYPE html>
<html lang="en">.
<head>
	<meta charset="utf-8" />
	<title>file1</title>
    <link  rel="stylesheet" href="zizo.css" /> 
</head>
<body>
    <div class="weather">
        <h1>Weather</h1>   
            <h2>Current Weather</h2>
    </div>
    <div class="con">
	<form action="">
		<input type="text" name="cityname" id="input" placeholder="CityName"/>
        <br>
        <button type="submit" id="submit">submit</button>
        <br>
	<br/>
	<?php
		if(!empty($weather_array)){

		echo  $weather_array['data'][0]['weather']['description'];
}
	?>
	</form>
         </div>
</body>
</html> 