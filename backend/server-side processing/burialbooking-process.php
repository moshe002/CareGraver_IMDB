<?php 
    include('config.php');
    include('loginprocess.php');
    $userLoggedIn = $_SESSION['loggedInUser'];
    $walletOwnerID = $userLoggedIn['userID']; 


?>