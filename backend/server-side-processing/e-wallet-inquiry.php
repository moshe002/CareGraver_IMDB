<?php 
    include('config.php');
    include('login-process.php');
    $userLoggedIn = $_SESSION['loggedInUser'];
    $walletOwnerID = $userLoggedIn['userID'];
    $sql = mysqli_query($mysqli,"SELECT balance FROM `e-wallet` WHERE userID = '$walletOwnerID'");
    $sqlResult = mysqli_fetch_assoc($sql);
    $balance = $sqlResult['balance'];        
    echo json_encode($balance);
?>