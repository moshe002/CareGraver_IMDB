<?php
    session_start ();
    session_destroy();
    unset($_SESSION["login"]);
    header("location:/CareGraver_IMDB/frontend/src/pages/login.php?logout=success");
?>