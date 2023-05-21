<?php 
    include('config.php');
    include('loginprocess.php');    
    $userLoggedIn = $_SESSION['loggedInUser'];
    $senderUID = $userLoggedIn['userID'];
    $receiveMessage = [];
    //sending
    if (isset($_POST['message'])){
        $message = $_POST['message'];
        $sql = mysqli_query($mysqli,"INSERT INTO `user_chat_message` (`senderUID`,`chatMessage`,`sentDate`) VALUES ('$senderUID','$message', current_timestamp())");    
    }
    
    //receiving
    $sql = mysqli_query($mysqli,"SELECT * FROM `staff_chat_message` WHERE `receiverUID` = '$senderUID'");
    if ($sql){
        $results = mysqli_fetch_all($sql, MYSQLI_ASSOC);
        foreach ($results as $result){  
            array_push($receiveMessage, array("chatID" => $result['chatID'], "chatMessage" => $result['chatMessage']));
        }        
        echo json_encode($receiveMessage);
    }
    else{
        echo "Connection Failure. Please refresh the page.";
    }    

?>