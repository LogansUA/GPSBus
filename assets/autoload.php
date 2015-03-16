<?php
function __autoload($className) {
    $string = $_SERVER['DOCUMENT_ROOT'] . "/models/" . $className . ".php";

    if (file_exists($string)) {
        include_once($_SERVER['DOCUMENT_ROOT'] . "/models/" . $className . ".php");
    } else {
        include_once($_SERVER['DOCUMENT_ROOT'] . "/controllers/" . $className . ".php");
    }
}
