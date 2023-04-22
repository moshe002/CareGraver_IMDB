let left_btn = document.getElementById('left-btn');
let right_btn = document.getElementById('right-btn');

let first_grp = document.getElementById('first-group');
let second_grp = document.getElementById('second-group');
let third_grp = document.getElementById('third-group');

let incrmnt = 1;

let ellipse_1 = document.getElementById('ellipse-1');
let ellipse_2 = document.getElementById('ellipse-2');
let ellipse_3 = document.getElementById('ellipse-3');


//group 1 is default increment == 0
function nextGroup() {
    incrmnt++;
    console.log(incrmnt);
    if(incrmnt == 1){
        right_btn.disabled = false;
        right_btn.style.opacity = '1';
    }
    if(incrmnt == 2){
        //if increment is == 1 then display group 2 and hide group 1
        first_grp.style.display = 'none';
        second_grp.style.display = 'flex';
        right_btn.disabled = false;
        left_btn.disabled = false;
        left_btn.style.opacity = '1';
        right_btn.style.opacity = '1';
        ellipse_1.src = 'src/assets/icons/ellipse_half.png';
        ellipse_1_home_review.src = '../assets/icons/ellipse_half.png'
        ellipse_2.src = 'src/assets/icons/ellipse_full.png';
        ellipse_2_home_review.src = '../assets/icons/ellipse_full.png';
    }
    if(incrmnt == 3){
        //else if increment is == 2 then display group 3 and hide group 2
        second_grp.style.display = 'none';
        third_grp.style.display = 'flex';
        right_btn.disabled = true;
        left_btn.disabled = false;
        right_btn.style.opacity = '0.2';
        ellipse_1.src = 'src/assets/icons/ellipse_half.png';
        ellipse_2.src = 'src/assets/icons/ellipse_half.png';
        ellipse_3.src = 'src/assets/icons/ellipse_full.png';
        ellipse_1_home_review.src = '../assets/icons/ellipse_half.png';
        ellipse_2_home_review.src = '../assets/icons/ellipse_half.png';
        ellipse_3_home_review.src = '../assets/icons/ellipse_full.png';
    }
};

function prevGroup() {
    console.log(incrmnt)
    incrmnt--;
    if(incrmnt == 2){
        //if increment is == 1 then display group 2 and hide group 1
        third_grp.style.display = 'none';
        second_grp.style.display = 'flex';
        left_btn.disabled = false;
        right_btn.disabled = false;
        right_btn.style.opacity = '1';
        ellipse_1.src = 'src/assets/icons/ellipse_half.png';
        ellipse_2.src = 'src/assets/icons/ellipse_full.png';
        ellipse_3.src = 'src/assets/icons/ellipse_half.png';
    }
    if(incrmnt === 1){
        second_grp.style.display = 'none';
        first_grp.style.display = 'flex';
        left_btn.disabled = true;
        right_btn.disabled = false;
        left_btn.style.opacity = '0.2';
        right_btn.style.opacity = '1';
        ellipse_1.src = 'src/assets/icons/ellipse_full.png';
        ellipse_2.src = 'src/assets/icons/ellipse_half.png';
        ellipse_3.src = 'src/assets/icons/ellipse_half.png';
    }
};

//-------------------------------------------------------------------

let left_emp_btn = document.getElementById('left-emp-btn');
let right_emp_btn = document.getElementById('right-emp-btn');

let emp_ellipse_1 = document.getElementById('emp-ellipse-1');
let emp_ellipse_2 = document.getElementById('emp-ellipse-2');
let emp_ellipse_3 = document.getElementById('emp-ellipse-3');

let first_emp = document.getElementById('first-emp');
let second_emp = document.getElementById('second-emp');
let third_emp = document.getElementById('third-emp');

let emp_incrmnt = 1;

