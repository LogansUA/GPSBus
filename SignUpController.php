<?php

include_once('src/Driver.php');
include_once('bootstrap.php');

if (isset($_POST['sign-up'])) {
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rePassword = $_POST['re-password'];

    if (
        null !== $firstName  &&
        null !== $lastName   &&
        null !== $email      &&
        null !== $password   &&
        null !== $rePassword
    ) {
        $driver = $entityManager->getRepository('Driver')->findOneBy([
            'email' => $email,
        ]);

        if (null === $driver) {
            if ($password == $rePassword) {
                $newDriver = new Driver();

                $newDriver->setFirstName($firstName)
                    ->setLastName($lastName)
                    ->setEmail($email)
                    ->setPassword($password)
                    ->setIdRoute(5)
                    ->setRole('user');

                $entityManager->persist($newDriver);
                $entityManager->flush();

                htmlRedirect("../SignIn/signin.php");
            }
        } else {
            echo "Користувач з таким імейлом вже зареєстрований!";
        }
    } else {
        echo "Ви ввели не всі дані.";
    }
}
