<?php
    include("config.php");
    $gravesiteID = $_GET["graveID"];
    $availability = mysqli_fetch_array(mysqli_query($mysqli,"select availability from gravesite where gravesiteID = '$gravesiteID'"));
    
?>