function nextEmp(){
    emp_incrmnt++;
    console.log(emp_incrmnt);
    if(emp_incrmnt == 1){
        right_emp_btn.disabled = false;
        right_emp_btn.style.opacity = '1';
    }
    if(emp_incrmnt == 2){
        //if increment is == 1 then display group 2 and hide group 1
        first_emp.style.display = 'none';
        second_emp.style.display = 'flex';
        right_emp_btn.disabled = false;
        left_emp_btn.disabled = false;
        left_emp_btn.style.opacity = '1';
        right_emp_btn.style.opacity = '1';
        emp_ellipse_1.src = 'src/assets/icons/ellipse_half.png';
        emp_ellipse_2.src = 'src/assets/icons/ellipse_full.png';
    }
    if(emp_incrmnt == 3){
        //else if increment is == 2 then display group 3 and hide group 2
        second_emp.style.display = 'none';
        third_emp.style.display = 'flex';
        right_emp_btn.disabled = true;
        left_emp_btn.disabled = false;
        right_emp_btn.style.opacity = '0.2';
        emp_ellipse_1.src = 'src/assets/icons/ellipse_half.png';
        emp_ellipse_2.src = 'src/assets/icons/ellipse_half.png';
        emp_ellipse_3.src = 'src/assets/icons/ellipse_full.png';
    }
};

function prevEmp(){
    console.log(emp_incrmnt)
    emp_incrmnt--;
    if(emp_incrmnt == 2){
        //if increment is == 1 then display group 2 and hide group 1
        third_emp.style.display = 'none';
        second_emp.style.display = 'flex';
        left_emp_btn.disabled = false;
        right_emp_btn.disabled = false;
        right_emp_btn.style.opacity = '1';
        emp_ellipse_1.src = 'src/assets/icons/ellipse_half.png';
        emp_ellipse_2.src = 'src/assets/icons/ellipse_full.png';
        emp_ellipse_3.src = 'src/assets/icons/ellipse_half.png';
    }
    if(emp_incrmnt === 1){
        second_emp.style.display = 'none';
        first_emp.style.display = 'flex';
        left_emp_btn.disabled = true;
        right_emp_btn.disabled = false;
        left_emp_btn.style.opacity = '0.2';
        right_emp_btn.style.opacity = '1';
        emp_ellipse_1.src = 'src/assets/icons/ellipse_full.png';
        emp_ellipse_2.src = 'src/assets/icons/ellipse_half.png';
        emp_ellipse_3.src = 'src/assets/icons/ellipse_half.png';
    }
};

//-------------------------------------------------------------------
// homepage part (nay sayon ani nga paagi im sure pero sa karon inani lng sa)
//-------------------------------------------------------------------

let ellipse_1_home_review = document.getElementById('ellipse-1-home-review');
let ellipse_2_home_review = document.getElementById('ellipse-2-home-review');
let ellipse_3_home_review = document.getElementById('ellipse-3-home-review');

function sliderHomeNext() {
    incrmnt++;
    console.log(incrmnt);
    if(incrmnt == 1){
        right_btn.disabled = false;
        right_btn.style.opacity = '1';
    }
    if(incrmnt == 2){
        //if increment is == 1 then display group 2 and hide group 1
        first_grp.style.display = 'none';
        second_grp.style.display = 'flex';
        right_btn.disabled = false;
        left_btn.disabled = false;
        left_btn.style.opacity = '1';
        right_btn.style.opacity = '1';
        ellipse_1_home_review.src = '../assets/icons/ellipse_half.png'
        ellipse_2_home_review.src = '../assets/icons/ellipse_full.png';
    }
    if(incrmnt == 3){
        //else if increment is == 2 then display group 3 and hide group 2
        second_grp.style.display = 'none';
        third_grp.style.display = 'flex';
        right_btn.disabled = true;
        left_btn.disabled = false;
        right_btn.style.opacity = '0.2';
        ellipse_1_home_review.src = '../assets/icons/ellipse_half.png';
        ellipse_2_home_review.src = '../assets/icons/ellipse_half.png';
        ellipse_3_home_review.src = '../assets/icons/ellipse_full.png';
    }
};

