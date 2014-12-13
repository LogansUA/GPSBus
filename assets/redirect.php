<?php
function phpRedirect($url) {
    header("Location: $url");
    die();
}

function htmlRedirect($url) {
    echo '<meta http-equiv="refresh" content="0;URL=' . $url . '" />';
}

function javaScriptRedirect($url) {
    echo '<script language="JavaScript">window.location.href = "' . $url . '"</script>';
}