<?php
function phpRedirect($url) {
    header("Location: $url");
}

function htmlRedirect($url) {
    echo '<meta http-equiv="refresh" content="0;URL=' . $url . '" />';
}

