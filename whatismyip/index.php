<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<title>What Is My IP</title>

<h1><p><u>What Is My IP?</u></p></h1> </br>

<p>Your IP is:
    <?php
    echo '<b><p>' . $_SERVER['REMOTE_ADDR'] . "</p></b>";
    ?> </p>
</body>
</html>