<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add user</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost:8080/">Home</a>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 bg-light p-5 mt-5 rounded shadow">
            <h1>Add user</h1>
            <form action="/persist-user" method="post" class="was-validated">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="user_name" placeholder="John" required>
                    <div class="invalid-feedback">
                        Please enter your name
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Surname</label>
                    <input type="text" class="form-control" name="user_surname" placeholder="Kowalsky" required>
                    <div class="invalid-feedback">
                        Please enter your surname
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Telephone number</label>
                    <input type="text" class="form-control" name="user_telephone_number"
                           placeholder="123-456-789" required>
                    <div class="invalid-feedback">
                        Please enter your telephone number
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="user_address" placeholder="Street, 00-000 City"
                           required>
                    <div class="invalid-feedback">
                        Please enter your address
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>