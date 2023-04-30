<?php
    include("config.php");
    $showError = array();
    $success = false;
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //Username
        $txtUsername = strip_tags($_POST['username']); //username, strip_tags = remove html tags
        $txtUsername = str_replace(' ','',$txtUsername);//remove spaces
        $_SESSION['username'] = $txtUsername;// Stores username into session variable

        //Email
        $txtEmail = strip_tags($_POST['email']); //email, strip_tags = remove html tags
        $txtEmail = str_replace(' ','',$txtEmail);//remove spaces
        $_SESSION['email'] = $txtEmail;// Stores username into session variable

        //Phone
        $txtContact = strip_tags($_POST['contact']); //contact number, strip_tags = remove html tags  
        $_SESSION['contact'] = $txtContact;// Stores username into session variable

        //Password
        $txtPass = strip_tags($_POST['pass']); //password, strip_tags = remove html tags  
        $txtConfirm = strip_tags($_POST['confirmpass']); //contact number, strip_tags = remove html tags
                
        //username and password validation
        $sql = "Select * from user where userName='$txtUsername'";    
        $result = mysqli_query($mysqli, $sql);    
        $userNameValidate = mysqli_num_rows($result);
        $sql = "Select * from user where userEmail='$txtEmail'";    
        $result = mysqli_query($mysqli, $sql);    
        $emailValidate = mysqli_num_rows($result);
        if($userNameValidate == 0 && $emailValidate == 0) {
            if(($txtPass == $txtConfirm)) {    
                $hash = password_hash($txtPass, PASSWORD_DEFAULT);   
                if(filter_var($txtEmail,FILTER_VALIDATE_EMAIL)){
                    $txtEmail = filter_var($txtEmail, FILTER_VALIDATE_EMAIL);//validate email
                    $sql = "INSERT INTO `user` ( `userEmail`, `userName`,`userPassword`,`dateJoined`) VALUES ('$txtEmail','$txtUsername', '$hash', current_timestamp())";    
                    $result = mysqli_query($mysqli, $sql);                                          
                }
                else {
                    array_push($showError, "Invalid_Email");
                }
                
            } 
            else {
                array_push($showError, "Passwords_Mismatch"); 
            }
        }
        else if($userNameValidate>0) {
            array_push($showError, "Username_Taken");
        }
        else if($emailValidate>0) {
            array_push($showError, "Email_Taken"); 
        }   
        if(!empty($showError)){
            $errorInURL = implode("&&",$showError);
            header("location:signup.php?err=$errorInURL");
        }
        else{	
            $_SESSION["login"]="1";
            header("location:homepage.php");
        } 

    }

?>