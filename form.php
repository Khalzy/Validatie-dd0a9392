<?php


if (isset($_POST['email']) && !empty(($_POST['email']))) {
    //validate Email
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo 'E-mail adres is geldig!';
    } else {
        echo 'invalid E-mail try again';
    }
} else {
    echo 'please enter correct email';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bit Academy</title>
</head>

<body>

    <form action="" method="post">
        <input type="text" name="email" value="Vul je e-mail adress in" />
        <input type="submit" value="Verstuur">
    </form>

</body>

</html>