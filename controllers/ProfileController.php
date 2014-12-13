<?php
$route = new RouteClass();
$route->outputRoutes("profile");

if (isset($_POST["save"])) {
    $_SESSION['firstName'] = $_POST['firstName'];

    $database = new DataBaseClass();

    $idDriver = $_SESSION['idDriver'];
    $firstName = $_POST['firstName'];
    $nickName = $_POST['nickName'];

    $database->insertData("UPDATE `Driver` SET `firstName`='$firstName', `nickName`='$nickName'
                           WHERE `idDriver`=$idDriver");
}