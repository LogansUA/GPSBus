<?php
/* TODO: Change personal data depends on document name (change_password or change_email) */

if (true) {
    if (isset($_POST['save'])) {
        $oldPassword = $_POST['oldPassword'];
        $newPassword = $_POST['newPassword'];
        $repeatNewPassword = $_POST['repeatNewPassword'];

        $idDriver = $_SESSION['idDriver'];

        if ($newPassword == $repeatNewPassword) {
            $database = new DataBaseClass();

            $database->insertData("UPDATE `Driver` SET `password`='$newPassword' WHERE `idDriver`=$idDriver");
            htmlRedirect("profile.php");
        }
    }
} else {

}
