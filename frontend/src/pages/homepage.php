<?php   
session_start();
if(!isset($_SESSION["login"]))
	header("location:login.php"); 
$loggedInUser=$_SESSION["loggedInUser"];
    
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
    <script src="../javascript/chatbox.js"></script>
    <script src="../javascript/scroll.js"></script>
</head>
<body class="scroll-smooth font-montserrat">
    <?php include '/xampp/htdocs/CareGraver_IMDB/frontend/src/components/chatbox.php' ?>
    <div id="home" class="relative bg-[url('../assets/background-images/Background-image.png')] h-full w-full bg-no-repeat bg-cover bg-center" style="background-attachment: fixed;">
    <!-- navbar -->
        <header>
            <div id="navbar" class="wrapHead flex flex-row fixed justify-between items-center w-full bg-white shadow-2xl p-5 duration-150 opacity-60 z-50">
                <div class="flex justify-start ml-24 items-center gap-24">
                    <h1 class="font-bold text-2xl">CareGraver</h1>
                    <nav class="flex gap-10 font-semibold" id="topnav">
                        <a class="scroll duration-150" href="#home">Home</a>
                        <a class="scroll duration-150" href="#service">Reserve</a>
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
                            type="button" 
                            onclick="onOpen()"> 
                            <h1>Hello,&nbsp;</h1>
                            <h1 name="username" class="">Cardo Dalisay</h1>
                        </button>
                        <!-- user account --> 
                        <div id="user-menu" class="z-10 hidden flex-col absolute bg-white divide-y divide-gray-100 rounded-md shadow w-50 dark:bg-gray-700 w-max">
                            <!-- Dropdown menu -->
                            <div class="px-4 py-3 text-gray-900 dark:text-white">
                                <h1 class="text-lg">
                                    <?php   
                                        echo $loggedInUser["fName"]." ".$loggedInUser["lName"];
                                    ?>
                                </h1>
                                <h1 class="font-medium truncate text-sm ">
                                    <?php 
                                        echo $loggedInUser["userEmail"];
                                    ?>
                                </h1 >
                            </div>
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Manage Account</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Orders</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Chats</a>
                                </li>                  
                            </ul>
                            <div class="py-2">
                                <a href="logoutprocess.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
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
            <a 
                class="bg-blue-500 p-5 rounded-md text-white font-semibold hover:bg-cyan-300 duration-150"
                type="button"
                href="#service">Start your care</a>
        </div>
    </div>
    <!-- services section -->
    <div class="h-full bg-gray-100" id="service">
        <div class="flex flex-col gap-6 justify-start p-28">
            <h1 class="text-blue-500 font-bold text-lg">Our Products & Services</h1>
            <h1 class="font-bold text-5xl">Lorem ipsum dolor, sit amet.</h1>
            <p class="text-gray-400 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Facilis iste dicta assumenda natus nostrum minima minus</p>
            <!-- services ehe uwu  -->
            <div class="flex flex-col gap-5">
                <div class="flex flex-row shadow-lg">
                    <img src="../assets/images/products.png" alt="products_1">
                    <div class="flex flex-col justify-start gap-5 p-10">
                        <h1 class="text-3xl font-bold border-b-2 pb-3 border-b-blue-400">Products</h1>
                        <p class="text-sm text-gray-400">The gradual accumulation of  information about atomic and small-scale behaviour. The gradual accumulation of information about atomic and small-scale behaviour...</p>
                        <button onClick="location.href='products.php'" type="button" class="bg-blue-500 text-white font-bold w-1/2 px-1 py-2 rounded-md hover:bg-cyan-300 duration-150">Know More</button>
                    </div>
                </div>
                <div class="flex flex-row shadow-lg">
                    <img src="../assets/images/services_1.png" alt="service_2">
                    <div class="flex flex-col justify-start gap-5 p-10">
                        <h1 class="text-3xl font-bold border-b-2 pb-3 border-b-blue-400">Services</h1>
                        <p class="text-sm text-gray-400">The gradual accumulation of  information about atomic and small-scale behaviour. The gradual accumulation of information about atomic and small-scale behaviour...</p>
                        <button onClick="location.href='services.php'" type="button" class="bg-blue-500 text-white font-bold w-1/2 px-1 py-2 rounded-md hover:bg-cyan-300 duration-150">Know More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end of services section  -->    
    <!-- grave explorer -->
    <div class="h-full" id="explorer">
        <div class="flex flex-col gap-6 justify-start p-28">
            <h1 class="text-blue-500 font-bold text-lg">Take a tour on our cemetery</h1>
            <h1 class="font-bold text-5xl">Cemetery Explorer</h1>
            <p class="text-gray-400 text-sm">The Cemetery Explorer is a powerful tool that displays all the available and occupied grave sites.
            <br>Click on a grave site to proceed to the grave site application form.</p>
            <div id="map" style="height: 400px; width: 100%; border: 1px solid black;"></div>
            <!-- slider -->
            <div class="flex justify-center items-end">
                <a href="grave-explorer.php" class="bg-blue-500 text-white font-semibold p-5 rounded-md hover:bg-cyan-300 duration-150" type="button">Explore Map</a>
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
    <script src="../javascript/navbar.js"></script>
    <script src="../javascript/user-menu.js"></script>
    <script src="../javascript/map-homepage.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8BUuSDeRsrMGCh07tzXoW7UhCr-A2ESI&callback=initMap"></script>
</body>
</html>