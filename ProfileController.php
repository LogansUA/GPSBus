<?php

include_once('bootstrap.php');

if (isset($_POST["save"])) {
    $idDriver  = $_SESSION['idDriver'];
    $firstName = $_POST['firstName'];
    $lastName  = $_POST['lastName'];

    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName']  = $lastName;

    $driver = $entityManager->getRepository('Driver')->findOneBy([
        'id' => $idDriver,
    ]);

    $driver->setFirstName($firstName)
        ->setLastName($lastName);

    $entityManager->flush();

    phpRedirect('profile.php');
}
