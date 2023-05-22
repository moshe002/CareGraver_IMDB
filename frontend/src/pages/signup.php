<?php
    session_start();
    $curError = "";
    isset($_GET['err']) ? $curError = $_GET['err'] : false;
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
            <h1 class="text-3xl font-semibold"><b>Sign Up</b><br>
                Create your free account
            </h1>
            <br>
            <br>
            <p>Already have an account?<br>
            You can <a class="text-blue-500 hover:cursor-pointer font-bold" href="login.php">Login Here</a>
            </p>
        </div>
        <!-- form div -->
        <div class="flex flex-col justify-center p-3 gap-7">
            <h1 class="font-semibold text-2xl">Sign Up</h1>
            <form class="flex flex-col gap-5" action="/CareGraver_IMDB/frontend/src/pages/signupprocess.php" method="post">
                <?php  if(in_array("Email_Taken", $errorValidate)) echo '<p class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">Email already in use<br></p>';
                    elseif(in_array("Invalid_Email", $errorValidate)) echo '<p class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">Invalid email format<br></p>';
                    elseif(in_array("Username_Taken", $errorValidate)) echo '<p class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">Username already in use<br></p>';
                    elseif(in_array("Passwords_Mismatch", $errorValidate))echo '<p class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">The passwords you entered do not match<br></p>';
                ?>
                <div class="flex flex-row justify-center gap-7">
                    <input 
                        class="w-36 bg-gray-200 p-3 rounded-md placeholder-black focus:outline-blue-500" 
                        type="text" id="firstname" name="firstname" placeholder="First Name" 
                        value="<?php if(isset($_SESSION['firstname'])){ echo $_SESSION['firstname'];}?>" required> 
                    <input 
                        class="w-36 bg-gray-200 p-3 rounded-md placeholder-black focus:outline-blue-500" 
                        type="text" id="lastname" name="lastname" placeholder="Last Name" 
                        value="<?php if(isset($_SESSION['lastname'])){ echo $_SESSION['lastname'];}?>"required>
                </div> 
                <input
                    class="bg-gray-200 p-3 rounded-md placeholder-black w-80 focus:outline-blue-500"
                    type="email" id="email" placeholder="Enter Email" name="email" aria-describedby="emailHelp" 
                    value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];}?>"required>
                <input 
                    class="bg-gray-200 p-3 rounded-md placeholder-black w-80 focus:outline-blue-500"
                    type="number" id="contact" name="contact" placeholder="Contact number" 
                    value="<?php if(isset($_SESSION['contact'])){ echo $_SESSION['contact'];}?>"required>
                <input 
                    class="bg-gray-200 p-3 rounded-md placeholder-black w-80 focus:outline-blue-500"
                    type="text" id="username" placeholder="Create Username" name="username" 
                    value="<?php if(isset($_SESSION['username'])){ echo $_SESSION['username'];}?>"required>
                <input 
                    class="bg-gray-200 p-3 rounded-md placeholder-black w-80 focus:outline-blue-500"
                    type="password" id="pass" name="pass"placeholder="Password" required>
                    
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