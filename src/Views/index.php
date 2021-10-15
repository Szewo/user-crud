<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body>
<h1>VIEWS TEST</h1>
<ul>
    <li><a href="http://localhost:8080/add-user">ADD USER</a></li>
</ul>

<?php if (isset($users) && is_array($users) && !empty($users)): ?>
    <?php foreach ($users as $user): ?>

        <a href="http://localhost:8080/delete-user?id=<?php echo $user['user_id'] ?>"> DELETE </a> </br>
        <a href="http://localhost:8080/update-user?id=<?php echo $user['user_id'] ?>"> UPDATE </a> </br>

        <?php echo $user['user_name'] ?>             </br>
        <?php echo $user['user_surname'] ?>          </br>
        <?php echo $user['user_telephone_number'] ?> </br>
        <?php echo $user['user_address'] ?>          </br>

    <?php endforeach; ?>
<?php endif; ?>


</body>
</html>