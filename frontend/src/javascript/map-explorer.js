// resizes map based on window (DONT CHANGE THIS CODE)
$(document).ready(function() {
    $('map').imageMapResize();
});

!function(){"use strict";function r(){function e(){let r={width:u.width/u.naturalWidth,height:u.height/u.naturalHeight},a={width:parseInt(window.getComputedStyle(u,null).getPropertyValue("padding-left"),10),height:parseInt(window.getComputedStyle(u,null).getPropertyValue("padding-top"),10)};i.forEach(function(e,t){let n=0;o[t].coords=e.split(",").map(function(e){let t=1==(n=1-n)?"width":"height";return a[t]+Math.floor(Number(e)*r[t])}).join(",")})}function t(e){return e.coords.replace(/ *, */g,",").replace(/ +/g,",")}function n(){clearTimeout(d),d=setTimeout(e,250)}function r(e){return document.querySelector('img[usemap="'+e+'"]')}let a=this,o=null,i=null,u=null,d=null;"function"!=typeof a._resize?(o=a.getElementsByTagName("area"),i=Array.prototype.map.call(o,t),u=r("#"+a.name)||r(a.name),a._resize=e,u.addEventListener("load",e,!1),window.addEventListener("focus",e,!1),window.addEventListener("resize",n,!1),window.addEventListener("readystatechange",e,!1),document.addEventListener("fullscreenchange",e,!1),u.width===u.naturalWidth&&u.height===u.naturalHeight||e()):a._resize()}function e(){function t(e){e&&(!function(e){if(!e.tagName)throw new TypeError("Object is not a valid DOM element");if("MAP"!==e.tagName.toUpperCase())throw new TypeError("Expected <MAP> tag, found <"+e.tagName+">.")}(e),r.call(e),n.push(e))}let n;return function(e){switch(n=[],typeof e){case"undefined":case"string":Array.prototype.forEach.call(document.querySelectorAll(e||"map"),t);break;case"object":t(e);break;default:throw new TypeError("Unexpected data type ("+typeof e+").")}return n}}"function"==typeof define&&define.amd?define([],e):"object"==typeof module&&"object"==typeof module.exports?module.exports=e():window.imageMapResize=e(),"jQuery"in window&&(window.jQuery.fn.imageMapResize=function(){return this.filter("map").each(r).end()})}();
//# sourceMappingURL=imageMapResizer.map

// opening of modal onclick map area
const popup = document.getElementById('popup');
const map_area = document.getElementsByTagName('area');

if(map_area.length > 0) {
    for (let i = 0; i < map_area.length; i++) {
        map_area[i].addEventListener('click', function(event){
          openPopup(event)          
        });
        map_area[i].addEventListener('mouseenter', function(){
            map_area[i].style.cursor = 'pointer';
        });
    }
}

// on open popup also displays the ID of the popup (area)
function openPopup(event) {
    console.log('popup/area id:' +  event.target.id)

    if (!popup) {
      popup = document.createElement("div");
      popup.id = "window";
      popup.classList.add("window");
      document.body.appendChild(popup);
    }
    // Set the position of the window relative to the clicked element
    popup.style.display = "flex";
    popup.style.left = event.clientX + 10 + "px";
    popup.style.top = event.clientY + 5 + "px";
};

// popup close button
const btn_close = document.getElementById('btn-popup')
btn_close.addEventListener('click', function() {
  popup.style.display = "none";
});

// on drag map to navigate
const map = document.getElementById('map');
let isDragging = false;
let startX, startY;
let currentX = 0;
let currentY = 0;
let dragStartX = 0;
let dragStartY = 0;
let zoomFactor = 1.0;
let maxZoomFactor = 4.0;
let minZoomFactor = 0.5;

map.addEventListener('mousedown', function(e) {
  e.preventDefault();
  console.log('i am being dragged, help')
  isDragging = true;
  startX = e.clientX;
  startY = e.clientY;
  dragStartX = currentX;
  dragStartY = currentY;
});

map.addEventListener('mousemove', function(e) {
  e.preventDefault();
  if (isDragging) {
    let deltaX = e.clientX - startX;
    let deltaY = e.clientY - startY;
    currentX = dragStartX + deltaX;
    currentY = dragStartY + deltaY;
    //checkBounds();
    setTransform(currentX, currentY);
  }
});

map.addEventListener('mouseup', function(e) {
  e.preventDefault();
  isDragging = false;
  this.style.cursor = "grab";
});

map.addEventListener("mouseleave", function(e) {
  e.preventDefault();
  isDragging = false;
  this.style.cursor = "move";
});

map.addEventListener("wheel", function(e) {
  e.preventDefault();
  let delta = e.deltaY / 100;
  zoomFactor += delta * 0.1;
  zoomFactor = Math.max(minZoomFactor, Math.min(maxZoomFactor, zoomFactor));
  let transformValue = "scale(" + zoomFactor + ") translate3d(" + currentX + "px, " + currentY + "px, 0)";
  this.style.transform = transformValue;
});

function setTransform(xPos, yPos) {
  let transformValue = "scale(" + zoomFactor + ") translate3d(" + xPos + "px, " + yPos + "px, 0)";
  map.style.transform = transformValue;
};

/*  IDK NGANO DI MO GANA HEHE
function checkBounds() {
  let img = document.getElementById("map");
  let imgWidth = img.clientWidth * zoomFactor;
  let imgHeight = img.clientHeight * zoomFactor;
  let containerWidth = map.clientWidth;
  let containerHeight = map.clientHeight;

  if (imgWidth < containerWidth) {
    currentX = (containerWidth - imgWidth) / 2;
  } else {
    let maxOffsetX = (imgWidth - containerWidth) / 2;
    if (currentX > maxOffsetX) {
      currentX = maxOffsetX;
    } else if (currentX < -maxOffsetX) {
      currentX = -maxOffsetX;
    }
  }

  if (imgHeight < containerHeight) {
    currentY = (containerHeight - imgHeight) / 2;
  } else {
    let maxOffsetY = (imgHeight - containerHeight) / 2;
    if (currentY > maxOffsetY) {
      currentY = maxOffsetY;
    } else if (currentY < -maxOffsetY) {
      currentY = -maxOffsetY;
    }
  }

  return [currentX, currentY];
};
*/