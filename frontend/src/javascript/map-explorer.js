// resizes map based on window (DONT CHANGE THIS CODE)
$(document).ready(function() {
    $('map').imageMapResize();
});

!function(){"use strict";function r(){function e(){var r={width:u.width/u.naturalWidth,height:u.height/u.naturalHeight},a={width:parseInt(window.getComputedStyle(u,null).getPropertyValue("padding-left"),10),height:parseInt(window.getComputedStyle(u,null).getPropertyValue("padding-top"),10)};i.forEach(function(e,t){var n=0;o[t].coords=e.split(",").map(function(e){var t=1==(n=1-n)?"width":"height";return a[t]+Math.floor(Number(e)*r[t])}).join(",")})}function t(e){return e.coords.replace(/ *, */g,",").replace(/ +/g,",")}function n(){clearTimeout(d),d=setTimeout(e,250)}function r(e){return document.querySelector('img[usemap="'+e+'"]')}var a=this,o=null,i=null,u=null,d=null;"function"!=typeof a._resize?(o=a.getElementsByTagName("area"),i=Array.prototype.map.call(o,t),u=r("#"+a.name)||r(a.name),a._resize=e,u.addEventListener("load",e,!1),window.addEventListener("focus",e,!1),window.addEventListener("resize",n,!1),window.addEventListener("readystatechange",e,!1),document.addEventListener("fullscreenchange",e,!1),u.width===u.naturalWidth&&u.height===u.naturalHeight||e()):a._resize()}function e(){function t(e){e&&(!function(e){if(!e.tagName)throw new TypeError("Object is not a valid DOM element");if("MAP"!==e.tagName.toUpperCase())throw new TypeError("Expected <MAP> tag, found <"+e.tagName+">.")}(e),r.call(e),n.push(e))}var n;return function(e){switch(n=[],typeof e){case"undefined":case"string":Array.prototype.forEach.call(document.querySelectorAll(e||"map"),t);break;case"object":t(e);break;default:throw new TypeError("Unexpected data type ("+typeof e+").")}return n}}"function"==typeof define&&define.amd?define([],e):"object"==typeof module&&"object"==typeof module.exports?module.exports=e():window.imageMapResize=e(),"jQuery"in window&&(window.jQuery.fn.imageMapResize=function(){return this.filter("map").each(r).end()})}();
//# sourceMappingURL=imageMapResizer.map

// opening of modal onclick map area
const modal = document.getElementById('modal');
const map_area = document.getElementsByTagName('area');

if(map_area.length > 0) {
    for (let i = 0; i < map_area.length; i++) {
        map_area[i].addEventListener('click', function(event){
            openModal(event)
        });
        map_area[i].addEventListener('mouseenter', function(){
            map_area[i].style.cursor = 'pointer';
        });
    }
}
// on open modal also displays the ID of the modal (area)
function openModal(event) {
    modal.style.display = "flex";
    console.log('modal id:' +  event.target.id)
};

// modal close button
modal.addEventListener('click', closeModal);
function closeModal() {
    modal.style.display = "none";
}

// // static data display on lot
// const modal_content = document.getElementById('modal-content');

// const area_5 = document.getElementById('5'); // gets the specific area that i want to add a static data
// const btn_modal = document.getElementById('btn-modal');
// const header_modal = document.getElementById('header-modal');
// const btn_inquire = document.getElementById('btn-inquire');

// let lot_code = null;
// let name_of_deceased = null;
// let date_of_death = null;
// let lease_expire = null;
// let direction_btn = null;

// area_5.addEventListener('click', function(){ 

//     // lot code
//     lot_code = document.createElement('h1');
//     lot_code.innerHTML = "Lot Code: 1234";

//     // name of deceased
//     name_of_deceased = document.createElement('h1');
//     name_of_deceased.innerHTML = "Name Of Deceased: Superman";

//     // date of death
//     date_of_death = document.createElement('h1');
//     date_of_death.innerHTML = "Date of Death: 1/1/2023";

//     // lease expires in 
//     lease_expire = document.createElement('h1');
//     lease_expire.innerHTML = "Lease Expires in: 2/2/2028";

//     // find directions button  
//     direction_btn = document.createElement('button');
//     direction_btn.innerHTML = "FIND DIRECTIONS";

//     modal_content.innerHTML = '';
//     modal_content.appendChild(lot_code);
//     modal_content.appendChild(name_of_deceased);
//     modal_content.appendChild(date_of_death);
//     modal_content.appendChild(lease_expire);
//     modal_content.appendChild(direction_btn);
// });
