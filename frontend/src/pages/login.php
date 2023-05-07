<?php
    $curError = "";
    isset($_GET['err']) ? $curError = $_GET['err'] : false;
    isset($_GET['logout']) ? $curError = "logoutsuccess" : false;
    isset($_GET['register']) ? $curError = "registersuccess" : false;       
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
    <title>Login</title>
</head>
<body class="p-5 font-poppins">
    <h1 class="text-2xl font-bold">CareGraver</h1>
    <!-- parent div -->
    <div class="flex flex-col sm:flex-row justify-evenly mt-10">
        <!-- text div -->
        <div class="flex flex-col text-left p-3 pt-20">
            <h1 class="text-3xl font-semibold"><b>Sign in to</b><br>
                Lorem Ipsum is simply
            </h1>
            <br>
            <br>
            <p>If you don't have an account register <br>
            You can <a class="text-blue-500 hover:cursor-pointer font-bold" href="signup.php">Register here!</a>
            </p>
        </div>
        <!-- form div -->
        <div class="flex flex-col justify-center p-3 gap-7">
            <h1 class="font-semibold text-2xl">Sign in</h1>
            <form class="flex flex-col relative gap-5" method="POST" action="/CareGraver_IMDB/frontend/src/pages/loginprocess.php">
            <?php  if($curError == "logoutsuccess") echo '<p class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">Logged out successfully<br></p>';
                    elseif($curError == "1") echo '<p class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">We couldn`t find an account with that email address or username.<br></p>';
                    elseif($curError == "2") echo '<p class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">The password you entered is incorrect. Please try again.<br></p>';
                ?>
                <input
                    class="bg-gray-200 p-3 rounded-md placeholder-black w-80 focus:outline-blue-500"
                    type="text" id="loginfo" placeholder="Enter email or username" name="loginfo" required>
                <input
                    class="bg-gray-200 p-3 rounded-md placeholder-black w-80 focus:outline-blue-500" 
                    type="password" id="password" placeholder="Password" name="password" required>
                    <a href="" class="absolute text-xs text-gray-400 right-32 sm:right-1 -bottom-6">Forgot Password?</a>
                <button 
                    class="bg-blue-500 p-3 rounded-md text-white mt-7 w-80"
                    type="submit" name="sub">Login
                </button>
            </form>
        </div>
    </div>
</body>
</html>

