<?php

include_once('bootstrap.php');

if (isset($_POST['save'])) {
    $idDriver  = $_SESSION['idDriver'];
    $firstName = $_POST['firstName'];
    $lastName  = $_POST['lastName'];
    $gender    = $_POST['gender'];

    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName']  = $lastName;

    switch($gender) {
        case 'male':
            $_SESSION['gender'] = 'Чоловіча';
            break;
        case 'female':
            $_SESSION['gender'] = 'Жіноча';
            break;
    }

    $driver = $entityManager->getRepository('Driver')->findOneBy([
        'id' => $idDriver,
    ]);

    $driver->setFirstName($firstName)
        ->setLastName($lastName)
        ->setGender($gender);

    $entityManager->flush();

    phpRedirect('profile.php');
}
