<?php

class News
{
    public $title;
    public $description;
    public $date;
    public $comments;

    public function getTitle()
    {
        return $this->title = 'Заголовок новости';
    }
    public function getDescription()
    {
        return $this->description = 'Описание новости';
    }
    public function getDate()
    {
        return $this->date = 'Дата создания новости';
    }
    public function getComments()
    {
        return $this->comments = 'Комментарии к новости';
    }
}

$news = new News();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Новости</title>
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
    </style>
</head>
<body>
	<table>
		<tr>
			<th><?= $news->getTitle(); ?></th>
		</tr>
        <tr>
            <td><?= $news->getDate(); ?></td>
        </tr>
		<tr>
            <td><?= $news->getDescription(); ?></td>
		</tr>
        <tr>
            <td><?= $news->getComments(); ?></td>
        </tr>
	</table>
</body>
</html>