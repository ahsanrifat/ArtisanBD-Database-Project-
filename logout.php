<?php

session_start();

session_destroy();

session_start();

$_SESSION["message"]="Logged Out!";

header("Location: LoginForm.php");
?>

