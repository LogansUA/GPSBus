<?php
class MessagesClass
{
    public function __construct() {

    }

    public function getSuccessfulBar($message) {
    ?>
        <div>
            <strong>Чудово!</strong> <?php echo $message; ?>
        </div>
    <?php
    }

    public function getInformationBar($message) {
    ?>
        <div>
            <strong>Інформація!</strong> <?php echo $message; ?>
        </div>
    <?php
    }

    public function getWarningBar($message) {
    ?>
        <div>
            <strong>Попередження!</strong> <?php echo $message; ?>
        </div>
    <?php
    }

    public function getErrorBar($message) {
    ?>
        <div>
            <strong>Помилка!</strong> <?php echo $message; ?>
        </div>
    <?php
    }
}
