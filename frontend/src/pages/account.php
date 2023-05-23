<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/chatbox.css">
    <script src="../javascript/chatbox.js"></script>
    <title>Manage Account</title>
</head>
<body>
    <?php include '/xampp/htdocs/CareGraver_IMDB/frontend/src/components/navbar.php' ?>
    <!-- main div -->
    <div class="h-screen p-5">
        <br>
        <br>
        <br>
        <br>
        <div class="shadow-2xl px-40 py-5">
            <div class="flex flex-row justify-start items-center gap-5 p-3">
                <img src="../assets//images//admin_profile.png" alt="admin_profile_pic">
                <div>
                    <h1 class="text-2xl font-bold">Cardo Dalisay</h1>
                    <p class="text-base text-gray-400 underline">icecream@gmail.com</p>
                </div>
            </div>
            <form class="">
                <!-- parent div of form -->
                <div class="flex flex-row p-3 gap-10">
                    <div class="flex flex-col w-1/2 gap-3">
                        <div class="flex flex-col relative">
                            <label class="text-lg font-semibold" for="first_name">First Name</label>
                            <input class="mt-1 p-2 outline-none focus:outline-blue-400 rounded-md bg-gray-100" type="text" id="first_name" placeholder="Cardo" disabled>
                            <img onclick="(function(){
                                const first_name = document.getElementById('first_name');
                                first_name.disabled = !first_name.disabled;
                            })();" class="absolute bottom-3 right-5 h-5 w-5" src="../assets//icons//edit_icon.png" alt="edit_icon">                       
                        </div>
                        <div class="flex flex-col relative">
                            <label class="text-lg font-semibold" for="username">Username</label>
                            <input class="mt-1 p-2 outline-none focus:outline-blue-400 rounded-md bg-gray-100" type="text" id="username" placeholder="radioactive" disabled>
                            <img onclick="(function(){
                                const username = document.getElementById('username');
                                username.disabled = !username.disabled;
                            })();" class="absolute bottom-3 right-5 h-5 w-5" src="../assets//icons//edit_icon.png" alt="edit_icon">                       
                        </div>
                        <div class="flex flex-col relative">
                            <label class="text-lg font-semibold" for="password">Password</label>
                            <input class="mt-1 p-2 outline-none focus:outline-blue-400 rounded-md bg-gray-100" type="password" id="password" value="12345" disabled >
                            <img onclick="(function(){
                                const password = document.getElementById('password');
                                let isPassVisible = password.type === 'password';

                                if(isPassVisible) {
                                    password.type = 'text';
                                    password.disabled = !password.disabled;
                                } else { 
                                    password.type = 'password'; 
                                    password.disabled = !password.disabled;
                                }
                            })();" class="absolute bottom-3 right-4 h-5 w-6" src="../assets//icons//show_pass_icon.png" alt="edit_icon">                       
                        </div>
                    </div>
                    <div class="flex flex-col w-1/2 gap-3">
                        <div class="flex flex-col relative">
                            <label class="text-lg font-semibold" for="last_name">Last Name</label>
                            <input class="mt-1 p-2 outline-none focus:outline-blue-400 rounded-md bg-gray-100" type="text" id="last_name" placeholder="Dalisay" disabled>
                            <img onclick="(function(){
                                const last_name = document.getElementById('last_name');
                                last_name.disabled = !last_name.disabled;
                            })();" class="absolute bottom-3 right-5 h-5 w-5" src="../assets//icons//edit_icon.png" alt="edit_icon">                       
                        </div>
                        <div class="flex flex-col relative">
                            <label class="text-lg font-semibold" for="contact_num">Contact Number</label>
                            <input class="mt-1 p-2 outline-none focus:outline-blue-400 rounded-md bg-gray-100" type="number" id="contact_num" placeholder="0900 000 0000" disabled> 
                            <img onclick="(function(){
                                const contact_num = document.getElementById('contact_num');
                                contact_num.disabled = !contact_num.disabled;
                            })();" class="absolute bottom-3 right-5 h-5 w-5" src="../assets//icons//edit_icon.png" alt="edit_icon">                       
                        </div>
                    </div>
                </div>
                <!-- btns div -->
                <div class="flex flex-row justify-end gap-5">
                    <button class="bg-blue-400 py-2 px-5 text-white rounded-md">Discard</button>
                    <input class="bg-blue-400 py-2 px-5 text-white rounded-md cursor-pointer" type="submit" value="Save" >
                </div>
            </form>
        </div>
        <br>
        <br>
        <div class="flex flex-row gap-3 py-10 w-full">
            <div class="flex flex-col items-center shadow-2xl p-10 w-full">
                <div class="bg-blue-100 w-2/3 p-3 shadow-2xl text-center">
                    <h1 class="text-lg font-semibold">1</h1>
                    <h1 class="font-semibold">Total Graves Owned</h1>
                </div>
                <div class="flex flex-col gap-5">
                    <p class="font-semibold mt-5">Information:</p>
                    <div class="flex flex-col gap-5">
                        <div class="flex items-center justify-between gap-5">
                            <label class="font-semibold" for="deceased_name">Deceased Name</label>
                            <input class="text-center bg-gray-100 p-2 rounded-md" type="text" id="deceased_name" value="Juan Luna" disabled>
                        </div>
                        <div class="flex items-center justify-between gap-5">
                            <label class="font-semibold" for="gravesite_type">Gravesite Type</label>
                            <input class="text-center bg-gray-100 p-2 rounded-md" type="text" id="gravesite_type" value="Garden Niche" disabled>
                        </div>
                        <div class="flex items-center justify-between gap-5">
                            <label class="font-semibold" for="block_num">Block Number</label>
                            <input class="text-center bg-gray-100 p-2 rounded-md" type="number" id="block_num" value="2" disabled>
                        </div>
                        <div class="flex items-center justify-between gap-5">
                            <label class="font-semibold" for="lot_num">Lot Number</label>
                            <input class="text-center bg-gray-100 p-2 rounded-md" type="number" id="lot_num" value="59" disabled>
                        </div>
                    </div>
                </div>
                <br><br><br><br><br><br>
            </div>
            <div class="flex flex-col items-center shadow-2xl p-10 w-full">
                <div class="bg-blue-100 w-2/3 p-3 shadow-2xl text-center">
                    <h1 class="text-lg font-semibold">1</h1>
                    <h1 class="font-semibold">Gravesite Reservations</h1>
                </div>
                <div class="flex flex-col gap-5">
                    <p class="font-semibold mt-5">Information:</p>
                    <div class="flex flex-col gap-5">
                        <div class="flex items-center justify-between gap-5">
                            <label class="font-semibold" for="deceased_name">Deceased Name</label>
                            <input class="text-center bg-gray-100 p-2 rounded-md" type="text" id="deceased_name" value="Juan Luna" disabled>
                        </div>
                        <div class="flex items-center justify-between gap-5">
                            <label class="font-semibold" for="gravesite_type">Gravesite Type</label>
                            <input class="text-center bg-gray-100 p-2 rounded-md" type="text" id="gravesite_type" value="Garden Niche" disabled>
                        </div>
                        <div class="flex items-center justify-between gap-5">
                            <label class="font-semibold" for="block_num">Block Number</label>
                            <input class="text-center bg-gray-100 p-2 rounded-md" type="number" id="block_num" value="2" disabled>
                        </div>
                        <div class="flex items-center justify-between gap-5">
                            <label class="font-semibold" for="lot_num">Lot Number</label>
                            <input class="text-center bg-gray-100 p-2 rounded-md" type="number" id="lot_num" value="59" disabled>
                        </div>
                    </div>
                </div>
                <br><br><br><br><br><br>
            </div>
            <div class="flex flex-col items-center shadow-2xl p-10 w-full">
                <div class="bg-blue-100 w-2/3 p-3 shadow-2xl text-center">
                    <h1 class="text-lg font-semibold">1</h1>
                    <h1 class="font-semibold">Burial Ceremony Bookings</h1>
                </div>
                <div class="flex flex-col gap-5">
                    <p class="font-semibold mt-5">Information:</p>
                    <div class="flex flex-col gap-5">
                        <div class="flex items-center justify-between gap-5">
                            <label class="font-semibold" for="deceased_name">Deceased Name</label>
                            <input class="text-center bg-gray-100 p-2 rounded-md" type="text" id="deceased_name" value="Juan Luna" disabled>
                        </div>
                        <div class="flex items-center justify-between gap-5">
                            <label class="font-semibold" for="gravesite_type">Gravesite Type</label>
                            <input class="text-center bg-gray-100 p-2 rounded-md" type="text" id="gravesite_type" value="Garden Niche" disabled>
                        </div>
                        <div class="flex items-center justify-between gap-5">
                            <label class="font-semibold" for="block_num">Block Number</label>
                            <input class="text-center bg-gray-100 p-2 rounded-md" type="number" id="block_num" value="2" disabled>
                        </div>
                        <div class="flex items-center justify-between gap-5">
                            <label class="font-semibold" for="lot_num">Lot Number</label>
                            <input class="text-center bg-gray-100 p-2 rounded-md" type="number" id="lot_num" value="59" disabled>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="font-semibold">Internment Schedule</h1>
                            <div class="flex flex-row justify-between mt-2">
                                <div class="flex border-b-2 items-center">
                                    <label class="text-sm" for="date_user">Date:&nbsp;</label>
                                    <input class="text-sm" type="date" id="date_user" value="2023-02-02" disabled>
                                </div>
                                <div class="flex border-b-2 items-center">
                                    <label class="text-sm" for="time_user">Time:&nbsp;</label>
                                    <input class="text-sm" type="time" id="time_user" value="12:30" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of main div -->
    <script src="../javascript/navbar.js"></script>
    <script src="../javascript/user-menu.js"></script>
</body>
</html>