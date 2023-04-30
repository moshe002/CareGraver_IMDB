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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Home</title>
    <link rel="stylesheet" href="../css/chatbox.css">
    <script src="../javascript/chatbox.js"></script>
</head>
<body class="scroll-smooth font-montserrat">
    <!-- chatbox -->
    <div id="body"> 
        <div id="chat-circle" class="btn btn-raised" >
            <div id="chat-overlay"></div>
            <i id = "icon" class='far fa-comments' style='font-size:25px'></i>
        </div>
      
        <div class="chat-box" >
            <div class="chat-box-header">
                <span class="chat-box-toggle"><i class="material-icons">&times;</i></span>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay"></div>
                <div class="chat-logs"></div><!--chat-log -->
            </div>
            <div class="chat-input">      
                <form>
                    <input type="text" id="chat-input" placeholder="Send a message..."/>
                    <button type="submit" class="chat-submit" id="chat-submit"><i class="material-icons">send</i></button>
                </form>      
            </div>
        </div>	  
    </div>	
	<!-- end of chatbox -->
    <div id="home" class=" wrapper bg-[url('../assets/background-images/Background-image.png')] h-full w-full bg-no-repeat bg-cover bg-center">
        <!-- navbar -->
        <div id="navbar" class="flex flex-row fixed justify-between items-center w-full bg-gray-300 p-5 opacity-80 z-10">
            <div class="flex justify-start ml-24 items-center gap-36">
                <h1 class="font-bold text-2xl">CareGraver</h1>
                <div class="flex gap-10 font-semibold" id="topnav">
                    <a class="duration-150" href="#home">Home</a>
                    <a class="duration-150" href="#service">Services</a>
                    <a class="duration-150" href="#explorer">Explorer</a>
                    <a class="duration-150" href="#contact">Contact</a>
                </div>
            </div>
            <!-- two icons div? -->
            <div class="flex gap-10 items-center justify-center mr-24">
                <div class="relative">
                    <button id="dropdownInformationButton" 
                        data-dropdown-toggle="dropdownInformation" 
                        class="text-white hover:bg-slate-50 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:hover:bg-white dark:focus:ring-white duration-150" 
                        type="button" 
                        onclick="onOpen()"> 
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="#000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        <img class="w-5 h-5" src="../assets/icons/user icon.png" alt="user_icon">
                    </button>
                    <!--<div id="user-menu" class="hidden flex-col absolute bg-white rounded-md p-5 w-max z-10">
                        <h1 class="font-bold text-2xl">Jolli Bee</h1>
                        <a class="text-lg" href="">Manage Account</a>
                        <a class="text-lg" href="">Orders</a>
                        <a class="text-lg" href="">Chats</a>
                        <br>
                        <br>
                        <a class="text-lg" href="">Switch Account</a>   
                        <a class="text-lg font-semibold hover:text-red-500" href="login.html">Log Out Account</a>
                    </div>  -->  
                    <div id="user-menu" class="z-10 hidden flex-col absolute bg-white divide-y divide-gray-100 rounded-lg shadow w-50 dark:bg-gray-700">
                        <!-- Dropdown menu -->
                        <div class="px-4 py-3 text-gray-900 dark:text-white">
                            <h1 class="text-lg">Jolli Bee</h1>
                            <h1 class="font-medium truncate text-sm ">jollibee@bidaangsaya.com</h1 >
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
                </div>
                <a href="">
                    <img class="w-5 h-5" src="../assets/icons/search icon.png" alt="search_icon">
                </a>
            </div>
        </div>
        <!-- end of navbar -->
        <!-- content div -->
        <div class="h-screen p-28 bg-gradient-to-r from-white to-transparent">
            <h1 class="text-5xl mt-5 font-bold leading-snug">Love<br>Transcends<br>Death</h1>
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
            <h1 class="text-blue-500 font-bold text-lg">Our Services</h1>
            <h1 class="font-bold text-5xl">Lorem ipsum dolor, sit amet.</h1>
            <p class="text-gray-400 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Facilis iste dicta assumenda natus nostrum minima minus</p>
            <!-- services ehe uwu  -->
            <div class="flex flex-col gap-5">
                <div class="flex flex-row shadow-lg">
                    <img src="../assets/images/services_1.png" alt="service_1">
                    <div class="flex flex-col justify-start gap-5 p-10">
                        <h1 class="text-3xl font-bold border-b-2 pb-3 border-b-blue-400">Cemetery Maintenance</h1>
                        <p class="text-sm text-gray-400">The gradual accumulation of  information about atomic and small-scale behaviour. The gradual accumulation of information about atomic and small-scale behaviour...</p>
                        <button type="button" class="bg-blue-500 text-white font-bold w-1/2 px-1 py-2 rounded-md hover:bg-cyan-300 duration-150">Know More</button>
                    </div>
                </div>
                <div class="flex flex-row shadow-lg">
                    <img src="../assets/images/services_2.png" alt="service_2">
                    <div class="flex flex-col justify-start gap-5 p-10">
                        <h1 class="text-3xl font-bold border-b-2 pb-3 border-b-blue-400">Grave Openings</h1>
                        <p class="text-sm text-gray-400">The gradual accumulation of  information about atomic and small-scale behaviour. The gradual accumulation of information about atomic and small-scale behaviour...</p>
                        <button type="button" class="bg-blue-500 text-white font-bold w-1/2 px-1 py-2 rounded-md hover:bg-cyan-300 duration-150">Know More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end of services section  -->
    <!-- services reviews (what our clients say) -->
    <div class="h-full">
        <div class="flex flex-col gap-6 justify-start p-28">
            <h1 class="text-blue-500 font-bold text-lg">What Our Clients Say</h1>
            <h1 class="font-bold text-5xl">Lorem ipsum dolor, sit amet.</h1>
            <p class="text-gray-400 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Facilis iste dicta assumenda natus nostrum minima minus</p>
            <!-- slider -->
            <div id="slider" class="flex flex-row justify-between items-center p-5 mt-5">
                <!-- left button -->
                <button disabled onclick="sliderHomePrev()" id="left-btn" class="w-20 h-20 mr-10 opacity-30">
                    <img src="../assets/icons/left-arrow.png" alt="left_arrow">
                </button>
                <!-- slider content -->
                <div id="slider-content">
                    <!-- first group -->
                    <div id="first-group" class="flex flex-row gap-10 justify-center items-center ease-in-out duration-150">
                        <div class="flex flex-col justify-center items-center gap-5 p-10 shadow-2xl rounded-md">
                            <div class="flex flex-row gap-1 justify-center items-center">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/blank_star.png" alt="star">
                                <img src="../assets/icons/blank_star.png" alt="star">
                            </div>
                            <p class="w-1/2 text-sm text-center text-gray-400">
                                Sed ut perspiciatis unde omnis 
                                istenatus error sitvoluptatem
                                laudantium, totam 
                            </p>
                            <div class="flex gap-5 justify-center items-center">
                                <img src="../assets/images/pic-1.png" alt="pic_1">
                                <h1 class="font-bold text-blue-500 text-lg">Nina Ocampo</h1>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-5 p-10 shadow-2xl rounded-md">
                            <div class="flex flex-row gap-1 justify-center items-center">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                            </div>
                            <p class="w-1/2 text-sm text-center text-gray-400">
                                Sed ut perspiciatis unde omnis 
                                istenatus error sitvoluptatem 
                                laudantium, totam 
                            </p>
                            <div class="flex gap-5 justify-center items-center">
                                <img src="../assets/images/pic-2.png" alt="pic_1">
                                <h1 class="font-bold text-blue-500 text-lg">Ana Simson</h1>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-5 p-10 shadow-2xl rounded-md">
                            <div class="flex flex-row gap-1 justify-center items-center">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/blank_star.png" alt="star">
                            </div>
                            <p class="w-1/2 text-sm text-center text-gray-400">
                                Sed ut perspiciatis unde omnis 
                                istenatus error sitvoluptatem
                                laudantium, totam 
                            </p>
                            <div class="flex gap-5 justify-center items-center">
                                <img src="../assets/images/pic-3.png" alt="pic_1">
                                <h1 class="font-bold text-blue-500 text-lg">John Cruz</h1>
                            </div>
                        </div>
                    </div>
                    <!-- second group -->
                    <div id="second-group" class="hidden flex-row gap-10 justify-center items-center ease-in-out duration-150">
                        <div class="flex flex-col justify-center items-center gap-5 p-10 shadow-2xl rounded-md">
                            <div class="flex flex-row gap-1 justify-center items-center">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/blank_star.png" alt="star">
                                <img src="../assets/icons/blank_star.png" alt="star">
                            </div>
                            <p class="w-1/2 text-sm text-center text-gray-400">
                                Sed ut perspiciatis unde omnis 
                                istenatus error sitvoluptatem
                                laudantium, totam 
                            </p>
                            <div class="flex gap-5 justify-center items-center">
                                <img src="../assets/images/pic-1.png" alt="pic_1">
                                <h1 class="font-bold text-blue-500 text-lg">Abina Villar</h1>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-5 p-10 shadow-2xl rounded-md">
                            <div class="flex flex-row gap-1 justify-center items-center">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                            </div>
                            <p class="w-1/2 text-sm text-center text-gray-400">
                                Sed ut perspiciatis unde omnis 
                                istenatus error sitvoluptatem 
                                laudantium, totam 
                            </p>
                            <div class="flex gap-5 justify-center items-center">
                                <img src="../assets/images/pic-2.png" alt="pic_1">
                                <h1 class="font-bold text-blue-500 text-lg">Tina Mangubat</h1>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-5 p-10 shadow-2xl rounded-md">
                            <div class="flex flex-row gap-1 justify-center items-center">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/blank_star.png" alt="star">
                            </div>
                            <p class="w-1/2 text-sm text-center text-gray-400">
                                Sed ut perspiciatis unde omnis 
                                istenatus error sitvoluptatem
                                laudantium, totam 
                            </p>
                            <div class="flex gap-5 justify-center items-center">
                                <img src="../assets/images/pic-3.png" alt="pic_1">
                                <h1 class="font-bold text-blue-500 text-lg">Alejandro Dupa</h1>
                            </div>
                        </div>
                    </div>
                    <!-- third group -->
                    <div id="third-group" class="hidden flex-row gap-10 justify-center items-center ease-in-out duration-150">
                        <div class="flex flex-col justify-center items-center gap-5 p-10 shadow-2xl rounded-md">
                            <div class="flex flex-row gap-1 justify-center items-center">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/blank_star.png" alt="star">
                                <img src="../assets/icons/blank_star.png" alt="star">
                            </div>
                            <p class="w-1/2 text-sm text-center text-gray-400">
                                Sed ut perspiciatis unde omnis 
                                istenatus error sitvoluptatem
                                laudantium, totam 
                            </p>
                            <div class="flex gap-5 justify-center items-center">
                                <img src="../assets/images/pic-1.png" alt="pic_1">
                                <h1 class="font-bold text-blue-500 text-lg">Atina Albona</h1>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-5 p-10 shadow-2xl rounded-md">
                            <div class="flex flex-row gap-1 justify-center items-center">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                            </div>
                            <p class="w-1/2 text-sm text-center text-gray-400">
                                Sed ut perspiciatis unde omnis 
                                istenatus error sitvoluptatem 
                                laudantium, totam 
                            </p>
                            <div class="flex gap-5 justify-center items-center">
                                <img src="../assets/images/pic-2.png" alt="pic_1">
                                <h1 class="font-bold text-blue-500 text-lg">Ana Simson</h1>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-5 p-10 shadow-2xl rounded-md">
                            <div class="flex flex-row gap-1 justify-center items-center">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/full_star.png" alt="star">
                                <img src="../assets/icons/blank_star.png" alt="star">
                            </div>
                            <p class="w-1/2 text-sm text-center text-gray-400">
                                Sed ut perspiciatis unde omnis 
                                istenatus error sitvoluptatem
                                laudantium, totam 
                            </p>
                            <div class="flex gap-5 justify-center items-center">
                                <img src="../assets/images/pic-3.png" alt="pic_1">
                                <h1 class="font-bold text-blue-500 text-lg">Tinoy Kubasa</h1>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center gap-5 mt-10">
                        <img id="ellipse-1-home-review" src="../assets/icons/ellipse_full.png" alt="ellipse">
                        <img id="ellipse-2-home-review" src="../assets/icons/ellipse_half.png" alt="ellipse">
                        <img id="ellipse-3-home-review" src="../assets/icons/ellipse_half.png" alt="ellipse">
                    </div>
                </div>
                <!-- right button -->
                <button onclick="sliderHomeNext()" id="right-btn" class="w-20 h-20 ml-5">
                    <img src="../assets/icons/right-arrow.png" alt="right_arrow">
                </button>
            </div>
        </div>
    </div>
    <!-- end of services reviews -->
    <!-- services staff/employees -->
    <div class="h-full bg-gray-100">
        <div class="flex flex-col gap-6 justify-start p-28">
            <h1 class="text-blue-500 font-bold text-lg">Meet Our Caregraver Family</h1>
            <h1 class="font-bold text-5xl">Lorem ipsum dolor, sit amet.</h1>
            <p class="text-gray-400 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Facilis iste dicta assumenda natus nostrum minima minus</p>
            <!-- slider container (employees) -->
            <div class="flex flex-row justify-between items-center p-5 mt-5">
                <!-- left button -->
                <button disabled onclick="prevEmpHome()" id="left-emp-btn" class="w-20 h-20 mr-10 opacity-30">
                    <img src="../assets/icons/left-arrow.png" alt="left_arrow">
                </button>
                <!-- slider content -->
                <div id="slider-content">
                    <!-- first employees -->
                    <div id="first-emp" class="flex flex-row gap-10 justify-center items-center">
                        <div class="flex flex-col gap-3 justify-center items-center p-10 shadow-2xl">
                            <img class="rounded-full" src="../assets/images/groundskeeper_1.png" alt="groundskeeper">
                            <h1 class="text-blue-500 font-bold text-lg">Groundskeeper</h1>
                            <h1 class="font-bold text-lg">Rodney Pamug</h1>
                            <p class="text-center text-gray-400">Hard-working member since: <b>2001</b></p>
                        </div>
                        <div class="flex flex-col gap-3 justify-center items-center p-10 shadow-2xl">
                            <img class="rounded-full" src="../assets/images/Gravedigger.png" alt="gravedigger">
                            <h1 class="text-blue-500 font-bold text-lg">Gravedigger</h1>
                            <h1 class="font-bold text-lg">Juan Cruz</h1>
                            <p class="text-center text-gray-400">Hard-working member since: <b>2006</b></p>
                        </div>
                        <div class="flex flex-col gap-3 justify-center items-center p-10 shadow-2xl">
                            <img class="rounded-full" src="../assets/images/admin_1.png" alt="administrator">
                            <h1 class="text-blue-500 font-bold text-lg">Administrator</h1>
                            <h1 class="font-bold text-lg">Pedro Aluni</h1>
                            <p class="text-center text-gray-400">Hard-working member since: <b>2002</b></p>
                        </div>
                        <div class="flex flex-col gap-3 justify-center items-center p-10 shadow-2xl">
                            <img class="rounded-full" src="../assets/images/caretaker_woman.png" alt="caretaker">
                            <h1 class="text-blue-500 font-bold text-lg">Caretaker</h1>
                            <h1 class="font-bold text-lg">Purificacion Burgos</h1>
                            <p class="text-center text-gray-400">Hard-working member since: <b>2002</b></p>
                        </div>
                    </div>
                    <!-- second employees -->
                    <div id="second-emp" class="hidden flex-row gap-10 justify-center items-center">
                        <div class="flex flex-col gap-3 justify-center items-center p-10 shadow-2xl">
                            <img class="rounded-full" src="../assets/images/groundskeeper_1.png" alt="groundskeeper">
                            <h1 class="text-blue-500 font-bold text-lg">Groundskeeper</h1>
                            <h1 class="font-bold text-lg">Monic Aloe Vera</h1>
                            <p class="text-center text-gray-400">Hard-working member since: <b>2001</b></p>
                        </div>
                        <div class="flex flex-col gap-3 justify-center items-center p-10 shadow-2xl">
                            <img class="rounded-full" src="../assets/images/Gravedigger.png" alt="gravedigger">
                            <h1 class="text-blue-500 font-bold text-lg">Gravedigger</h1>
                            <h1 class="font-bold text-lg">Juan Cruz</h1>
                            <p class="text-center text-gray-400">Hard-working member since: <b>2006</b></p>
                        </div>
                        <div class="flex flex-col gap-3 justify-center items-center p-10 shadow-2xl">
                            <img class="rounded-full" src="../assets/images/admin_1.png" alt="administrator">
                            <h1 class="text-blue-500 font-bold text-lg">Administrator</h1>
                            <h1 class="font-bold text-lg">Pedro Aluni</h1>
                            <p class="text-center text-gray-400">Hard-working member since: <b>2002</b></p>
                        </div>
                        <div class="flex flex-col gap-3 justify-center items-center p-10 shadow-2xl">
                            <img class="rounded-full" src="../assets/images/caretaker_man.png" alt="caretaker">
                            <h1 class="text-blue-500 font-bold text-lg">Caretaker</h1>
                            <h1 class="font-bold text-lg">Walt Disney</h1>
                            <p class="text-center text-gray-400">Hard-working member since: <b>2002</b></p>
                        </div>
                    </div>
                    <!-- third employees -->
                    <div id="third-emp" class="hidden flex-row gap-10 justify-center items-center">
                        <div class="flex flex-col gap-3 justify-center items-center p-10 shadow-2xl">
                            <img class="rounded-full" src="../assets/images/groundskeeper_1.png" alt="groundskeeper">
                            <h1 class="text-blue-500 font-bold text-lg">Groundskeeper</h1>
                            <h1 class="font-bold text-lg">Abcd Efghi</h1>
                            <p class="text-center text-gray-400">Hard-working member since: <b>2001</b></p>
                        </div>
                        <div class="flex flex-col gap-3 justify-center items-center p-10 shadow-2xl">
                            <img class="rounded-full" src="../assets/images/Gravedigger.png" alt="gravedigger">
                            <h1 class="text-blue-500 font-bold text-lg">Gravedigger</h1>
                            <h1 class="font-bold text-lg">Juan Cruz</h1>
                            <p class="text-center text-gray-400">Hard-working member since: <b>2006</b></p>
                        </div>
                        <div class="flex flex-col gap-3 justify-center items-center p-10 shadow-2xl">
                            <img class="rounded-full" src="../assets/images/admin_1.png" alt="administrator">
                            <h1 class="text-blue-500 font-bold text-lg">Administrator</h1>
                            <h1 class="font-bold text-lg">Pedro Aluni</h1>
                            <p class="text-center text-gray-400">Hard-working member since: <b>2002</b></p>
                        </div>
                        <div class="flex flex-col gap-3 justify-center items-center p-10 shadow-2xl">
                            <img class="rounded-full" src="../assets/images/caretaker_man.png" alt="caretaker">
                            <h1 class="text-blue-500 font-bold text-lg">Caretaker</h1>
                            <h1 class="font-bold text-lg">Cardo Dalisay</h1>
                            <p class="text-center text-gray-400">Hard-working member since: <b>2002</b></p>
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center gap-5 mt-10">
                        <img id="emp-ellipse-1-home" src="../assets/icons/ellipse_full.png" alt="ellipse">
                        <img id="emp-ellipse-2-home" src="../assets/icons/ellipse_half.png" alt="ellipse">
                        <img id="emp-ellipse-3-home" src="../assets/icons/ellipse_half.png" alt="ellipse">
                    </div>
                </div>
                <!-- right button -->
                <button onclick="nextEmpHome()" id="right-emp-btn" class="w-20 h-20 ml-5">
                    <img src="../assets/icons/right-arrow.png" alt="right_arrow">
                </button>
            </div>
        </div>
    </div>
    <!-- end of services staff -->
    <!-- grave explorer -->
    <div class="h-full" id="explorer">
        <div class="flex flex-col gap-6 justify-start p-28">
            <h1 class="text-blue-500 font-bold text-lg">Take a tour on our cemetery</h1>
            <h1 class="font-bold text-5xl">Cemetery Explorer</h1>
            <p class="text-gray-400 text-sm">The Cemetery Explorer is a powerful tool that displays all the available and occupied grave sites.
            <br>Click on a grave site to proceed to the grave site application form.</p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <!-- slider -->
            <div class="flex justify-center items-end">
                <a href="grave-explorer.html" class="bg-blue-500 text-white font-semibold p-5 rounded-md hover:bg-cyan-300 duration-150" type="button">Explore Map</a>
            </div>
        </div>
    </div>
    <!-- end of grave explorer -->
    <!-- contact us section -->
    <div class="h-full bg-gray-100" id="contact">
        <div class="flex flex-col gap-6 justify-start p-28">
            <h1 class="text-blue-500 font-bold text-lg">Contact Us</h1>
            <h1 class="font-bold text-5xl">We're here for you</h1>
            <p class="text-gray-400 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Facilis iste dicta assumenda natus nostrum minima minus</p>
            <!-- contact us form -->
            <div class="flex flex-row justify-between bg-white p-10 shadow-lg">
                <!-- div 1 -->
                <div class="flex flex-col p-5">
                    <h1 class="font-bold text-3xl border-b-2 border-b-blue-400 pb-5 w-1/2">How to Find Us</h1>
                    <p class="text-gray-400 mt-5">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br> 
                        Inventore nostrum aliquam quidem amet saepe possimus, eligendi, <br>
                        quaerat sequi sit, consequuntur debitis quis quae perferendis ad? <br>
                        Quidem veniam quam aliquam dolorum?
                    </p>
                    <h1 class="font-bold text-3xl mt-10 border-b-2 border-b-blue-400 pb-5 w-1/2">Our Location</h1>
                    <p class="text-gray-400 mt-5">
                        Sanciangko St, Cebu City, 6000 Cebu <br>
                        Telephone: + 1 23 456 789 0 <br>
                        Email: caregraver@uc.org    
                    </p>
                </div>
                <!-- div 2 -->
                <div class="p-5 w-1/2">
                    <h1 class="font-bold text-3xl border-b-2 border-b-blue-400 pb-5 w-1/2">Get in Touch</h1>
                    <form class="flex flex-col gap-3 mt-5 relative" action="">
                        <label class="font-semibold" for="name">Name</label>
                        <input class="border-b-2 pr-3 pt-3 outline-none" type="text" id="name" required />
                        <label class="font-semibold" for="emailOrPhoneNumber">Email/Phone number</label>
                        <input class="border-b-2 pr-3 pt-3 outline-none" type="text" id="emailOrPhoneNumber" required>
                        <label class="font-semibold" for="help">What can we help you with?</label>
                        <input class="border-b-2 pr-3 pt-3 outline-none" id="help" />
                        <input type="submit" class="absolute top-64 right-1 bg-blue-500 text-white px-5 py-3 rounded-md w-1/4 mt-3 hover:cursor-pointer hover:bg-cyan-300 duration-150">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end of contact us section -->
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
    <script src="../javascript/slider-review.js"></script>
    <script src="../javascript/navbar.js"></script>
    <script src="../javascript/user-menu.js"></script>
</body>
</html>