function sliderHomePrev() {
    console.log(incrmnt)
    incrmnt--;
    if(incrmnt == 2){
        //if increment is == 1 then display group 2 and hide group 1
        third_grp.style.display = 'none';
        second_grp.style.display = 'flex';
        left_btn.disabled = false;
        right_btn.disabled = false;
        right_btn.style.opacity = '1';
        ellipse_1_home_review.src = '../assets/icons/ellipse_half.png';
        ellipse_2_home_review.src = '../assets/icons/ellipse_full.png';
        ellipse_3_home_review.src = '../assets/icons/ellipse_half.png';
    }
    if(incrmnt === 1){
        second_grp.style.display = 'none';
        first_grp.style.display = 'flex';
        left_btn.disabled = true;
        right_btn.disabled = false;
        left_btn.style.opacity = '0.2';
        right_btn.style.opacity = '1';
        ellipse_1_home_review.src = '../assets/icons/ellipse_full.png';
        ellipse_2_home_review.src = '../assets/icons/ellipse_half.png';
        ellipse_3_home_review.src = '../assets/icons/ellipse_half.png';
    }
};

let emp_ellipse_1_home = document.getElementById('emp-ellipse-1-home');
let emp_ellipse_2_home = document.getElementById('emp-ellipse-2-home');
let emp_ellipse_3_home = document.getElementById('emp-ellipse-3-home');

function nextEmpHome(){
    emp_incrmnt++;
    console.log(emp_incrmnt);
    if(emp_incrmnt == 1){
        right_emp_btn.disabled = false;
        right_emp_btn.style.opacity = '1';
    }
    if(emp_incrmnt == 2){
        //if increment is == 1 then display group 2 and hide group 1
        first_emp.style.display = 'none';
        second_emp.style.display = 'flex';
        right_emp_btn.disabled = false;
        left_emp_btn.disabled = false;
        left_emp_btn.style.opacity = '1';
        right_emp_btn.style.opacity = '1';
        emp_ellipse_1_home.src = '../assets/icons/ellipse_half.png';
        emp_ellipse_2_home.src = '../assets/icons/ellipse_full.png';
    }
    if(emp_incrmnt == 3){
        //else if increment is == 2 then display group 3 and hide group 2
        second_emp.style.display = 'none';
        third_emp.style.display = 'flex';
        right_emp_btn.disabled = true;
        left_emp_btn.disabled = false;
        right_emp_btn.style.opacity = '0.2';
        emp_ellipse_1_home.src = '../assets/icons/ellipse_half.png';
        emp_ellipse_2_home.src = '../assets/icons/ellipse_half.png';
        emp_ellipse_3_home.src = '../assets/icons/ellipse_full.png';
    }
};

function prevEmpHome(){
    console.log(emp_incrmnt)
    emp_incrmnt--;
    if(emp_incrmnt == 2){
        //if increment is == 1 then display group 2 and hide group 1
        third_emp.style.display = 'none';
        second_emp.style.display = 'flex';
        left_emp_btn.disabled = false;
        right_emp_btn.disabled = false;
        right_emp_btn.style.opacity = '1';
        emp_ellipse_1_home.src = '../assets/icons/ellipse_half.png';
        emp_ellipse_2_home.src = '../assets/icons/ellipse_full.png';
        emp_ellipse_3_home.src = '../assets/icons/ellipse_half.png';
    }
    if(emp_incrmnt === 1){
        second_emp.style.display = 'none';
        first_emp.style.display = 'flex';
        left_emp_btn.disabled = true;
        right_emp_btn.disabled = false;
        left_emp_btn.style.opacity = '0.2';
        right_emp_btn.style.opacity = '1';
        emp_ellipse_1_home.src = '../assets/icons/ellipse_full.png';
        emp_ellipse_2_home.src = '../assets/icons/ellipse_half.png';
        emp_ellipse_3_home.src = '../assets/icons/ellipse_half.png';
    }
};



