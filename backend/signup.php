<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
session_start();
$con = mysqli_connect('localhost', 'root', '','caregraver');

if(mysqli_connect_errno()){
    echo "Failed to connect: " . mysqli_connect_errno();
}

//Declaring variables to prevent errors
$txtUsername = "";
$txtEmail = "";
$txtPhone = "";
$txtPass = "";
$txtConfirm = "";
$error_array= array();

if(isset($_POST['register'])){
    // get the post records

    //Username
    $txtUsername = strip_tags($_POST['username']); //username, strip_tags = remove html tags
    $txtUsername = str_replace(' ','',$txtUsername);//remove spaces
    $txtUsername = ucfirst(strtolower($txtUsername));//Uppercase first letter
	$_SESSION['username'] = $txtUsername;// Stores username into session variable

    //Email
    $txtEmail = strip_tags($_POST['email']); //email, strip_tags = remove html tags
    $txtEmail = str_replace(' ','',$txtEmail);//remove spaces
    $txtEmail = ucfirst(strtolower($txtEmail));//Uppercase first letter
	$_SESSION['email'] = $txtEmail;// Stores username into session variable

    //Phone
    $txtPhone = strip_tags($_POST['contact']); //contact number, strip_tags = remove html tags  
	$_SESSION['contact'] = $txtPhone;// Stores username into session variable

    //Password
    $txtPass = strip_tags($_POST['pass']); //password, strip_tags = remove html tags  
    $txtConfirm = strip_tags($_POST['confirmpass']); //contact number, strip_tags = remove html tags  

    if(filter_var($txtEmail,FILTER_VALIDATE_EMAIL)){
        $txtEmail = filter_var($txtEmail, FILTER_VALIDATE_EMAIL);//validate email
        $echeck = mysqli_query($con, "SELECT email FROM tbl_signup WHERE email='$txtEmail'"); // check if email already exists
        $num_rows = mysqli_num_rows($echeck);//count number of rows returned

        if($num_rows > 0){
            array_push($error_array, "Email already in use<br>");
        }
    }
    else{
        array_push($error_array,"Invalid format<br>");
    }
    if(strlen($txtUsername)>25 || strlen($txtUsername) < 2){
       array_push($error_array, "Your username must be between 2 and 25 characters<br>"); 
    }
    if($txtPass != $txtConfirm){
        array_push($error_array, "Your passwords do not match<br>");
    }
	else{
		if(preg_match('/[^A-Za-z0-9]/', $txtPass)){
			array_push($error_array,"Your password can only contain english characters or numbers<br>");
		}
	}
	
	if(strlen($txtPass > 30 || strlen($txtPass) < 5 )){
		array_push($error_array, "Your password must be 5 to 30 characters");
	}
}
/*
// database insert SQL code
$sql = "INSERT INTO tbl_signup (id, email, username, contact_num, password) VALUES ('0', '$txtEmail', '$txtUsername', '$txtPhone', '$txtPass')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
*/
?>