<?php

include_once('bootstrap.php');

if (isset($_POST['sign-in'])) {
    $errorCode = 0;

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $errorCode = 2;
    }

    $driver = $entityManager->getRepository('Driver')->findOneBy([
        'email' => $email,
    ]);

    if (null === $driver) {
        $errorCode = 2;
    } else {
        if ($driver->getPassword() == $password) {
            fillSession($driver);

            if ($driver->getRole() == 'admin') {
                htmlRedirect('../Admin/index.php');
            } else {
                htmlRedirect('../index.php');
            }
        } else {
            $errorCode = 2;
        }
    }
}

switch($errorCode) {
    case 1:
        echo 'Помилка';
        break;
    case 2:
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
