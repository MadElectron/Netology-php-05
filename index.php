<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Телефонная книга</title>
    <style>
        * {
            font-family: Arial, sans-serif;
            
        }
        table {
            border-collapse: collapse;
        }
        th, td { 
            padding: 2px 10px;
            border:  1px solid #000;
        }
    </style>
</head>
<body>
<?php  
    $json = file_get_contents("phonebook.json");
    $data = json_decode($json, 1);
?>
    <table>
        <h1>Телефонная книга</h1>
        <thead>
            <tr>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Адрес</th>
                <th>Телефон</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($data as $record) { ?>
            <tr>
                <td><?php echo $record['firstName']; ?></td>
                <td><?php echo $record['lastName']; ?></td>
                <td><?php echo $record['address']; ?></td>
                <td><?php echo $record['phoneNumber']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>