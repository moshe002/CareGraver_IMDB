<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/chatbox.css">
    <!-- <script src="imageMapResizer.min.js"></script> -->
    <!-- <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8BUuSDeRsrMGCh07tzXoW7UhCr-A2ESI&callback=initMap&libraries=geometry"></script> -->
    <!-- <script
    src="https://code.jquery.com/jquery-3.6.4.js"
    integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script> -->
    <title>Grave Explorer</title>
    <!-- style for map div -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <style>
        #map {
            height: 100vh;
            width: 100%; 
        }
        /* #floating-panel {
            position: absolute;
            top: 10px;
            left: 25%;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
            text-align: center;
            font-family: 'Roboto','sans-serif';
            line-height: 30px;
            padding-left: 10px;
        } */
    </style>
</head>
<body>
    <?php include '/xampp/htdocs/CareGraver_IMDB/frontend/src/components/navbar.php';
    ?>

    
    <!-- map div -->
    <br>
    <br>
    <br>
    <!-- container of map and sidebar -->
    <div id="container" class="">
        <div id="map" class="border-2 duration-200"></div>
        <!-- legend -->
        <div class="flex flex-col gap-3 absolute bottom-0 left-10 p-3 bg-gray-100 shadow-md rounded-md z-50">
            <div class="flex flex-col gap-3">
                <h1 class="font-semibold">Grave Classification</h1>
                <div class="flex flex-col gap-3">
                    <div class="flex">
                        <img src="..//assets//icons//lawn_lot_box.png" alt="lawn_lot">
                        <h1 class="text-gray-500 font-semibold">&nbsp;&nbsp;Lawn Lot</h1>
                    </div>
                    <div class="flex">
                        <img src="..//assets//icons//garden_niche_box.png" alt="garden_niche">
                        <h1 class="text-gray-500 font-semibold">&nbsp;&nbsp;Garden Niche</h1>
                    </div>
                    <div class="flex">
                        <img src="..//assets//icons//family_estate_box.png" alt="family_estate">
                        <h1 class="text-gray-500 font-semibold">&nbsp;&nbsp;Family Estate</h1>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-3">
                <h1 class="font-semibold">Lot Status</h1>
                <div class="flex flex-col gap-3">
                    <div class="flex">
                        <img src="..//assets//icons//available_box.png" alt="available">
                        <h1 class="text-gray-500 font-semibold">&nbsp;&nbsp;Available</h1>
                    </div>
                    <div class="flex">
                        <img src="..//assets//icons//reserved_box.png" alt="reserved">
                        <h1 class="text-gray-500 font-semibold">&nbsp;&nbsp;Reserved</h1>
                    </div>
                    <div class="flex">
                        <img src="..//assets//icons//occupied_box.png" alt="occupied">
                        <h1 class="text-gray-500 font-semibold">&nbsp;&nbsp;Occupied</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of legend -->
        <!-- sidebar all -->
        <div id="sidebar" class="hidden flex-col justify-center items-center gap-16 xl:gap-y-3 p-5 absolute top-20 right-0 w-0 h-full z-10 duration-200">
            <button 
                class="absolute top-5 right-1"
                onclick="(function(){
                    document.getElementById('sidebar').style.display = 'none';
                    document.getElementById('map').style.width = '100%';
                })();">&#10006;
            </button>    
            <br>
            <br>
            <div class="flex w-3/4 justify-center items-center rounded-md border-2">
                <input class="outline-none p-2 w-full rounded-md focus:outline-blue-400 duration-150" type="search">
                <button class="rounded-md p-2.5 bg-blue-500">
                    <img class="w-5 h-5" src="../assets//icons//search_icon.png" alt="search_icon">
                </button>
            </div>
            <div class="flex p-2 border-b-2 w-full text-sm">
                <h1>Status:</h1>
                &nbsp;
                <h1><b id="status"></b></h1>
            </div>
            <div id="nameT" class="p-2 border-b-2 w-full text-sm" style="display:none">
                <h1>Deceased Name:</h1>
                &nbsp;
                <h1><b id="name"></b></h1>
            </div>
            <div id="dobT" style="display:none" class="p-2 border-b-2 w-full text-sm">
                <h1>Date of Birth:</h1>
                &nbsp;
                <h1><b id="dob"></b></h1>
            </div>
            <div id="dodT" style="display:none" class="p-2 border-b-2 w-full text-sm">
                <h1>Date of Death:</h1>
                &nbsp;
                <h1><b id="dod"></b></h1>
            </div>
            <div class="flex p-2 border-b-2 w-full text-sm">
                <h1>Block Number:</h1>
                &nbsp;
                <h1><b id="blockNo"></b></h1>
            </div>
            <div class="flex p-2 border-b-2 w-full text-sm">
                <h1>Lot Number</h1>
                &nbsp;
                <h1><b id="lotNo"></b></h1>
            </div>
            <div class="hidden justify-center w-full border-2">
                <img class="w-20 h-20" src="../assets//images//tombstone.png" alt="tombstone">
            </div>
            <div class="hidden p-2 border-b-2 w-full">
                <h1>Grave Classification:</h1>
                &nbsp;
                <h1><b id="graveClass"></b></h1>
            </div>
            <div class="hidden p-2 border-b-2 w-full">
                <h1>Price:</h1>
                <h1><b id="price">&nbsp;
                </b></h1>
            </div>
            <br>
            <div class="hidden justify-center w-full">
                <!-- onclick open modal -->
                <button onclick="(function(){
                    document.getElementById('payment_modal').style.display = 'flex';
                })();" class="bg-blue-500 text-white p-2 w-1/2 font-semibold rounded-md">Reserve Now</button>
            </div>
        </div> 
        <!-- end of sidebar occupied -->
        <!-- modal on reserve -->
        <div id="payment_modal" class="hidden justify-center items-center h-screen w-full left-0 right-0 mr-auto ml-auto z-50 fixed inset-0 overflow-y-auto backdrop-filter backdrop-blur-sm">
            <div class="flex flex-col justify-center items-center relative bg-white p-10 h-min w-80 shadow-2xl rounded-md">
                <button 
                class="absolute top-5 right-5"
                onclick="(function(){
                    document.getElementById('payment_modal').style.display = 'none';
                })();">&#10006;</button>
                <br>
                <p class="text-gray-400 text-base font-semibold">To continue your reservation kindly choose your mode of payment:</p>
                <br>
                <button>
                    <img class="w-48 h-20" src="../assets//icons//paypal.png" alt="paypal">
                </button>
                <br>
                <button>
                    <img class="w-48 h-20" src="../assets//icons//gcash.png" alt="gcash">
                </button>
            </div>
        </div>
        <!-- end of reserve modal -->
    </div>
    <!-- from javascript grave id click by user, process here at php get the details from db -->
    <script src="../javascript/user-menu.js"></script>
    <script src="../javascript/googlemap.js"></script>
    
    
    
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8BUuSDeRsrMGCh07tzXoW7UhCr-A2ESI&callback=initMap"></script>
</body>
</html>