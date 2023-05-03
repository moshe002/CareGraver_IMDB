const login_modal = document.getElementById('login-modal');

function needToLogin() {
    login_modal.style.display = "flex";
};

login_modal.addEventListener('click', function(){
    login_modal.style.display = "none";
});
