<?php

    $weatherApi = file_get_contents('http://api.openweathermap.org/data/2.5/weather?id=4164138&appid=b3f8410463fe5ea9ad814bab9b43588a');

    $weather = json_decode($weatherApi, true);

    $country = $weather ['sys']['country'];
    $city = $weather ['name'];
    $temperature = $weather ['main']['temp'];
    $calvin = 273.15;
    $temp = $temperature - $calvin;
    $weatherMain = $weather ['weather'][0]['main'];
    $weatherDesc = $weather ['weather'][0]['description'];
    $windSpeed = $weather ['wind']['speed'];
    $pressure = $weather ['main']['pressure'];
    $humidity = $weather ['main']['humidity'];

?>

<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Сервис прогноза погоды</title>
        <style>
            table {
                border-spacing: 0;
                border-collapse: collapse;
            }
            table td, table th {
                border: 1px solid #ccc;
                padding: 5px;
            }
            table th {
                background: #eee;
            }
            table td {
                text-align: center;
            }
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th><strong>Страна</strong></th>
                <th><strong>Город</strong></th>
                <th><strong>Температура</strong></th>
                <th><strong>Погода</strong></th>
                <th><strong>Скорость ветра</strong></th>
                <th><strong>Давление</strong></th>
                <th><strong>Влажность</strong></th>
            </tr>
            <tr>
                <td><?= $country; ?></td>
                <td><?= $city; ?></td>
                <td><?= $temp . '°'; ?></td>
                <td><?php
                    if ($weatherMain == 'Clear') {
                        echo $weatherMain . '<br/>';
                        echo '<img src="http://openweathermap.org/img/w/01d.png">';
                    }
                    if ($weatherMain == 'Clouds') {
                        echo $weatherMain . '<br/>';
                        echo '<img src="http://openweathermap.org/img/w/03d.png">';
                    }
                    if ($weatherMain == 'Rain') {
                        echo $weatherMain . '<br/>';
                        echo '<img src="http://openweathermap.org/img/w/10d.png">';
                    }
                    if ($weatherMain == 'Thunderstorm') {
                        echo $weatherMain . '<br/>';
                        echo '<img src="http://openweathermap.org/img/w/11d.png">';
                    }
                    if ($weatherMain == 'Snow') {
                        echo $weatherMain . '<br/>';
                        echo '<img src="http://openweathermap.org/img/w/13d.png">';
                    }
                    if ($weatherMain == 'Haze') {
                        echo $weatherMain . '<br/>';
                        echo '<img src="http://openweathermap.org/img/w/50d.png">';
                    }
                    ?>
                </td>
                <td><?= $windSpeed . ' м/с';?></td>
                <td><?= $pressure . ' мм рт. ст'; ?></td>
                <td><?= $humidity . '%'; ?></td>
            </tr>
        </table>
    </body>
</html>
