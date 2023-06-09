<?php
session_start();
if (!isset($_SESSION["login"]))
    header("location:/CareGraver_IMDB/frontend/src/pages/login.php");
isset($_SESSION['loggedInUser']) ? $loggedInUser = $_SESSION["loggedInUser"]:false;
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <title>Home</title>
    <link rel="stylesheet" href="../css/chatbox.css">

    <script src="../javascript/scroll.js"></script>
</head>

<body class="scroll-smooth font-montserrat">
    <?php include '/xampp/htdocs/CareGraver_IMDB/frontend/src/components/chatbox.html' ?>
    <div id="home"
        class="relative bg-[url('../assets/background-images/Background-image.png')] h-full w-full bg-no-repeat bg-cover bg-center"
        style="background-attachment: fixed;">
        <!-- navbar -->
        <header>
            <div id="navbar"
                class="wrapHead flex flex-row fixed justify-between items-center w-full bg-white shadow-2xl p-5 duration-150 z-50">
                <div class="flex justify-start ml-24 items-center gap-24">
                    <h1 class="font-bold text-2xl">CareGraver</h1>
                    <nav class="flex gap-10 font-semibold" id="topnav">
                        <a class="scroll duration-150" href="#home">Home</a>
                        <a class="scroll duration-150" href="#explorer">Explorer</a>
                        <a type="button" class="scroll duration-150 hover:cursor-pointer" onclick="(function(){
                            window.location.href = 'contact-page.php';
                            return false;
                        })();return false;">Contact Us</a>
                    </nav>
                </div>
                <!-- two icons div? -->
                <div class="flex gap-10 items-center justify-center mr-24">
                    <div class="relative">
                        <button
                            class="text-black text-lg font-medium p-2 rounded-md text-center inline-flex items-center hover:bg-blue-400 hover:text-white hover:opacity-100 focus:bg-blue-400 focus:text-white duration-150"
                            type="button" onclick="onOpen()">
                            <h1>Hello,&nbsp;</h1>
                            <h1 name="username" class="">
                                <?php
                                echo $loggedInUser["fName"];
                                ?>
                            </h1>
                        </button>
                        <!-- user account -->
                        <div id="user-menu"
                            class="z-10 hidden flex-col absolute bg-white divide-y divide-gray-100 rounded-md shadow w-50 dark:bg-gray-700 w-max">
                            <!-- Dropdown menu -->
                            <div class="px-4 py-3 text-gray-900 dark:text-white">
                                <h1 class="text-lg">
                                    <?php
                                    echo $loggedInUser["fName"] . " " . $loggedInUser["lName"];
                                    ?>
                                </h1>
                                <h1 class="font-medium truncate text-sm ">
                                    <?php
                                    echo $loggedInUser["userEmail"];
                                    ?>
                                </h1>
                            </div>
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownHoverButton">
                                <li>
                                    <a href="../pages/account.php"
                                        class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Manage
                                        Account</a>
                                </li>
                            </ul>
                            <div class="py-2">
                                <a href="/CareGraver_IMDB/backend/server-side-processing/logout-process.php"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                    out</a>
                            </div>
                        </div>
                        <!-- end of user account -->
                    </div>
                </div>
            </div>
        </header>
        <!-- end of navbar -->
        <!-- content div -->
        <div class="flex flex-col items-start justify-center h-screen p-28 bg-gradient-to-r from-white to-transparent">
            <h1 class="text-5xl mt-10 font-bold leading-snug">Love<br>Transcends<br>Death</h1>
            <br>
            <p class="text-xl">
                At CareGraver, we recognize that love is eternal and that memories <br>
                of loved ones continue to live on. We are here to provide a place where you can <br>
                honor and pay tribute to those who have passed away, and to help you keep their memory alive.
            </p>
            <br>
            <a class="bg-blue-500 p-5 rounded-md text-white font-semibold hover:bg-cyan-300 duration-150" type="button"
                href="#service">Start your care</a>
        </div>
    </div>
    <!-- grave explorer -->
    <div class="h-full" id="explorer">
        <div class="flex flex-col gap-6 justify-start p-28">
            <h1 class="text-blue-500 font-bold text-lg">Take a tour on our</h1>
            <h1 class="font-bold text-5xl">Cemetery Explorer</h1>
            <p class="text-gray-400 text-sm">The Cemetery Explorer is a powerful tool that displays all the available
                and occupied grave sites.
                <br>Click on a grave site to proceed to the grave site application form.
            </p>
            <div id="map" style="height: 400px; width: 100%; border: 1px solid black;"></div>
            <!-- slider -->
            <div class="flex justify-center items-end">
                <a href="grave-explorer.php"
                    class="bg-blue-500 text-white font-semibold p-5 rounded-md hover:bg-cyan-300 duration-150"
                    type="button">Explore Map</a>
            </div>
        </div>
    </div>
    <!-- end of grave explorer -->
    <!-- footer -->
    <div class="flex flex-row justify-evenly gap-10 h-1/2 py-20 px-28">
        <div class="flex flex-col gap-5">
            <h1 class="text-lg font-bold text-center">Get In Touch</h1>
            <p class="text-gray-400 mt-3">You may also contact <br> us at our social media.</p>
            <div class="flex justify-evenly gap-1">
                <a href="#">
                    <img src="../assets/icons/fb_blue.png" alt="facebook">
                </a>
                <a href="#">
                    <img src="../assets/icons/instagram_blue.png" alt="instagram">
                </a>
                <a href="#">
                    <img src="../assets/icons/twitter_blue.png" alt="twitter">
                </a>
            </div>
        </div>
        <div class="flex flex-col gap-5">
            <h1 class="text-lg font-bold">Caregraver Info</h1>
            <a class="text-gray-400 font-semibold text-lg" href="">About Us</a>
            <a class="text-gray-400 font-semibold text-lg" href="">Carrier</a>
            <a class="text-gray-400 font-semibold text-lg" href="">We are hiring</a>
            <a class="text-gray-400 font-semibold text-lg" href="">Blog</a>
        </div>
        <div class="flex flex-col gap-5">
            <h1 class="text-lg font-bold">Features</h1>
            <a class="text-gray-400 font-semibold text-lg" href="">Business Marketing</a>
            <a class="text-gray-400 font-semibold text-lg" href="">User Analytic</a>
            <a class="text-gray-400 font-semibold text-lg" href="">Live Chat</a>
            <a class="text-gray-400 font-semibold text-lg" href="">Unlimited Support</a>
        </div>
        <div class="flex flex-col gap-5">
            <h1 class="text-lg font-bold">Resources</h1>
            <a class="text-gray-400 font-semibold text-lg" href="">IOS & Android</a>
            <a class="text-gray-400 font-semibold text-lg" href="">Watch a Demo</a>
            <a class="text-gray-400 font-semibold text-lg" href="">Customers</a>
            <a class="text-gray-400 font-semibold text-lg" href="">API</a>
        </div>
    </div>
    <div class="flex flex-row justify-center items-center gap-2 p-3 bg-gray-100">
        <h1 class="text-center font-semibold text-gray-400">Caregraver</h1>
        <img class="h-3 w-3" src="../assets/icons/copyright.png" alt="copyright">
        <h1 class="text-center font-semibold text-gray-400">All Rights Reserved 2023</h1>
    </div>
    <!-- end of footer -->
    <script src="../javascript/user-menu.js"></script>
    <script src="../javascript/map-homepage.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8BUuSDeRsrMGCh07tzXoW7UhCr-A2ESI&callback=initMap"></script>
    <script src="../javascript/chatbox.js"></script>

    <script src="../javascript/navbar.js"></script>
</body>

</html>