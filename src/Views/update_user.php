<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update User</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body>
<h1>UPDATE USER</h1>
<?php if (isset($user) && is_array($user) && !empty($user)): ?>
    <form action="/update-user?id=<?php echo (int)$user[0]['user_id'] ?>" method="post">
        <label>First name: </label></br>
        <input type="text" name="user_name" value="<?php echo $user[0]['user_name'] ?>"></br>
        <label>Surname: </label></br>
        <input type="text" name="user_surname" value="<?php echo $user[0]['user_surname'] ?>"></br>
        <label>Telephone number: </label></br>
        <input type="text" name="user_telephone_number" value="<?php echo $user[0]['user_telephone_number'] ?>"></br>
        <label>Address: </label></br>
        <input type="text" name="user_address" value="<?php echo $user[0]['user_address'] ?>"></br>
        <input type="submit">
    </form>
<?php endif; ?>


</body>
</html>