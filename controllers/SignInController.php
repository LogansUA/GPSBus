<?php
if (isset($_POST['sign_in'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $correctEmail = true;
    $correctPassword = true;

    $messages = new MessagesClass();
    $check = new CheckClass();
    $driver = new DriverClass();
    $login = new LoginClass();

    $driverEmailArray = $driver->getEmail();
    $driverPasswordArray = $driver->getPassword();

    $isRegistered = $check->isRegistered($email, $driverEmailArray,
        $password, $driverPasswordArray);

    if (!empty($email) && !empty($password)) {
        if ($isRegistered) {
            if ($login->isAdmin($email)) {
                htmlRedirect("../Admin/index.php");
            } else {
                htmlRedirect("../index.php");
            }
        } else {
            $messages->getErrorBar("Невірний пароль, або імейл.");
        }
    } else {
        $messages->getErrorBar("Не всі поля заповнені.");
    }
}