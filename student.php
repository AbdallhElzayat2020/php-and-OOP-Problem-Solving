<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$student = [
    "name" => "abdallh Elzayat",
    "email" => "abdallhelzayat@gmail.com",
    "phone" => "01212484233",
    "age" => "25years",
];
?>
<table>
    <thead>
    <tr>
        <td>name</td>
        <td>email</td>
        <td>phone</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            <?php echo $student["name"]; ?>
        </td>
        <td>
            <?php echo $student["email"]; ?>
        </td>
        <td>
            <?php echo $student["phone"]; ?>
        </td>
        <td>
            <?php echo $student["age"]; ?>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>















