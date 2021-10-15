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

<?php
    if(isset($users) && is_array($users) && !empty($users))
    {
        foreach ($users as $user)
        {
            echo '</br>';
            echo $user['user_name'] . '</br>';
            echo $user['user_surname'] . '</br>';
            echo $user['user_telephone_number'] . '</br>';
            echo $user['user_address'] . '</br>';
            echo '</br>';
        }
    }
?>

</body>
</html>