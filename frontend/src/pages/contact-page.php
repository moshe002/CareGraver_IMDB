<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/chatbox.css">
    <script src="../javascript/chatbox.js"></script>
    <title>Contact Us</title>
</head>
<body>
    <?php include '/xampp/htdocs/CareGraver_IMDB/frontend/src/components/navbar.php' ?>
    <br>
    <div class="h-screen bg-gray-100" id="contact">
        <div class="flex flex-col gap-6 justify-start p-28 bg-gray-100">
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
                        <input class="border-0 border-b-2 border-gray-200 p-0 pr-3 pt-3 outline-none focus:ring-0 focus:border-gray-200" type="text" id="name" required />
                        <label class="font-semibold" for="emailOrPhoneNumber">Email/Phone number</label>
                        <input class="border-0 border-b-2 border-gray-200 p-0 pr-3 pt-3 outline-none focus:ring-0 focus:border-gray-200" type="text" id="emailOrPhoneNumber" required>
                        <label class="font-semibold" for="help">What can we help you with?</label>
                        <input class="border-0 border-b-2 border-gray-200 p-0 pr-3 pt-3 outline-none focus:ring-0 focus:border-gray-200" type="text" id="help" />
                        <input type="submit" class="absolute top-64 xl:top-64 right-1 bg-blue-500 text-white px-5 py-3 rounded-md w-1/4 mt-3 hover:cursor-pointer hover:bg-cyan-300 duration-150">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../javascript/navbar.js"></script>
    <script src="../javascript/user-menu.js"></script>
</body>
</html>