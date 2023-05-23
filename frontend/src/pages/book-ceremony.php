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
                <h1 class="font-bold text-3xl border-b-4 border-b-blue-400">Christian Funeral Prayer</h1>
                <form 
                    id="payment_form"
                    class="flex flex-col justify-evenly relative 2xl:gap-10 h-full w-11/12 2xl:mt-10"><br>
                    <!-- name of deceased -->
                    <div class="flex flex-col">
                        <label class="font-semibold text-base 2xl:text-2xl" for="name_of_deceased">Name of Deceased</label>
                        <input class="px-1 py-1 focus:border-b-gray-400 duration-150 border-b-2 w-full outline-none" type="text" id="name_of_deceased" >
                    </div>
                    <!-- birth date and death date -->
                    <div class="flex flex-row gap-10">
                        <div class="flex flex-col justify-start w-1/2">
                            <label class="font-semibold text-base 2xl:text-2xl" for="dob">Birth Date:&nbsp;</label>
                            <input class="border-b-2 focus:border-gray-400 duration-150 outline-none" type="date" id="dob">
                        </div>
                        <div class="flex flex-col justify-end w-1/2">
                            <label class="font-semibold text-base 2xl:text-2xl" for="dod">Death Date:&nbsp;</label>
                            <input class="border-b-2 focus:border-gray-400 duration-150 outline-none" type="date" id="dod">
                        </div>   
                    </div>
                    <!-- internment sched and time -->
                    <div class="">
                        <label class="font-semibold text-base 2xl:text-2xl" for="date">Internment Schedule</label>
                        <br>
                        <div class="flex flex-row gap-10">
                            <div class="flex items-center border-b-2 w-1/2">
                                <label class="font-medium text-xs 2xl:text-2xl" for="date_ceremony">Date:&nbsp;</label>
                                <input class="py-2 w-full focus:border-gray-400 duration-150 outline-none" type="date" id="date_ceremony">
                            </div>
                            <div class="flex items-center border-b-2 w-1/2">
                                <label class="font-medium text-xs 2xl:text-2xl" for="time_picker">Time:&nbsp;</label>                                
                                <input class="py-2 w-full focus:border-gray-400 duration-150 outline-none" id="time_picker" type="time">
                            </div>
                        </div>
                    </div>
                    <!-- graves owned and notes -->
                    <div class="flex flex-row gap-10">
                        <div class="flex flex-col w-1/2">
                            <label class="font-semibold text-base 2xl:text-2xl" for="graves_owned">Graves Owned</label>
                            <select class="py-2 border-b-2 focus:border-gray-400 duration-150 w-full outline-none" id="graves_owned" name="graves_owned">
                                <option value="Grave 0001">Grave 0001</option>
                                <option value="Grave 0002">Grave 0002</option>
                            </select>
                        </div>
                        <!-- additional notes -->
                        <div class="flex flex-col w-1/2">
                            <label class="font-semibold text-base 2xl:text-2xl" for="additional_notes">Additional Notes</label>
                            <input class="mt-3.5 focus:border-b-gray-400 duration-150 border-b-2 w-full outline-none" 
                                type="text" 
                                id="additional_notes"
                                placeholder="Type here..." 
                            >
                        </div>
                    </div>
                    <!-- bottom buttons -->
                    <div class="flex justify-end gap-5">
                        <button class="w-36 bg-blue-400 focus:outline-blue-300 rounded-md p-2 2xl:p-3 text-center text-white text-base 2xl:text-lg hover:cursor-pointer opacity-75 hover:opacity-100 duration-150"
                        type="button" >
                            Clear
                        </button>
                        <!-- submit button -->
                        <input 
                            class="w-36 bg-blue-400 focus:outline-blue-300 rounded-md p-2 2xl:p-3 text-center text-white text-base 2xl:text-lg hover:cursor-pointer opacity-75 hover:opacity-100 duration-150" 
                            type="submit" 
                            value="Submit"
                        />
                    </div>
                </form>
            </div>
            <div>
                <img class="h-full" src="..//assets//images//book_ceremony_3.png" alt="book_ceremony_3">
            </div>
        </div> 
        <!-- modal payment -->
        <div id="payment_modal" class="hidden justify-center items-center h-screen w-full left-0 right-0 mr-auto ml-auto z-50 fixed inset-0 overflow-y-auto backdrop-filter backdrop-blur-sm">
            <form id="payment_content" class="flex flex-col justify-start items-start gap-5 relative bg-white mb-10 p-10 h-min w-1/2 shadow-2xl rounded-md">
                <button 
                class="absolute top-5 right-5"
                onclick="(function(){
                    document.getElementById('payment_modal').style.display = 'none';
                })();">&#10006;</button>
                <br>
                <h1 class="text-2xl font-bold">Christian Funeral Prayer:</h1>
                <div class="flex flex-col gap-3 w-full">
                    <label for="username_payment">Username:
                        <input class="outline-none border-b-2" id="username_payment" type="text" placeholder="NinimonicaUser123">
                    </label>
                    <label class="flex items-center gap-5" for="account_bal">Account Balance
                        <h1 class="p-2 bg-green-400 text-white text-center rounded-md">Php 100,000</h1>
                    </label>
                </div>
                <h1 class="text-lg font-bold">Are you sure you want to book a burial Ceremony?</h1>
                <div class="flex flex-col gap-3 w-full">
                    <div class="flex justify-between gap-3">
                        <div class="flex items-center w-full">
                            <label class="w-1/3" for="graves_owned">Graves owned</label>
                            <input class="outline-none w-2/4 text-base" id="graves_owned" type="number" placeholder="12345678">
                        </div>
                        <div class="flex justify-end items-center w-1/2">
                            <label class="w-full" for="block_num">Block Number</label>
                            <select class="outline-none w-1/4" name="block_num" id="block_num">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-between gap-3 h-10">
                        <div class="flex items-center w-full">
                            <label class="w-1/3" for="ceremony_type">Ceremony Type</label>
                            <input class="outline-none w-2/4 text-base" id="ceremony_type" type="text" placeholder="Christian Funeral Prayer">
                        </div>
                        <div class="flex justify-end items-center w-1/2">
                            <label class="w-full" for="block_num">Lot Number</label>
                            <select class="outline-none w-1/4" name="block_num" id="block_num">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="flex gap-10 items-center">
                    <h1 class="text-lg">Pay</h1>
                    <h1 class="p-2 bg-red-400 rounded-md text-white">Php 100,000</h1>
                </div>
                <div class="flex justify-end items-end w-full">
                    <input type="submit" class="text-white bg-blue-400 rounded-md py-2 px-4 cursor-pointer" >
                </div>
            </form>
        </div>
        <!-- end of payment modal -->
    </div>
    <script src="../javascript/burial-payment.js"></script>
    <script src="../javascript/navbar.js"></script>
    <script src="../javascript/user-menu.js"></script>
</body>
</html>