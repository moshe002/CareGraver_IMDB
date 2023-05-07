<?php
    $_GET['err'] = "";
    $curError = $_GET['err'];
    $errorValidate = explode("&&", $curError);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Signup</title>
</head>
<body class="p-5 font-poppins">
    <h1 class="text-2xl font-bold">CareGraver</h1>
    <!-- parent div -->
    <div class="flex flex-col sm:flex-row justify-evenly mt-10">
        <!-- text div -->
        <div class="flex flex-col text-left p-3 pt-20">
            <h1 class="text-3xl font-semibold"><b>Sign Up to</b><br>
                Lorem Ipsum is simply
            </h1>
            <br>
            <br>
            <p>If you already have an account <br>
            You can <a class="text-blue-500 hover:cursor-pointer font-bold" href="login.php">Login here!</a>
            </p>
        </div>
        <!-- form div -->
        <div class="flex flex-col justify-center p-3 gap-7">
            <h1 class="font-semibold text-2xl">Sign Up</h1>
            <form class="flex flex-col gap-5" action="signupprocess.php" method="post">
                <input
                    class="bg-gray-200 p-3 rounded-md placeholder-black w-80 focus:outline-blue-500"
                    type="email" id="email" placeholder="Enter Email" name="email" aria-describedby="emailHelp" required>
                    <?php  if(in_array("Email_Taken", $errorValidate)) echo "Email already in use<br>";?>
                    <?php  if(in_array("Invalid_Email", $errorValidate)) echo "Invalid email format<br>";?>
                <input 
                    class="bg-gray-200 p-3 rounded-md placeholder-black w-80 focus:outline-blue-500"
                    type="text" id="username" placeholder="Create Username" name="username" required>
                    <?php if(in_array("Username_Taken", $errorValidate)) echo "Username already in use<br>";?> 
                <div class="flex flex-row justify-center gap-7">
                    <input 
                        class="w-36 bg-gray-200 p-3 rounded-md placeholder-black focus:outline-blue-500" 
                        type="text" id="firstname" name="firstname" placeholder="First Name" required> 
                    <input 
                        class="w-36 bg-gray-200 p-3 rounded-md placeholder-black focus:outline-blue-500" 
                        type="text" id="lastname" name="lastname" placeholder="Last Name" required>
                </div> 
                <input 
                    class="bg-gray-200 p-3 rounded-md placeholder-black w-80 focus:outline-blue-500"
                    type="number" id="contact" name="contact" placeholder="Contact number" required>   
                <input 
                    class="bg-gray-200 p-3 rounded-md placeholder-black w-80 focus:outline-blue-500"
                    type="password" id="pass" name="pass"placeholder="Password" required>
                    <?php if(in_array("Password_Mismatch", $errorValidate)) echo "The passwords you entered do not match<br>";?> 
                <input 
                    class="bg-gray-200 p-3 rounded-md placeholder-black w-80 focus:outline-blue-500"
                    type="password" id="confirmpass" name="confirmpass" placeholder="Confirm Password" required>
                <button 
                    class="bg-blue-500 p-3 rounded-md text-white mt-7 w-80 focus:outline-blue-500"
                    type="submit">Register</button>
            </form>
        </div>
    </div>
</body>
</html>