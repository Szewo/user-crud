<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADD USER</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body>
<h1>ADD USER</h1>
<form action="/persist-user" method="post">
    <label>First name: </label></br>
    <input type="text" name="user_name"></br>
    <label>Surname: </label></br>
    <input type="text" name="user_surname"></br>
    <label>Telephone number: </label></br>
    <input type="text" name="user_telephone_number"></br>
    <label>Address: </label></br>
    <input type="text" name="user_address"></br>
    <input type="submit">
</form>


</body>
</html>