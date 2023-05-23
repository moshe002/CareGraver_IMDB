<?php 
    include('config.php');
    include('login-process.php');
    $userLoggedIn = $_SESSION['loggedInUser'];
    $walletOwnerID = $userLoggedIn['userID'];
    $reserveResult = [];
    parse_str(file_get_contents("php://input"), $postData);
    $amount = $postData['amount'];
    $graveID = $postData['graveID'];
    // if (isset($_POST['amount'])){
    //     $amount = $_POST['amount'];
        $sql = mysqli_query($mysqli,"SELECT balance FROM `e-wallet` WHERE userID = '$walletOwnerID'");
        $sqlResult = mysqli_fetch_assoc($sql);
        $balance = $sqlResult['balance'];
        if ($balance > $amount){
            $newBalance = $balance - $amount;
            $sql = mysqli_query($mysqli,"UPDATE `e-wallet` SET `balance` = '$newBalance' WHERE walletID = '$walletOwnerID'");    
            $message = "Payment successful, $amount has been deducted from your e-wallet.";
            $sql2 = mysqli_query($mysqli,"INSERT INTO `requestreservation` (userID, gravesiteID) VALUES ($walletOwnerID,'$graveID');");
            array_push($reserveResult, array("message" => $message, "newBalance" => $newBalance, "balance" => $balance));
        }
        else{
            $message = "Sorry, you do not have enough balance.";
            array_push($reserveResult, array("message" => $message));
        }
    // }
    echo json_encode($reserveResult);
?>