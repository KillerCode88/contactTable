<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Таблица с контактами</title>
    <style>
        table {
            color: #12c;
            border-collapse: collapse;
            margin: auto;
        }

        th, td {
            border: 3px dotted #626060;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
<table>
    <?php

    $contacts = json_decode(file_get_contents(__DIR__ . '/contacts.json'));

    foreach ($contacts as $contact) {
        echo '<tr>';
        echo '<td>' . $contact->firstName . '</td>';
        echo '<td>' . $contact->lastName . '</td>';
        echo '<td>' . $contact->address . '</td>';
        echo '<td>' . $contact->phoneNumber . '</td>';
        echo '</tr>';
    }
    ?>
</table>
</body>
</html>