<?php
class Messages
{
    public function __construct() {

    }

    public function getSuccessfullBar($message) {
    ?>
        <div class="alert alert-success" role="alert">
            <strong>Чудово!</strong> <?php echo $message; ?>
        </div>
    <?php
    }

    public function getInformationBar($message) {
    ?>
        <div class="alert alert-info" role="alert">
            <strong>Інформація!</strong> <?php echo $message; ?>
        </div>
    <?php
    }

    public function getWarningBar($message) {
    ?>
        <div class="alert alert-warning" role="alert">
            <strong>Попередження!</strong> <?php echo $message; ?>
        </div>
    <?php
    }

    public function getErrorBar($message) {
    ?>
        <div class="alert alert-danger" role="alert">
            <strong>Помилка!</strong> <?php echo $message; ?>
        </div>
    <?php
    }
} 