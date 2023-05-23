<?php
    session_start();
    if(!isset($_SESSION["login"]))
        header("location:/CareGraver_IMDB/frontend/src/pages/login.php"); 
    $loggedInUser = $_SESSION["loggedInUser"];
?>
<div id="navbar" class="flex flex-row top-0 absolute justify-between items-center w-full bg-white shadow-2xl p-5 duration-150 z-50">
    <div class="flex justify-start ml-24 items-center gap-24">
        <h1 class="font-bold text-2xl">CareGraver</h1>
        <nav class="flex gap-10 font-semibold" id="topnav">
            <a class="scroll duration-150" href="../pages/homepage.php">Home</a>
            <a class="scroll duration-150" href="../pages/grave-explorer.php">Explorer</a>
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
                <h1 name="username" class=""><?php   
                    echo $loggedInUser["fName"]." ".$loggedInUser["lName"];?>
                </h1>
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
                        <a href="../pages/account.php" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Manage Account</a>
                    </li>                 
                </ul>
                <div class="py-2">
                    <a href="/CareGraver_IMDB/backend/server-side-processing/logout-process.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                </div>
            </div>
            <!-- end of user account -->
        </div>
    </div>
</div>
    <!-- end of navbar -->