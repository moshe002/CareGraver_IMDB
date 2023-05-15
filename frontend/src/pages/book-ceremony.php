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
                <h1 class="font-bold text-3xl border-b-4 pb-5 border-b-blue-400">Book a Burial Ceremony</h1>
                <form class="flex flex-col relative gap-10 2xl:gap-10 h-full w-11/12 mt-2 2xl:mt-10" action="">
                    <!-- name of deceased -->
                    <div>
                        <label class="font-semibold text-base 2xl:text-2xl" for="name_of_deceased">Name of Deceased</label>
                        <br>
                        <input class="px-2 py-1 focus:border-b-gray-400 duration-150 border-b-2 w-full outline-none" type="text" id="name_of_deceased" required>
                    </div>
                    <!-- schedule -->
                    <div>
                        <label class="font-semibold text-base 2xl:text-2xl" for="date">Internment Schedule</label>
                        <br>
                        <div class="flex flex-row justify-between">
                            <div class="">
                                <label for="date_ceremony">Date:&nbsp;</label>
                                <input class="p-2 border-b-2 focus:border-gray-400 duration-150 outline-none" type="date" id="date_ceremony" required>
                            </div>
                            <div class="">
                                <label for="time_ceremony">Time:&nbsp;</label>
                                <input class="p-2 border-b-2 focus:border-gray-400 duration-150 outline-none" type="time" id="time_ceremony" required>
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
                    <input class="absolute -bottom-5 2xl:bottom-10 right-0 w-36 bg-blue-400 rounded-md p-2 2xl:p-3 text-center text-white text-base 2xl:text-lg hover:cursor-pointer opacity-75 hover:opacity-100 duration-150" 
                        type="submit" 
                        value="Submit" />
                </form>
            </div>
            <div>
                <img class="h-full" src="..//assets//images//book_ceremony_3.png" alt="book_ceremony_3">
            </div>
        </div> 
    </div>
    <script src="../javascript/navbar.js"></script>
    <script src="../javascript/user-menu.js"></script>
</body>
</html>