<?php
$password_length = isset($GET_['pass_lenght']);

function randomPassword($password_length)
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789?!><"£';
    $password = '';
    $alphaLength = strlen($alphabet) - 1;

    for ($i = 0; $i < $password_length; $i++) {
        $password .= $alphabet[random_int(0, $alphaLength)];
    }
    return $password;
}
var_dump(randomPassword(6));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="alert alert-primary" role="alert">
            Result:
        </div>
        <div class="card my-4 py-3 px-5" style="width: 100%;">
            <form action="" method="GET">
                <div class="d-flex align-items-center justify-content-between">
                    <label for="psw" class="form-label">Lunghezza Password:</label>
                    <div>
                        <input type="number" class="form-control" id="psw" name="pass_lenght">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </div>
    </div>
</body>

</html>