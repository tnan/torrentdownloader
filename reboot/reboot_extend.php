<?php
    session_name('controlpanel');
    session_start();

    if (!isset($_SESSION['username'])) {
        header('Location: reboot_extend_login.php');
        exit();
    }
?>
<link href="../css/style.css" rel="stylesheet">
<iframe frameBorder="0" width="100%" height="100%" src="reboot_extend_default.php"></iframe>
