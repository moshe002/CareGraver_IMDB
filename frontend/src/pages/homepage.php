<?php 
session_start ();
if(!isset($_SESSION["login"]))
	header("location:login.php"); 
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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body class="scroll-smooth font-montserrat">
    <div id="home" class="bg-[url('../assets/background-images/Background-image.png')] h-full w-full bg-no-repeat bg-cover bg-center">
        <!-- navbar -->
        <div class="flex flex-row justify-between items-center w-full bg-gray-300 p-5 opacity-80 z-10">
            <div class="flex justify-start ml-24 items-center gap-36">
                <h1 class="font-bold text-2xl">CareGraver</h1>
                <div class="flex gap-10 font-semibold">
                    <a href="">Home</a>
                    <a href="">Services</a>
                    <a href="">Explorer</a>
                    <a href="">Contact</a>
                </div>
            </div>
            <!-- two icons div? -->
            <div class="flex gap-10 items-center justify-center mr-24">
                <a href="">
                    <img class="w-5 h-5" src="../assets/icons/user icon.png" alt="user_icon">
                </a>
                <a href="">
                    <img class="w-5 h-5" src="../assets/icons/search icon.png" alt="search_icon">
                </a>
            </div>
        </div>
        <!-- content div -->
        <div class="h-screen p-28 bg-gradient-to-r from-white to-transparent">
            <h1 class="text-5xl font-bold leading-snug">Love<br>Transcends<br>Death</h1>
            <br>
            <p class="text-xl">
                At CareGraver, we recognize that love is eternal and that memories <br>
                of loved ones continue to live on. We are here to provide a place where you can <br>
                honor and pay tribute to those who have passed away, and to help you keep their memory alive.
            </p>
            <br>
            <button 
                class="bg-blue-500 p-5 rounded-md text-white font-semibold"
                type="button">Start your care</button>
        </div>
    </div>
    <script src="../javascript/slider-review.js"></script>
</body>
</html>

