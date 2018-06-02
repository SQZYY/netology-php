<?php
	$telBook = file_get_contents("telBook.json");
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
			<th>Город</th>
            <th>Улица</th>
            <th>Почтовый индекс</th>
			<th>Телефонные номера</th>
		</tr>
		<?php foreach ($json as $item) { ?>
		<tr>
			<td><?= $item['firstName'] ?></td>
			<td><?= $item['lastName'] ?></td>
            <?php foreach ($item['address'] as $manyAddresses) { ?>
			<td><?= $manyAddresses ?></td>
            <?php } ?>
            <?php foreach ($item['phoneNumbers'] as $manyNumbers) { ?>
			<td><?= $manyNumbers ?></td>
            <?php } ?>
		</tr>
		<?php
        } ?>
	</table>
</body>
</html>
