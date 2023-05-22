<?php 
    include('config.php');
    include('loginprocess.php');
    $userLoggedIn = $_SESSION['loggedInUser'];
    $walletOwnerID = $userLoggedIn['userID']; 
    if (isset($_POST['amount'])){
        $amount = $_POST['amount'];
        $sql = mysqli_query($mysqli,"SELECT balance FROM `e-wallet` WHERE userID = '$walletOwnerID'");
        $sqlResult = mysqli_fetch_assoc($sql);
        $balance = $sqlResult['balance'];
        if ($balance > $amount){
            $newBalance = $balance - $amount;
            $sql = mysqli_query($mysqli,"INSERT INTO `e-wallet` (`balance`) VALUES ('$newBalance)");    
            echo "Payment successful, $amount has been deducted from your e-wallet.";
        }
        else{
            echo "Sorry, you do not have enough balance.";
        }
    }
?>