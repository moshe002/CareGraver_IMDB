<?php
session_start ();
include("config.php");

if(isset($_REQUEST['sub'])){
	$a = $_REQUEST['loginfo'];
	$b = $_REQUEST['password'];
	$res = mysqli_query($mysqli,"select * from user where userEmail='$a'or userName='$a'");
	$numRows =  mysqli_num_rows($res);

	if($numRows == 1){	
		$row = mysqli_fetch_assoc($res);
		if (password_verify($b, $row['userPassword'])){
			$_SESSION["loggedInUser"] = $row;
			$_SESSION["login"]="1";
			header("location:/CareGraver_IMDB/frontend/src/pages/homepage.php");
		}
		else{//not match pass
			header("location:/CareGraver_IMDB/frontend/src/pages/login.php?err=2");	
		}	
	}
	else{
		//username or email no match
		header("location:/CareGraver_IMDB/frontend/src/pages/login.php?err=1");	
	}
	
}
?>
