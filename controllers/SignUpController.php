<?php
if (isset($_POST['sign_up'])) {
    $firstName = $_POST['firstName'];
    $nickName = $_POST['nickName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rePassword = $_POST['rePassword'];

    $database = new DataBaseClass();
    $messages = new MessagesClass();
    $check = new CheckClass();
    $driver = new DriverClass();

    if (!empty($firstName) &
        !empty($nickName)  &
        !empty($email)     &
        !empty($password)  &
        !empty($rePassword)) {

        if ($check->isNewUser($email, $driver->getEmail())) {

            if ($password == $rePassword) {
                $database->insertData("CALL addNewDriver('$firstName', '$nickName', '$email', '$password')");
                htmlRedirect("../SignIn/signin.php");
            } else {
                $messages->getErrorBar("Паролі повинні співпадати.");
            }
        } else {
            $messages->getErrorBar("Email $email вже зареєстрований.");
        }

    } else {
        $messages->getErrorBar("Ви ввели не всі дані.");
    }
}
