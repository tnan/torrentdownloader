<?php
$filename = '/var/www/html/install.log';  //about 500MB
$output = shell_exec('exec tail -n 10 ' . $filename);  //only print last 50 lines
echo str_replace(PHP_EOL, '<br>', $output);         //add newlines
?>
