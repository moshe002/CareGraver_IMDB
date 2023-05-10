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
    <?php include '/xampp/htdocs/CareGraver_IMDB/frontend/src/components/navbar.php' ?>
    <!-- map div -->
    <br>
    <br>
    <br>
    <br>
    <!-- container of map and sidebar -->
    <div id="container">
        <div id="map" class="border-2 duration-200"></div>
        <!-- sidebar -->
        <div id="sidebar" class="hidden flex-col border-2 border-green-400 absolute top-24 right-0 w-0 h-full justify-center items-center z-10 duration-200">
            <div class="flex flex-col border-2 border-blue-400 justify-center items-center relative gap-3 h-full">
                <button 
                    class="absolute top-5 right-1"
                    onclick="(function(){
                        document.getElementById('sidebar').style.display = 'none';
                        document.getElementById('map').style.width = '100%';
                    })();">&#10006;
                </button>
                <br>
                <br>
                <br>
                <div class="flex justify-center items-center border-2 rounded-md">
                    <input class="outline-none p-2" type="search">
                    <button class="rounded-md p-2.5 bg-blue-500">
                        <img class="w-5 h-5" src="../assets//icons//search_icon.png" alt="search_icon">
                    </button>
                </div>
                <h1 class="p-2 border-b-2">Status: <b>Available</b></h1>
                <h1 class="p-2 border-b-2">Status: <b>Available</b></h1>
                <h1 class="p-2 border-b-2">Status: <b>Available</b></h1>
                <h1 class="p-2 border-b-2">Status: <b>Available</b></h1>
                <h1 class="p-2 border-b-2">Status: <b>Available</b></h1>
                <br>
                <div class="flex justify-center">
                    <button class="bg-blue-500 text-white p-2 w-1/2 font-semibold rounded-md">Reserve Now</button>
                </div>
                <h3 id="grave_id">test</h3>
            </div>
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
                        document.getElementById('sidebar').style.width = '27%';
                        document.getElementById('map').style.width = '73%';
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