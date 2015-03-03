<?php

include_once('bootstrap.php');

if (isset($_POST['save'])) {
    $page = $_POST['page'];
    $isAllGood = false;

    $driver = $entityManager->find('Driver', '2');

    switch ($page) {
        case 'email':
            $idDriver = $_SESSION['idDriver'];
            $oldEmail = $_POST['old-email'];
            $newEmail = $_POST['new-email'];

            if ($oldEmail != $newEmail) {
                $driver->setEmail($newEmail);

                $entityManager->flush();

                $_SESSION['action-message'] = 'Hooray! You change password!';

                $isAllGood = true;
            }
            break;
        case 'password':
            $oldPassword       = $_POST['old-password'];
            $newPassword       = $_POST['new-password'];
            $repeatNewPassword = $_POST['repeat-new-password'];

            if ($newPassword == $repeatNewPassword) {
                $driver->setPassword($newPassword);

                $entityManager->flush();

                $_SESSION['action-message'] = 'Hooray! You change email!';

                $isAllGood = true;
            }
            break;
        default:
            throw new HttpRequestException();
    }

    if ($isAllGood) {
        phpRedirect('/views/index.php');
    } else {
        echo 'Somethings wrong!';
    }
}
