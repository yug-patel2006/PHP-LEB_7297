<?php
// Server-side script used by 5.4_live_typing.html
// Echoes back a message based on what the user is typing
if (isset($_GET['q'])) {
    $q = trim($_GET['q']);
    if (strlen($q) === 0) {
        echo "Start typing to see live feedback...";
    } else {
        echo "You are typing: <b>" . htmlspecialchars($q) . "</b> (" . strlen($q) . " characters)";
    }
}
?>
