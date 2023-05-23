<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/chatbox.css">
    <script src="../javascript/chatbox.js"></script>
    <title>Book Ceremony</title>
</head>
<body>
    <?php include '/xampp/htdocs/CareGraver_IMDB/frontend/src/components/navbar.php' ?>
    <br>
    <br>
    <br>
    <br>
    <div class="p-10">
        <div class="flex flex-row h-screen justify-between p-3 shadow-2xl">
            <div class="flex flex-col items-start justify-center py-5 px-10 w-1/2">
                <h1 class="font-bold text-3xl border-b-4 pb-5 border-b-blue-400">Christian Funeral Prayer</h1>
                <form 
                    id="payment_form"
                    class="flex flex-col relative gap-10 2xl:gap-10 h-full w-11/12 mt-2 2xl:mt-10"><br>
                    <!-- name of deceased -->
                    <div>
                        <div>
                            <label class="font-semibold text-base 2xl:text-2xl" for="name_of_deceased">Name of Deceased</label>
                            <br>
                            <input class="px-2 py-1 focus:border-b-gray-400 duration-150 border-b-2 w-full outline-none" type="text" id="name_of_deceased" required>
                        </div>
                        <div>
                            <div class="flex flex-row justify-between">
                                <div class="border-b-2">
                                    <br>
                                    <label class="font-semibold text-base 2xl:text-2xl" for="dob">Birth Date:&nbsp;</label>
                                    <input class="p-2 focus:border-gray-400 duration-150 outline-none" type="date" id="dob" required>
                                </div>
                                <div class="border-b-2 width border-b-green-400">
                                    <br>
                                    <label class="font-semibold text-base 2xl:text-2xl" for="dod">Death Date:&nbsp;</label>
                                    <input class="p-2 focus:border-gray-400 duration-150 outline-none" type="date" id="dod" required>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <!-- schedule -->
                    <div>
                        <label class="font-semibold text-base 2xl:text-2xl" for="date">Internment Schedule</label>
                        <br>
                        <div class="flex flex-row justify-between">
                            <div class="border-b-2">
                                <label class="font-medium text-base 2xl:text-2xl" for="date_ceremony">Date:&nbsp;</label>
                                <input class="p-2 focus:border-gray-400 duration-150 outline-none" type="date" id="date_ceremony" required>
                            </div>
                            <div class="border-b-2">
                                <label class="font-medium text-base 2xl:text-2xl" for="time_picker">Time:&nbsp;</label>                                
                                <?php include('../components/time-picker.html'); ?>
                            </div>
                        </div>
                    </div> 
                    <!-- graves owned -->
                    <div class="flex flex-col">
                        <label class="font-semibold text-base 2xl:text-2xl" for="graves_owned">Graves Owned</label>
                        <br>
                        <select class="p-2 border-b-2 focus:border-gray-400 duration-150 w-80 outline-none" id="graves_owned" name="graves_owned">
                            <option value="Grave 0001">Grave 0001</option>
                            <option value="Grave 0002">Grave 0002</option>
                        </select>
                    </div>
                    <!-- additional notes -->
                    <div>
                        <label class="font-semibold text-base 2xl:text-2xl" for="additional_notes">Additional Notes</label>
                        <br>
                        <input class="focus:border-b-gray-400 duration-150 px-2 py-1 border-b-2 w-full outline-none" type="text" id="additional_notes" required>
                    </div>
                    <input 
                        class="absolute -bottom-5 2xl:bottom-10 right-0 w-36 bg-blue-400 focus:outline-blue-300 rounded-md p-2 2xl:p-3 text-center text-white text-base 2xl:text-lg hover:cursor-pointer opacity-75 hover:opacity-100 duration-150" 
                        type="submit" 
                        value="Submit"
                    />
                </form>
            </div>
            <div>
                <img class="h-full" src="..//assets//images//book_ceremony_3.png" alt="book_ceremony_3">
            </div>
        </div> 
        <!-- modal payment -->
        <div id="payment_modal" class="hidden justify-center items-center h-screen w-full left-0 right-0 mr-auto ml-auto z-50 fixed inset-0 overflow-y-auto backdrop-filter backdrop-blur-sm">
            <div id="payment_content" class="flex flex-col justify-center items-center relative bg-white mb-10 p-10 h-min w-80 shadow-2xl rounded-md">
                <button 
                class="absolute top-5 right-5"
                onclick="(function(){
                    document.getElementById('payment_modal').style.display = 'none';
                })();">&#10006;</button>
                <br>
                <p class="text-gray-400 text-base font-semibold">To continue your reservation kindly choose your mode of payment:</p>
                <br>
                <button id="gcash-btn" class="flex flex-row justify-between items-center rounded-md w-60 border-2 focus:border-2 focus:border-blue-400">
                    <div class="flex items-center p-0">
                        <img class="w-16 h-16" src="../assets//icons//Gcash_icon.png" alt="gcash">
                        <h1>Gcash</h1>
                    </div>
                    <img id="blue-check-icon1" class="invisible duration-150 mr-2" src="../assets//icons//blue_check_icon.png" alt="blue_check">
                </button>
                <br>
                <button id="paypal-btn" class="flex flex-row justify-between items-center py-1 rounded-md w-60 border-2 focus:border-2 focus:border-blue-400">
                    <div class="flex gap-1 items-center">
                        <img src="../assets//icons//PayPal_icon.png" alt="paypal">
                        <h1>PayPal</h1>
                    </div>
                    <img id="blue-check-icon2" class="invisible duration-150 mr-2" src="../assets//icons//blue_check_icon.png" alt="blue_check">
                </button>
            </div>
        </div>
        <!-- end of payment modal -->
    </div>
    <script src="../javascript/online-payment.js"></script>
    <script src="../javascript/navbar.js"></script>
    <script src="../javascript/user-menu.js"></script>
</body>
</html>