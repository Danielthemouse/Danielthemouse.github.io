<html>
    <link rel='icon' href='../favicon.ico' type='image/x-icon'/ >
    <link rel="stylesheet" href="../style.css">
    <title>Login</title></br>
    <h1><p><u>Login</u></p></h1> </br>
    <?php

    include '../globalvars.php';

    $password = $globalpass;

    if ($_POST["password"] == $password) {
      header("Location: site.php");
      die();
    } else {
        echo "Wrong. Try again.";
    }

    ?>
</html>
