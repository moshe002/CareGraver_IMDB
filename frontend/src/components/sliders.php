<?php 
echo '<!-- services reviews (what our clients say) -->
<div class="h-full">
    <div class="flex flex-col gap-6 justify-start p-28">
        <h1 class="text-blue-500 font-bold text-lg">What Our Clients Say</h1>
        <h1 class="font-bold text-5xl">Lorem ipsum dolor, sit amet.</h1>
        <p class="text-gray-400 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Facilis iste dicta assumenda natus nostrum minima minus</p>
        <!-- slider -->
        <div id="indicators-carousel" class="relative w-full mt-5" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="../assets/images/group-1-review.png" class="absolute block w-5/6 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../assets/images/group-2-review.png" class="absolute block w-5/6 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../assets/images/group-3-review.png" class="absolute block w-5/6 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-20 h-20 rounded-full sm:w-10 sm:h-10 hover:bg-gray-400 duration-150 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-10 h-10 text-black sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-20 h-20 rounded-full sm:w-10 sm:h-10 hover:bg-gray-400 duration-150 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-10 h-10 text-black sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
</div>
<!-- end of services reviews -->
<!-- services staff/employees -->
<div class="h-full bg-gray-100">
    <div class="flex flex-col gap-6 justify-start p-28">
        <h1 class="text-blue-500 font-bold text-lg">Meet Our Caregraver Family</h1>
        <h1 class="font-bold text-5xl">Lorem ipsum dolor, sit amet.</h1>
        <p class="text-gray-400 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Facilis iste dicta assumenda natus nostrum minima minus</p>
        <!-- slider container (employees) -->
        <div id="indicators-carousel" class="relative w-full mt-5" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="../assets/images/emp-group-1.png" class="absolute block w-5/6 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../assets/images/emp-group-2.png" class="absolute block w-5/6 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../assets/images/emp-group-3.png" class="absolute block w-5/6 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-20 h-20 rounded-full sm:w-10 sm:h-10 hover:bg-gray-400 duration-150 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-10 h-10 text-black sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-20 h-20 rounded-full sm:w-10 sm:h-10 hover:bg-gray-400 duration-150 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-10 h-10 text-black sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
</div>';
?>