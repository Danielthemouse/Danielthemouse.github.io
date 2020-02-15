<?php

$password = "urmom";

if ($_POST["password"] == $password) {
    header("Location: site.php");
    die();
} else {
    echo "Wrong. Try again.";
}

?>