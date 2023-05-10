<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="imageMapResizer.min.js"></script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8BUuSDeRsrMGCh07tzXoW7UhCr-A2ESI&callback=initMap&libraries=geometry"></script>
    <!-- <script
    src="https://code.jquery.com/jquery-3.6.4.js"
    integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script> -->
    <title>Grave Explorer</title>
    <!-- style for map div -->
    <style>
        #map {
            position: absolute;
            top: 100px;
            height: 500px;
            width: 100%; 
        }
        #floating-panel {
            position: absolute;
            top: 10px;
            left: 25%;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
            text-align: center;
            font-family: 'Roboto','sans-serif';
            line-height: 30px;
            padding-left: 10px;
        }
    </style>

</head>
<body>
    <!-- navbar -->
    <div class="flex flex-row fixed justify-between items-center w-full bg-gray-300 p-5 opacity-80 z-10">
            <div class="flex justify-start ml-24 items-center gap-36">
                <h1 class="font-bold text-2xl">CareGraver</h1>
                <div class="flex gap-10 font-semibold" id="topnav">
                    <a class="duration-150" href="../pages/homepage.php#home">Home</a>
                    <a class="duration-150" href="../pages/homepage.php#service">Products & Services</a>
                    <a class="duration-150" href="../pages/homepage.php#explorer">Explorer</a>
                    <a class="duration-150" href="../pages/homepage.php#contact">Contact</a>
                </div>
            </div>
            <!-- two icons div? -->
            <div class="flex gap-10 items-center justify-center mr-24">
                <div class="relative">
                    <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="text-white hover:bg-slate-50 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:hover:bg-white dark:focus:ring-white duration-150" type="button" onclick="onOpen()"> 
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="#000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        <img class="w-5 h-5" src="../assets/icons/user icon.png" alt="user_icon">
                    </button>
                    <!--<div id="user-menu" class="hidden flex-col absolute bg-white rounded-md p-5 w-max z-10">
                        <h1 class="font-bold text-2xl">Jolli Bee</h1>
                        <a class="text-lg" href="">Manage Account</a>
                        <a class="text-lg" href="">Orders</a>
                        <a class="text-lg" href="">Chats</a>
                        <br>
                        <br>
                        <a class="text-lg" href="">Switch Account</a>   
                        <a class="text-lg font-semibold hover:text-red-500" href="login.html">Log Out Account</a>
                    </div>  -->  
                    <div id="user-menu" class="z-10 hidden flex-col absolute bg-white divide-y divide-gray-100 rounded-lg shadow w-50 dark:bg-gray-700">
                        <!-- Dropdown menu -->
                        <div class="px-4 py-3 text-gray-900 dark:text-white">
                            <h1 class="text-lg"><?php echo $username;?></h1>
                            <h1 class="font-medium truncate text-sm "><?php echo $email; ?></h1 >
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Manage Account</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Orders</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Chats</a>
                            </li>                  
                        </ul>
                        <div class="py-2">
                            <a href="login.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                        </div>
                    </div>
                </div>
                <a href="">
                    <img class="w-5 h-5" src="../assets/icons/search icon.png" alt="search_icon">
                </a>
            </div>
        </div>
    <!-- map div -->
    <div id="floating-panel"><input type="button" id="btnRotate" value="Auto Rotate"></div>
    <div class="flex justify-center">
        <div id="map_canvas"></div>
    </div>


    <script>
        function initMap() {
            var A1 = new google.maps.LatLng(10.309470, 123.911012);
            var gm = google.maps,
                start_point = new gm.LatLng(10.310075, 123.911533),
                map = new gm.Map(document.getElementById('map_canvas'), {
                    mapId: "37a142a1e1464d01",
                    zoom: 18,
                    heading: 321,
                    tilt: 47.5,
                    center: start_point
                }),
                marker = new gm.Marker({
                    position: start_point,
                    map: map,
                    //Colors available (marker.png is red):
                    //black, brown, green, grey, orange, purple, white & yellow
                    icon: 'http://maps.google.com/mapfiles/marker_green.png'
                });
            
            
            
            var pathOptions = {
                strokeColor: '#FF0000',
                strokeOpacity: 1.0,
                strokeWeight: 2
            };
            
            
            //correct 
            var path = new google.maps.Polyline(pathOptions);

            var direction = 321;
            var radis = 250;
            var radius = 25;
            var end_point = new google.maps.geometry.spherical.computeOffset(A1, radis, direction);

            path.setMap(map);

            var path1 = new google.maps.Polyline(pathOptions);
            
            //main line   
            var direction1 = parseInt(parseInt(direction));
            var radius1 = parseInt(radius / 2);
            var end_point1 = new google.maps.geometry.spherical.computeOffset(A1, radius1, direction1);
            path1.getPath().setAt(0, A1);
            path1.getPath().setAt(1, end_point1);
            path1.setMap(map);
            
            //end of line 1 north to end of line north 3
            var path3 = new google.maps.Polyline(pathOptions);
            var direction3 = parseInt(parseInt(direction) + 90);
            var radius3 = parseInt(radius / 2);
            var end_point3 = new google.maps.geometry.spherical.computeOffset(end_point1, radius3, direction3);
            path3.getPath().setAt(0, end_point1);
            path3.getPath().setAt(1, end_point3);
            path3.setMap(map);
            
            // from south point to south end point 2
            var path2 = new google.maps.Polyline(pathOptions);
            var direction2 = parseInt(parseInt(direction) + 180);
            var radius2 = parseInt(radius / 2);
            var end_point2 = new google.maps.geometry.spherical.computeOffset(A1, radius2, direction2);
            path2.getPath().setAt(0, A1);
            path2.getPath().setAt(1, end_point2);
            path2.setMap(map);
            
            // end of line 2 from south to end of line south 4
            var path4 = new google.maps.Polyline(pathOptions);
            var direction4 = parseInt(parseInt(direction) + 90);
            var radius4 = parseInt(radius / 2);
            var end_point4 = new google.maps.geometry.spherical.computeOffset(end_point2, radius4, direction4);
            path4.getPath().setAt(0, end_point2);
            path4.getPath().setAt(1, end_point4);
            path4.setMap(map);
            
            // end of line 3 from north to end of line south 4
            var path5 = new google.maps.Polyline(pathOptions);
            var direction5 = parseInt(parseInt(direction));
            var radius5 = parseInt(radius / 2);
            var end_point5 = new google.maps.geometry.spherical.computeOffset(end_point3, radius5, direction5);
            path5.getPath().setAt(0, end_point3);
            path5.getPath().setAt(1, end_point4);
            path5.setMap(map);

        }
    </script>
    <!-- OLD MAPPING SCRIPT
    <script>
        function initMap() {//google maps initialize, asa ang coordinates, unsay style sa map
            var map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: 10.310075,
                    lng: 123.911533,
                },
                zoom: 18,
                heading: 321,
                tilt: 47.5,
                mapId: "37a142a1e1464d01"
            });//syntax of... google.maps.Map(mapDiv,options) - options can accept multiple settings like zoom, style, etc

            // Define the coordinates for each grave site/tombstone as rectangular polygons
            const graves = [
                {lng: 123.9108439, lat: 10.3085408},
                {lng: 123.9108698, lat: 10.3085585},
                {lng: 123.9108412, lat: 10.3085957},
                {lng: 123.9108132, lat: 10.3085773},
                {lng: 123.9108439, lat: 10.3085408},
            ];
            
            /*var graves = [
                { lat: 10.309470, lng: 123.911012, graveID: 'X Grave' },
                { lat: 10.309370, lng: 123.911012, graveID: 'First Grave' },
                { lat: 10.309156, lng: 123.910903, graveID: 'Second Grave' },
                { lat: 10.309128, lng: 123.910790, graveID: 'Third Grave' },
                { lat: 10.309099, lng: 123.910676, graveID: 'Fourth Grave' },
                { lat: 10.308017, lng: 123.910646, graveID: 'Fourth Grave' },
                // Add more graves here as needed
            ];*/

            // Create a rectangle for each grave site/tombstone and add it to the map
            graves.forEach(function(grave) {
                var poly = new google.maps.Polygon({
                    paths: graves,
                    clickable: true,
                    fillColor: '#FF0000',
                    fillOpacity: 0.35,
                    strokeColor: '#FF0000',
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    map: map
                });// no need to edit this every addition of graves, automatic ra kay loop man (pero ari naka define ang colors)

            });
        }

    </script> OLD MAPPING SCRIPT -->
    
    <div class="flex flex-col justify-center items-center h-full">
    <!-- <div id="map-container" class="flex relative justify-center max-h-96 w-screen overflow-x-hidden overflow-y-hidden border-2 border-black bg-green-400">
        image of map element also the reference to it
        <img
        id="map"
        draggable="true"
        class="relative h-fit max-w-full"
        src="../assets/background-images/aerial-map-1.png" 
        alt="grave_map" 
        usemap="#gravemap">              

        <map name="gravemap">
            
            <area class="area" name="1" target="" alt="1" title="1" coords="2777,3031,2793,3053,2813,3112,2934,3047,2966,2942,2947,2929,2806,2932,2799,2958,2789,2998" shape="poly">
            <area class="area" name="2" target="" alt="2" title="2" coords="2730,2767,2773,2803,2783,2843,2799,2892,2864,2905,2920,2905,2848,2807,2799,2751" shape="poly">
            <area class="area" name="3" target="" alt="3" title="3" coords="2685,2486,2675,2516,2714,2725,2868,2706,2819,2627" shape="poly">
            <area class="area" name="4" target="" alt="4" title="4" coords="2815,2750,2891,2740,2959,2900,2917,2880" shape="poly">
            <area class="area" name="5" target="" alt="5" title="5" coords="2622,3164,2590,3295,2743,3324,2776,3242,2740,3197,2707,3164,2655,3151" shape="poly">
            <area class="area" name="6" target="" alt="6" title="6" coords="2583,2945,2606,3131,2678,3111,2717,3075,2757,3026,2773,2981,2773,2941,2773,2915" shape="poly">
            <area class="area" name="7" target="" alt="7" title="7" coords="2570,2909,2547,2716,2606,2722,2652,2729,2678,2752,2717,2781,2737,2817,2760,2850,2770,2873,2770,2889" shape="poly">
            <area class="area" name="8" target="" alt="8" title="8" coords="2531,2601,2665,2581,2691,2732,2639,2699,2573,2686,2547,2696" shape="poly">
            <area class="area" name="9" target="" alt="9" title="9" coords="2671,2479,2655,2498,2665,2564,2524,2583,2492,2394,2528,2397" shape="poly">
            <area class="area" name="10" target="" alt="10" title="10" coords="2446,3131,2426,3252,2573,3288,2593,3170" shape="poly">
            <area class="area" name="11" target="" alt="11" title="11" coords="2547,2948,2364,2974,2377,3010,2410,3059,2436,3095,2492,3125,2521,3125,2564,3138,2586,3138" shape="poly">
            <area class="area" name="12" target="" alt="12" title="12" coords="2547,2912,2357,2945,2364,2902,2364,2869,2377,2840,2390,2820,2403,2791,2442,2761,2472,2748,2495,2738,2524,2719" shape="poly">
            <area class="area" name="13" target="" alt="13" title="13" coords="2357,2626,2377,2767,2403,2757,2423,2731,2452,2714,2469,2708,2492,2695,2514,2701,2498,2616" shape="poly">
            <area class="area" name="14" target="" alt="14" title="14" coords="2328,2464,2344,2604,2397,2601,2449,2598,2492,2585,2475,2441" shape="poly">
            <area class="area" name="15" target="" alt="15" title="15" coords="2305,2337,2325,2435,2374,2441,2442,2418,2482,2422,2475,2373" shape="poly">
            <area class="area" name="16" target="" alt="16" title="16" coords="2279,3059,2246,3223,2312,3236,2384,3246,2403,3249,2403,3203,2420,3151,2426,3118" shape="poly">
            <area class="area" name="17" target="" alt="17" title="17" coords="2318,2918,2171,2941,2210,2974,2240,2997,2266,3007,2292,3033,2321,3043,2344,3056,2371,3075,2338,2948" shape="poly">
            <area class="area" name="18" target="" alt="18" title="18" coords="2187,2653,2325,2634,2357,2804,2351,2840,2338,2873,2325,2882,2285,2889,2253,2892,2214,2902" shape="poly">
            <area class="area" name="19" target="" alt="19" title="19" coords="2178,2469,2305,2450,2328,2594,2285,2613,2240,2620,2194,2620,2155,2630" shape="poly">
            <area class="area" name="20" target="" alt="20" title="20" coords="2207,2363,2282,2337,2295,2438,2243,2445,2181,2454" shape="poly">
            <area class="area" name="21" target="" alt="21" title="21" coords="2142,2197,2161,2197,2187,2203,2220,2223,2246,2242,2272,2269,2282,2298,2282,2321,2259,2327,2240,2331,2200,2331,2164,2350" shape="poly">
            <area class="area" name="22" target="" alt="22" title="22" coords="2106,3023,2066,3183,2109,3183,2142,3190,2187,3203,2220,3206,2253,3066,2227,3026" shape="poly">
            <area class="area" name="23" target="" alt="23" title="23" coords="2073,2820,1965,2954,2024,2968,2047,2971,2089,2987,2128,3000,2161,3000,2191,2994" shape="poly">
            <area class="area" name="24" target="" alt="24" title="24" coords="2034,2682,2063,2790,1952,2937,1926,2937,1971,2871,1955,2790,1952,2695" shape="poly">
            <area class="area" name="25" target="" alt="25" title="25" coords="2164,2649,2204,2911,2161,2924,2148,2884,2128,2852,2109,2806,2076,2760,2070,2714,2079,2675" shape="poly">
            <area class="area" name="26" target="" alt="26" title="26" coords="2191,2362,2125,2634,2089,2634,2145,2392" shape="poly">
            <area class="area" name="27" target="" alt="27" title="27" coords="2135,2348,2070,2636,2017,2593,1998,2377" shape="poly">
            <area class="area" name="28" target="" alt="28" title="28" coords="1965,2119,1952,2217,1985,2250,1998,2348,2135,2338,2142,2279,2122,2227,2102,2174" shape="poly">
            <area class="area" name="29" target="" alt="29" title="29" coords="2011,2987,1906,3095,1971,3151,1998,3164,2043,3170,2063,3095,2083,3013" shape="poly">
            <area class="area" name="30" target="" alt="30" title="30" coords="1922,2698,1949,2861,1909,2924,1870,2901,1847,2884,1814,2852,1769,2829,1742,2803,1716,2796,1769,2747,1814,2717" shape="poly">
            <area class="area" name="31" target="" alt="31" title="31" coords="2024,2653,1837,2683,1857,2634,1867,2601,1880,2555,1886,2503,1883,2464,1870,2444" shape="poly">
            <area class="area" name="32" target="" alt="32" title="32" coords="1965,2375,1991,2542,1965,2522,1939,2470,1906,2437,1877,2405,1857,2372,1860,2385" shape="poly">
            <area class="area" name="33" target="" alt="33" title="33" coords="1821,2178,1962,2263,1965,2344,1834,2361" shape="poly">
            <area class="area" name="34" target="" alt="34" title="34" coords="1841,2031,1949,2119,1939,2218,1824,2155" shape="poly">
            <area class="area" name="35" target="" alt="35" title="35" coords="1785,2866,1828,2915,1870,2928,1899,2951,1935,2971,1991,2981,1899,3082,1860,3059,1841,3039,1756,3026" shape="poly">
            <area class="area" name="36" target="" alt="36" title="36" coords="1690,2538,1677,2570,1657,2593,1641,2616,1612,2619,1615,2793,1644,2780,1693,2767,1729,2747,1759,2727,1778,2708,1801,2688,1811,2662,1824,2636,1844,2596,1854,2570,1854,2538" shape="poly">
            <area class="area" name="37" target="" alt="37" title="37" coords="1602,2271,1605,2425,1625,2428,1644,2441,1667,2461,1687,2481,1687,2503,1847,2503,1841,2454,1828,2422,1795,2382,1769,2337,1736,2310,1657,2271" shape="poly">
            <area class="area" name="38" target="" alt="38" title="38" coords="1667,2090,1674,2244,1710,2254,1742,2270,1772,2286,1792,2312,1811,2335,1795,2168" shape="poly">
            <area class="area" name="39" target="" alt="39" title="39" coords="1693,1878,1821,2013,1814,2140,1670,2062" shape="poly">
            <area class="area" name="40" target="" alt="40" title="40" coords="1618,2824,1687,2804,1756,2850,1729,3017,1585,2981" shape="poly">
            <area class="area" name="41" target="" alt="41" title="41" coords="1445,2780,1406,2930,1553,2976,1595,2819,1520,2819" shape="poly">
            <area class="area" name="42" target="" alt="42" title="42" coords="1520,2545,1341,2552,1350,2601,1363,2631,1383,2670,1403,2703,1429,2725,1455,2748,1488,2768,1507,2781,1534,2788,1573,2791,1592,2801,1599,2627" shape="poly">
            <area class="area" name="43" target="" alt="43" title="43" coords="1579,2264,1579,2428,1559,2428,1536,2447,1520,2474,1513,2497,1513,2513,1330,2516,1337,2461,1350,2421,1376,2382,1422,2336,1494,2290" shape="poly">
            <area class="area" name="44" target="" alt="44" title="44" coords="1500,2101,1641,2078,1657,2245,1625,2231,1585,2228,1556,2238,1523,2248" shape="poly">
            <area class="area" name="45" target="" alt="45" title="45" coords="1477,1884,1664,1865,1644,2058,1507,2081" shape="poly">
            <area class="area" name="46" target="" alt="46" title="46" coords="1356,2106,1474,2093,1494,2244,1455,2267,1415,2283,1396,2313,1383,2345" shape="poly">
            <area class="area" name="47" target="" alt="47" title="47" coords="1448,1884,1330,1956,1356,2087,1468,2074" shape="poly">
            <area class="area" name="48" target="" alt="48" title="48" coords="1386,2929,1245,2897,1235,2844,1258,2838,1301,2831,1350,2825,1383,2805,1432,2792" shape="poly">
            <area class="area" name="49" target="" alt="49" title="49" coords="1422,2761,1396,2741,1376,2715,1343,2676,1324,2637,1317,2591,1304,2558,1213,2558,1239,2817,1284,2813,1330,2807,1379,2787" shape="poly">
            <area class="area" name="50" target="" alt="50" title="50" coords="1343,2385,1337,2418,1324,2440,1317,2467,1311,2490,1317,2516,1298,2526,1209,2529,1199,2401" shape="poly">
            <area class="area" name="51" target="" alt="51" title="51" coords="1340,2253,1180,2266,1199,2390,1353,2364" shape="poly">
            <area class="area" name="52" target="" alt="52" title="52" coords="1317,1989,1350,2228,1177,2238,1167,2087" shape="poly">
            <area class="area" name="53" target="" alt="53" title="53" coords="1075,2734,1095,2763,1118,2770,1141,2790,1170,2816,1193,2822,1213,2829,1219,2894,1056,2862" shape="poly">
            <area class="area" name="54" target="" alt="54" title="54" coords="1111,2547,1078,2560,1042,2580,1006,2619,1006,2639,1023,2659,1039,2678,1065,2691,1101,2711,1118,2744,1150,2776,1183,2790,1213,2809,1203,2757,1206,2708,1203,2639,1183,2590,1180,2557" shape="poly">
            <area class="area" name="55" target="" alt="55" title="55" coords="1170,2403,1183,2528,1108,2528,1095,2397" shape="poly">
            <area class="area" name="56" target="" alt="56" title="56" coords="1150,2278,918,2298,902,2334,895,2363,908,2396,964,2393,1029,2386,1108,2386,1167,2376" shape="poly">
            <area class="area" name="57" target="" alt="57" title="57" coords="1137,2105,1088,2131,1046,2174,1006,2197,984,2216,944,2246,931,2265,967,2269,1026,2269,1101,2256,1154,2252" shape="poly">
            <area class="area" name="58" target="" alt="58" title="58" coords="908,2415,987,2402,934,2455" shape="poly">
            <area class="area" name="59" target="" alt="59" title="59" coords="1072,2404,1013,2404,980,2437,967,2457,934,2483,954,2490,997,2588,1075,2535" shape="poly">
            <area class="area" name="60" target="" alt="60" title="60" coords="882,2420,970,2593,974,2616,980,2652,1003,2685,1033,2698,1003,2707,833,2675" shape="poly">
            <area class="area" name="61" target="" alt="61" title="61" coords="827,2690,797,2864,987,2897,1000,2874,1020,2861,1059,2726" shape="poly">
            <area class="area" name="62" target="" alt="62" title="62" coords="2773,3050,2698,3135,2789,3201,2793,3122" shape="poly">
            <area class="area" name="63" target="" alt="63" title="63" coords="3080,3129,2887,3289,2795,3266,2824,3135,2867,3122,2907,3090,2946,3061,2976,3028,2982,2995,2982,2930" shape="poly">
            <area class="area" name="64" target="" alt="64" title="64" coords="2724,2404,2685,2453,2717,2476,2757,2512,2802,2557,2842,2616,2881,2672,2946,2816,2979,2878,3031,2989,3077,3094,3129,3051,3116,2999,3116,2953,3103,2881,3084,2816,3057,2764,2986,2678" shape="poly">
            <area class="area" name="65" target="" alt="65" title="65" coords="2796,2297,2737,2369,2763,2411,2845,2323" shape="poly">
            <area class="area" name="66" target="" alt="66" title="66" coords="2848,2327,2763,2415,2884,2530,2923,2497,2946,2464,2972,2438,2989,2412" shape="poly">
            <area class="area" name="67" target="" alt="67" title="67" coords="3012,2399,3005,2432,2992,2462,2972,2485,2953,2507,2940,2524,2907,2547,3025,2674,3061,2648,3103,2615,3120,2583,3133,2556,3152,2537,3165,2498" shape="poly">
            <area class="area" name="68" target="" alt="68" title="68" coords="3182,2504,3169,2517,3162,2553,3149,2583,3123,2615,3097,2635,3071,2668,3051,2678,3031,2694,3067,2704,3093,2750,3107,2769,3123,2805,3123,2831,3123,2864,3126,2920,3136,2946,3149,2995,3162,3011,3182,3002,3198,2972,3218,2936,3237,2910,3260,2877,3277,2864,3303,2838,3336,2825,3362,2825,3414,2805,3443,2786,3463,2772,3365,2655,3286,2563" shape="poly">
            <area class="area" name="69" target="" alt="69" title="69" coords="3434,2351,3247,2502,3486,2744,3643,2587" shape="poly">
            <area class="area" name="70" target="" alt="70" title="70" coords="3244,2149,3205,2155,3192,2181,3159,2211,3129,2234,3110,2250,3097,2266,3084,2299,3067,2338,3041,2371,3028,2391,3234,2502,3401,2332,3296,2207" shape="poly">
            <area class="area" name="71" target="" alt="71" title="71" coords="3149,2020,3012,2151,2956,2200,2920,2236,2904,2285,2887,2321,2999,2370,3044,2291,3087,2239,3139,2190,3218,2108" shape="poly">
            <area class="area" name="72" target="" alt="72" title="72" coords="3057,1920,2812,2263,2842,2296,2868,2309,2920,2217,3129,2005" shape="poly">
            <area class="area" name="73" target="" alt="73" title="73" coords="2436,2068,2449,2107,2495,2160,2606,2284,2632,2297,2691,2304,2737,2323,2662,2448,2583,2402,2498,2363,2436,2343,2384,2333,2328,2330,2331,2264,2397,2107" shape="poly">
            <area class="area" name="74" target="" alt="74" title="74" coords="2586,2188,2564,2188,2626,2274,2721,2293,2770,2293,2685,2241,2616,2185,2596,2152" shape="poly">
            <area class="area" name="75" target="" alt="75" title="75" coords="2642,2092,2642,2112,2652,2132,2671,2151,2698,2184,2740,2197,2776,2217,2802,2236,2779,2263,2698,2230,2649,2197,2626,2145" shape="poly">
            <area class="area" name="76" target="" alt="76" title="76" coords="2737,1911,2698,1983,2681,2036,2665,2055,2671,2081,2678,2108,2691,2134,2721,2153,2757,2180,2783,2180,2796,2206,2815,2222,2933,2055" shape="poly">
            <area class="area" name="77" target="" alt="77" title="77" coords="2685,1885,2606,2049,2632,2068,2724,1888" shape="poly">
            <area class="area" name="78" target="" alt="78" title="78" coords="3143,1797,3074,1909,3260,2098,3345,1948" shape="poly">
            <area class="area" name="79" target="" alt="79" title="79" coords="3228,1683,3162,1771,3368,1918,3424,1830" shape="poly">
            <area class="area" name="80" target="" alt="80" title="80" coords="3231,1662,3434,1793,3522,1649,3483,1613,3306,1564" shape="poly">
            <area class="area" name="81" target="" alt="81" title="81" coords="2956,1441,2943,1457,3215,1647,3273,1555" shape="poly">
            <area class="area" name="82" target="" alt="82" title="82" coords="2874,1608,2737,1886,2950,2033,3116,1784" shape="poly">
            <area class="area" name="83" target="" alt="83" title="83" coords="2933,1483,2894,1581,3136,1758,3201,1670" shape="poly">
            <area class="area" name="84" target="" alt="84" title="84" coords="2724,1505,2750,1492,2786,1476,2806,1456,2838,1440,2868,1420,2907,1401,2946,1388,2868,1577" shape="poly">
            <area class="area" name="85" target="" alt="85" title="85" coords="2704,1527,2645,1658,2789,1750,2851,1606" shape="poly">
            <area class="area" name="86" target="" alt="86" title="86" coords="2645,1672,2652,1859,2730,1888,2789,1738" shape="poly">
            <area class="area" name="87" target="" alt="87" title="87" coords="2285,1561,2272,1575,2240,1594,2207,1594,2174,1614,2155,1633,2128,1653,2102,1666,2089,1705,2070,1745,2070,1791,2076,1816,2132,1800,2171,1777,2210,1768,2259,1738,2292,1705,2315,1683,2331,1666,2357,1647,2377,1627,2403,1617" shape="poly">
            <area class="area" name="88" target="" alt="88" title="88" coords="2266,1310,2276,1353,2285,1379,2299,1411,2312,1457,2315,1483,2315,1510,2312,1542,2328,1549,2361,1562,2377,1533,2384,1506,2387,1457,2400,1431,2410,1402,2433,1359" shape="poly">
            <area class="area" name="89" target="" alt="89" title="89" coords="2531,803,2429,1091,2413,1137,2407,1169,2364,1215,2308,1235,2256,1261,2266,1274,2305,1287,2338,1294,2371,1300,2403,1307,2436,1320,2456,1274,2521,1110,2534,1025,2560,940,2580,872,2593,829" shape="poly">
            <area class="area" name="90" target="" alt="90" title="90" coords="1919,1559,2030,1798,2043,1765,2050,1739,2056,1712,2063,1680,2070,1657,2102,1627" shape="poly">
            <area class="area" name="91" target="" alt="91" title="91" coords="2292,1521,2282,1540,2253,1557,2223,1567,2184,1580,2161,1593,2142,1599,2125,1612,2011,1570,2070,1436" shape="poly">
            <area class="area" name="92" target="" alt="92" title="92" coords="2200,1158,2145,1220,2073,1410,2285,1485" shape="poly">
            <area class="area" name="93" target="" alt="93" title="93" coords="2305,921,2266,1055,2223,1110,2266,1248,2338,1202,2390,1156,2442,976" shape="poly">
            <area class="area" name="94" target="" alt="94" title="94" coords="2376,754,2327,904,2464,944,2513,796" shape="poly">
            <area class="area" name="95" target="" alt="95" title="95" coords="2423,584,2377,725,2508,784,2560,640" shape="poly">
            <area class="area" name="96" target="" alt="96" title="96" coords="2482,410,2639,466,2567,616,2436,564" shape="poly">
            <area class="area" name="97" target="" alt="97" title="97" coords="2567,138,2635,158,2665,184,2685,210,2704,230,2730,250,2737,282,2730,322,2724,354,2694,374,2675,407,2652,439,2488,384" shape="poly">
            <area class="area" name="98" target="" alt="98" title="98" coords="2393,114,2541,137,2469,376,2318,334" shape="poly">
            <area class="area" name="99" target="" alt="99" title="99" coords="2158,132,2070,253,2299,322,2371,125" shape="poly">
            <area class="area" name="100" target="" alt="100" title="100" coords="2056,279,2004,426,2240,511,2285,344" shape="poly">
            <area class="area" name="101" target="" alt="101" title="101" coords="2312,353,2442,398,2403,559,2263,513" shape="poly">
            <area class="area" name="102" target="" alt="102" title="102" coords="2249,537,2207,671,2351,724,2390,576" shape="poly">
            <area class="area" name="103" target="" alt="103" title="103" coords="2096,486,2223,529,2187,666,2060,627" shape="poly">
            <area class="area" name="104" target="" alt="104" title="104" coords="1955,436,1932,508,1886,570,2024,619,2076,485" shape="poly">
            <area class="area" name="105" target="" alt="105" title="105" coords="2194,695,2158,849,2289,894,2335,744" shape="poly">
            <area class="area" name="106" target="" alt="106" title="106" coords="2050,648,2168,690,2128,828,1991,785" shape="poly">
            <area class="area" name="107" target="" alt="107" title="107" coords="1877,585,1828,732,1975,781,2027,644" shape="poly">
            <area class="area" name="108" target="" alt="108" title="108" coords="2132,873,2276,909,2243,1050,2200,1102,2145,1037,2089,1017" shape="poly">
            <area class="area" name="109" target="" alt="109" title="109" coords="1991,813,1952,961,2066,1005,2112,859" shape="poly">
            <area class="area" name="110" target="" alt="110" title="110" coords="1824,765,1762,899,1922,958,1965,814" shape="poly">
            <area class="area" name="111" target="" alt="111" title="111" coords="1654,708,1602,859,1638,859,1749,891,1805,751" shape="poly">
            <area class="area" name="112" target="" alt="112" title="112" coords="2076,1024,2119,1054,2181,1126,2128,1217,2037,1185" shape="poly">
            <area class="area" name="113" target="" alt="113" title="113" coords="2060,1038,2011,1172,1860,1126,1873,1093,1903,1061,1929,1021,1929,989" shape="poly">
            <area class="area" name="114" target="" alt="114" title="114" coords="2106,1231,2047,1398,1759,1277,1759,1244,1756,1212,1762,1179,1808,1166,1844,1153" shape="poly">
            <area class="area" name="115" target="" alt="115" title="115" coords="1772,1311,1782,1357,1814,1393,1831,1409,1860,1435,1877,1461,1899,1497,1906,1524,1988,1550,2040,1429" shape="poly">
            <area class="area" name="116" target="" alt="116" title="116" coords="1762,927,1654,1058,1828,1113,1860,1077,1883,1038,1896,1005,1906,979" shape="poly">
            <area class="area" name="117" target="" alt="117" title="117" coords="1651,1077,1625,1100,1602,1123,1595,1152,1582,1178,1569,1201,1729,1277,1729,1241,1729,1195,1739,1162,1765,1155,1782,1142,1808,1136" shape="poly">
            <area class="area" name="118" target="" alt="118" title="118" coords="1487,926,1638,890,1739,922,1631,1047,1559,1021" shape="poly">
            <area class="area" name="119" target="" alt="119" title="119" coords="1396,733,1592,792,1582,857,1546,874,1513,877,1468,903" shape="poly">
            <area class="area" name="120" target="" alt="120" title="120" coords="1343,727,1232,773,1311,953,1448,917" shape="poly">
            <area class="area" name="121" target="" alt="121" title="121" coords="1631,1066,1582,1050,1546,1030,1500,1010,1471,958,1455,945,1412,951,1327,971,1347,1030,1373,1063,1392,1099,1442,1125,1484,1148,1527,1164,1549,1177" shape="poly">
            <area class="area" name="122" target="" alt="122" title="122" coords="1553,1233,1710,1289,1742,1332,1742,1368,1742,1397,1742,1426,1736,1459,1500,1358" shape="poly">
            <area class="area" name="123" target="" alt="123" title="123" coords="1356,1334,1648,1439,1252,1612" shape="poly">
            <area class="area" name="124" target="" alt="124" title="124" coords="1428,1157,1533,1216,1474,1347,1370,1314" shape="poly">
            <area class="area" name="125" target="" alt="125" title="125" coords="1298,984,1311,1037,1337,1069,1360,1096,1396,1118,1409,1145,1347,1302,1167,1233,1229,1076,1255,1004" shape="poly">
            <area class="area" name="126" target="" alt="126" title="126" coords="997,1181,944,1292,1294,1430,1353,1325" shape="poly">
            <area class="area" name="127" target="" alt="127" title="127" coords="1056,1023,1082,1023,1124,1023,1157,1023,1203,1009,1239,1003,1144,1229,1013,1176" shape="poly">
            <area class="area" name="128" target="" alt="128" title="128" coords="1088,832,1190,786,1281,963,1232,982,1163,1005,1108,995" shape="poly">
            <area class="area" name="129" target="" alt="129" title="129" coords="1016,666,1121,623,1199,761,1072,797" shape="poly">
            <area class="area" name="130" target="" alt="130" title="130" coords="944,504,1049,442,1124,596,1006,648" shape="poly">
            <area class="area" name="131" target="" alt="131" title="131" coords="735,646,918,522,977,653,784,744" shape="poly">
            <area class="area" name="132" target="" alt="132" title="132" coords="791,760,990,678,1049,826,863,898" shape="poly">
            <area class="area" name="133" target="" alt="133" title="133" coords="872,911,1062,839,1075,990,1023,996,997,996,977,1013,925,1029" shape="poly">
            <area class="area" name="134" target="" alt="134" title="134" coords="708,669,391,869,463,986,774,797" shape="poly">
            <area class="area" name="135" target="" alt="135" title="135" coords="486,1006,584,1150,617,1157,656,1154,705,1137,745,1121,777,1121,827,1092,876,1059,908,1039,777,817" shape="poly">
            <area class="area" name="136" target="" alt="136" title="136" coords="159,995,375,880,441,995,244,1112" shape="poly">
            <area class="area" name="137" target="" alt="137" title="137" coords="261,1119,467,1005,558,1162,329,1234" shape="poly">
            <area class="area" name="138" target="" alt="138" title="138" coords="149,1007,55,1040,169,1256,284,1223" shape="poly">
        </map> -->
        <div id="popup" class="hidden flex-col fixed justify-center items-center bg-white p-5 z-50 rounded-md border-4">
            <button id="btn-popup" class="absolute top-5 right-5" type="button">&#10006;</button>
            <br><br>
            <h1 id="header-modal" class="font-semibold text-base"><?php if(isset($_POST["1"])) { echo "hello"; }
            else{echo "no";}?></h1>
            <br>
            <a id="btn-inquire" class="bg-green-500 font-semibold text-white p-2 opacity-60 rounded-md hover:opacity-100 duration-150" 
            href="inquire.php" 
            type="button">Inquire</a>
        </div>
    </div>
    <!-- modal (ty chatgpt) -->
    <!--
    <div id="modal" class="hidden h-screen justify-center fixed z-10 inset-0 overflow-y-auto backdrop-filter backdrop-blur-sm duration-150">
        <div class="flex items-center justify-center min-h-screen">
            <div id="modal-content" class="flex flex-col justify-center items-center relative bg-white p-6 rounded">
                <button id="btn-modal" class="absolute top-5 right-5" onclick="closeModal()" type="button">&#10006;</button>
                <br><br>
                <h1 id="header-modal" class="font-semibold text-lg">This lot is available for lease</h1>
                <br>
                <a id="btn-inquire" class="bg-green-500 font-semibold text-white p-2 opacity-60 rounded-md hover:opacity-100 duration-150" 
                href="" 
                type="button">Inquire</a>
            </div>
        </div>
    </div>
    -->
        <!-- end of modal -->
        <br><br>
        <!-- back button to homepage -->
        <div>
            <a class="bg-blue-500 p-3 font-semibold rounded-md text-white hover:bg-cyan-300 duration-150" 
            href="homepage.php" 
            title="homepage">Back to Homepage</a>
        </div>
    </div>
    <script>
        function initMap() { //google maps initialize, asa ang coordinates, unsay style sa map
            var map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: 10.310075,
                    lng: 123.911533,
                },
                zoom: 18,
                heading: 321,
                tilt: 47.5,
                mapId: "37a142a1e1464d01"
            });//syntax of... google.maps.Map(mapDiv,options) - options can accept multiple settings like zoom, style, etc

            // Define the coordinates for each grave site/tombstone as rectangles
            var graves = [
                { lat: 10.309180, lng: 123.911015, graveID: 'First Grave' },
                { lat: 10.309156, lng: 123.910903, graveID: 'Second Grave' },
                { lat: 10.309128, lng: 123.910790, graveID: 'Third Grave' },
                { lat: 10.309099, lng: 123.910676, graveID: 'Fourth Grave' },
                // Add more graves here as needed
            ];

            // Create a rectangle for each grave site/tombstone and add it to the map
            graves.forEach(function(grave) {
                var rectangle = new google.maps.Rectangle({
                    bounds: new google.maps.LatLngBounds(
                        new google.maps.LatLng(grave.lat - 0.00005, grave.lng - 0.00005),
                        new google.maps.LatLng(grave.lat + 0.00005, grave.lng + 0.00005)),
                        clickable: true,
                        fillColor: '#FF0000',
                        fillOpacity: 0.35,
                        strokeColor: '#FF0000',
                        strokeOpacity: 0.8,
                        strokeWeight: 2,
                        map: map
                });// no need to edit this every addition of graves, automatic ra kay loop man (pero ari naka define ang colors)


                    google.maps.event.addListener(rectangle, 'click', function(event) {
                        //alert('You clicked on ' + grave["graveID"]);
                        document.getElementById('sidebar').style.display = 'flex';
                        document.getElementById('grave_id').innerHTML = grave["graveID"];
                    });
            });
        }
    </script>
    <script src="../javascript/navbar.js"></script>
    <script src="../javascript/user-menu.js"></script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8BUuSDeRsrMGCh07tzXoW7UhCr-A2ESI&callback=initMap"></script>
</body>
</html>