<?php
    session_name('controlpanel');
    session_start();

    if (!isset($_SESSION['username'])) {
        header('Location: ../panel/login.php');
        exit();
    }
?>
<?php
$filename = '/root/te-qbittorrent/install/te-qbittorrent-install-base-beta.log';  //about 500MB
$output = shell_exec('exec tail -n 1 ' . $filename);  //only print last 50 lines
echo str_replace(PHP_EOL, '<br />', $output);         //add newlines
?>
