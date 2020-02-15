<!DOCTYPE html>
<html>
    <head>
        <style>
            p {
                margin: 1;
                padding: 0;
            }
        </style>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <title>Navigator</title>

        <h1><p><u>Navigator</u></p></h1> </br>

        <p><a href="/fileupload">File Uploader</a></p>
        <p><a href="/whatismyip">What Is My IP?</a></p>
        <p><a href="/sharer">Sharer</a></p>

    </body>
</html>

<?php
$myfile = fopen("ips.txt", "a");
$ip = "{   IP:  " . $_SERVER['REMOTE_ADDR'] . "\n" . "Date:   " . date("d/m/Y") . "     " . date("h:i:sa") . "   }\n\n";
if ($_SERVER['REMOTE_ADDR'] != "77.138.112.3") {
    fwrite($myfile, $ip);
    fclose($myfile);
} else {
    fclose($myfile);
}
?>