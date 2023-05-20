<?php 
    include('config.php');
    include('loginprocess.php');
    $message = $_POST['message'];
    $userLoggedIn = $_SESSION['loggedInUser'];
    $senderUID = $userLoggedIn['userID'];
    $sql = mysqli_query($mysqli,"INSERT INTO `user_chat_message` (`senderUID`,`chatMessage`,`sentDate`) VALUES ('$senderUID','$message', current_timestamp())");

?>