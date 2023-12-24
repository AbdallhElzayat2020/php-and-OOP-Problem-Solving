<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<h1>Users</h1>
<?php
$users = [
    ["name" => "John", "email" => "test@example", "password" => "123456"],
    ["name" => "test", "email" => "test@example", "password" => "123"],
];
$count = count($users);
?>
<table class="table table-borderd">
  <thead>
  <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
  </tr>
  </thead>
    <tbody>
    <?php for ($i=0; $i<$count; $i++):?>
        <tr>
            <?php foreach ($users[$i] as $value):?>
            <td class="<?php if ($value=="test"){echo "bg-black text-white";};?>" >
                <?php echo $value;?>
            </td>
            <?php endforeach;?>
        </tr>
    <?php endfor;?>
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>