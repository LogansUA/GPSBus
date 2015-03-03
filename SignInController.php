<?php

include_once('bootstrap.php');

$errorCode = 0;

if (isset($_POST['sign-in'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $errorCode = 1;
    }

    $driver = $entityManager->getRepository('Driver')->findOneBy([
        'email' => $email,
    ]);

    if (null === $driver) {
        $errorCode = 1;
    }

    if ($driver->getPassword() == $password) {
        fillSession($driver);

        if ($driver->getRole() == 'admin') {
            htmlRedirect('../Admin/index.php');
        } else {
            htmlRedirect('../index.php');
        }
    } else {
        $errorCode = 1;
    }
}

switch($errorCode) {
    case 0:
        echo 'Помилка';
        break;
    case 1:
        echo 'Невірний пароль, або імейл.';
        break;
    default:
        break;
}

function fillSession($user)
{
    $_SESSION['idDriver']  = $user->getId();
    $_SESSION['firstName'] = $user->getFirstName();
    $_SESSION['lastName']  = $user->getLastName();
    $_SESSION['email']     = $user->getEmail();
    $_SESSION['password']  = $user->getPassword();
    $_SESSION['idRoute']   = $user->getIdRoute();
    $_SESSION['group']     = $user->getRole();
}
