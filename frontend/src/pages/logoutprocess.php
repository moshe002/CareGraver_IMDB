<?php
session_start ();
session_destroy();
unset($_SESSION["login"]);
header("location:login.php?logout=success");
?>