
const payment_form = document.getElementById('payment_form');
payment_form.addEventListener('submit', function(event) {
    event.preventDefault();
    showPaymentModal();
});

function showPaymentModal() {
    const paymentModal = document.getElementById('payment_modal');
    paymentModal.style.display = 'flex';
};


// display the blue check logo when clicked
const payPal_btn = document.getElementById('paypal-btn');
payPal_btn.addEventListener('focus', function() {
    const blue_check_icon2 = document.getElementById('blue-check-icon2');
    blue_check_icon2.style.visibility = "visible";
});

const gcash_btn = document.getElementById('gcash-btn');
gcash_btn.addEventListener('focus', function() {
    const blue_check_icon1 = document.getElementById('blue-check-icon1');
    blue_check_icon1.style.visibility = "visible";
});

// undisplay blue check logo 
payPal_btn.addEventListener('focusout', function() {
    const blue_check_icon2 = document.getElementById('blue-check-icon2');
    blue_check_icon2.style.visibility = "hidden";
});

gcash_btn.addEventListener('focusout', function() {
    const blue_check_icon1 = document.getElementById('blue-check-icon1');
    blue_check_icon1.style.visibility = "hidden";
});

