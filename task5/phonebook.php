<?php
	$telBook = file_get_contents("telbook.json");
	$json = json_decode($telBook, true);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Таблица</title>
	<style>
		table td {
			border: 1px solid;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>Имя</th>
			<th>Фамилия</th>
			<th>Адрес</th>
			<th>Телефонные номера</th>
		</tr>
		<?php foreach ($json as $item) { ?>
		<tr>
			<td><?= $item['firstName'] ?></td>
			<td><?= $item['lastName'] ?></td>
            <?php $addresses = implode('<br>', $item['address']); ?>
			<td><?= $addresses ?></td>
            <?php $numbers = implode('<br>', $item['phoneNumbers']); ?>
			<td><?= $numbers ?></td>
		</tr>
		<?php
        } ?>
	</table>
</body>
</html>
