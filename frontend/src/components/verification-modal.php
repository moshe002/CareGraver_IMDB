<?php 
echo '<!-- verification to login modal -->
<div id="login-modal" class="hidden h-screen justify-center fixed z-50 inset-0 overflow-y-auto backdrop-filter backdrop-blur-sm duration-150">
    <div class="flex items-center justify-center min-h-screen">
        <div id="modal-content" class="flex flex-col justify-center items-center relative bg-blue-400 p-6 rounded">
            <button id="btn-modal" class="absolute top-5 right-5" onclick="closeModal()" type="button">&#10006;</button>
            <br><br>
            <h1 id="header-modal" class="font-semibold text-lg text-white">Please Login or Sign up to access our features.</h1>
            <br>
            <div class="flex p-5 justify-center items-center gap-5">
                <a id="btn-login" class="bg-white font-semibold p-2 opacity-60 rounded-md hover:opacity-100 duration-150" 
                    href="src/pages/login.php" 
                    type="button">Login</a>
                <a id="btn-signup" class="bg-white font-semibold p-2 opacity-60 rounded-md hover:opacity-100 duration-150" 
                    href="src/pages/signup.php" 
                    type="button">Signup</a>
            </div>
        </div>
    </div>
</div>
<!-- end of verification to login modal -->';
?>