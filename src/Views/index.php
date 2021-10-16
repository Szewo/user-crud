<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost:8080/">Home</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost:8080/add-user">ADD USER</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-5 shadow bg-light">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Telephone number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php if (isset($users) && is_array($users) && !empty($users)): ?>
                    <?php foreach ($users as $user): ?>

                        <tr>
                            <td> <?php echo $user['user_name'] ?>              </td>
                            <td> <?php echo $user['user_surname'] ?>           </td>
                            <td> <?php echo $user['user_telephone_number'] ?>  </td>
                            <td> <?php echo $user['user_address'] ?>           </td>
                            <td>
                                <a href="http://localhost:8080/delete-user?id=<?php echo $user['user_id'] ?>">
                                    <span class="badge bg-danger w-75">DELETE</span></a> </br>
                                <a href="http://localhost:8080/update-user?id=<?php echo $user['user_id'] ?>">
                                    <span class="badge bg-primary w-75">UPDATE</span></a> </br>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>