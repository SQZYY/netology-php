	<?php

	$weather = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=moscow&APPID=7bb7c2254e638e89b5db741b79ab9f7f');

	$rnow = json_decode($weather, true);

	$city = $rnow ['name'];
	$country = $rnow ['sys']['country'];
	$temperature = $rnow ['main']['temp'];
	$pressure = $rnow ['main']['pressure'];
	$humidity = $rnow ['main']['humidity'];
	$weatherMain = $rnow ['weather'][0]['main'];
	$windSpeed = $rnow ['wind']['speed'];
	$calvin = 273.15;
	$temp = $temperature - $calvin;

	echo '<strong> Город: </strong>' . $city .  '<br/>';
	echo '<strong> Страна: </strong>' . $country . '<br/>';
	echo '<strong> Температура: </strong>' . $temp . '°C' . '<br/>';
	echo '<strong> Погода: </strong>' . $weatherMain . '<br/>';
	echo '<strong> Скорость ветра: </strong>' . $windSpeed . '<br/>';
	echo '<strong> Давление: </strong>' . $pressure . '<br/>';
	echo '<strong> Влажность: </strong>' . $humidity . '%' . '<br/>';