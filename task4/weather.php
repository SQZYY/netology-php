<?php

    $link = 'http://api.openweathermap.org/data/2.5/weather?id=4164138&appid=b3f8410463fe5ea9ad814bab9b43588a';
    $weatherApi = file_get_contents($link);

    if ($weatherApi == false) {
        exit('Не удалось получить данные');
    }

	$weather = json_decode($weatherApi, true);

    if ($weather === null) {
        exit('Ошибка декодирования json');
    }

    $country = $weather ['sys']['country'];
	$city = $weather ['name'];
	$temperature = $weather ['main']['temp'];
    $calvin = 273.15;
    $temp = $temperature - $calvin;
    $weatherMain = $weather ['weather'][0]['main'];
    $windSpeed = $weather ['wind']['speed'];
	$pressure = $weather ['main']['pressure'];
	$humidity = $weather ['main']['humidity'];
	$icon = $weather ['weather'][0]['icon'];

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
                <td><?= (!empty($country)) ? $country : 'Не удалось получить название страны'; ?></td>
                <td><?= (!empty($city)) ? $city : 'Не удалось получить название города'; ?></td>
                <td><?= (!empty($temp)) ? $temp . '°' : 'Не удалось получить температуру'; ?></td>
                <td><?php
                    if (!empty($weatherMain)) {
                        echo (!empty($weatherMain)) ? $weatherMain . '<br/>' .
                            '<img src="\http://openweathermap.org/img/w/$icon.png\">': 'Не удалось получить погоду';
                    } else {
                        echo 'Не удалось получить погоду';
                    }
                    ?>
                </td>
                <td><?= (!empty($windSpeed)) ? $windSpeed . ' м/с': 'Не удалось получить скорость ветра';?></td>
                <td><?= (!empty($pressure)) ? $pressure . ' мм рт. ст': 'Не удалось получить давлении'; ?></td>
                <td><?= (!empty($humidity)) ? $humidity . '%': 'Не удалось получить влажность'; ?></td>
            </tr>
        </table>
    </body>
</html>