<?php 
    include('config.php');
    include('loginprocess.php');    
    $userLoggedIn = $_SESSION['loggedInUser'];
    $senderUID = $userLoggedIn['userID'];    
    $allMessages = [];

    //send message
    if (isset($_POST['message'])){
        $message = $_POST['message'];
        $sql = mysqli_query($mysqli,"INSERT INTO `chat` (`senderUID`,`receiverUID`,`chatMessage`,`sentDate`) VALUES ('$senderUID','admin','$message', current_timestamp())");    
    }
    
    //receiving all incoming
    $sqlReceive = mysqli_query($mysqli,"SELECT * FROM `chat` WHERE `receiverUID` = '$senderUID'");
    if ($sqlReceive){
        $results = mysqli_fetch_all($sqlReceive, MYSQLI_ASSOC);
        foreach ($results as $result){  
            array_push($allMessages, array("SentOrReceived" => "received", "chatID" => $result['chatID'], "chatMessage" => $result['chatMessage'], "chatTimestamp" => $result['sentDate']));
        }
    }    
    //all sent messages
    $sqlSent = mysqli_query($mysqli,"SELECT * FROM `chat` WHERE `senderUID` = '$senderUID'");
    if ($sqlSent){
        $results = mysqli_fetch_all($sqlSent, MYSQLI_ASSOC);
        foreach ($results as $result){ 
            array_push($allMessages, array("SentOrReceived" => "sent","chatID" => $result['chatID'], "chatMessage" => $result['chatMessage'], "chatTimestamp" => $result['sentDate']));
        }
    }
    //error handling
    if ($sqlReceive == 'false' && $sqlSent == 'false'){
        echo "Lost connection to the server. Please refresh the page.";
    }
    
    function compareByTimestamp($a, $b) {
        $timestampA = strtotime($a["chatTimestamp"]);
        $timestampB = strtotime($b["chatTimestamp"]);
    
        return $timestampA - $timestampB;
    }
    
    usort($allMessages, "compareByTimestamp");
    echo json_encode($allMessages);

?>