<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/chatbox.css">
    <script src="../javascript/chatbox.js"></script>
    <!-- <script
    src="https://code.jquery.com/jquery-3.6.4.js"
    integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script> -->
    <title>Grave Explorer</title>
    <!-- style for map div -->
    <style>
        #map {
            height: 100vh;
            width: 100%;
        }
    </style>

</head>
<body>
<!-- map div -->
    <div class="flex flex-col relative justify-center items-center h-full">
        <?php include '/xampp/htdocs/CareGraver_IMDB/frontend/src/components/navbar.php' ?>
        <br>
        <br>
        <br>
        <br>
        <div class="border-2 border-green-500" id="map"></div>
        <!-- sidebar -->
        <div class="flex flex-col justify-center items-center absolute right-0 h-min w-96 p-3 border-2 border-blue-300" id="sidebar">
            <div class="flex flex-col gap-3 relative text-black text-center border-2 border-red-500">
                <button 
                class="absolute right-0"
                onclick="(function(){
                    document.getElementById('sidebar').style.display = 'none';
                })();">&#10006;</button>
                <br>
                <div>
                    <input class="border-2 p-2" type="search">
                    <button>search_icon</button>
                </div>
                <h1>Status: <b>Available</b></h1>
                <h1>Status: <b>Available</b></h1>
                <h1>Status: <b>Available</b></h1>
                <h1>Status: <b>Available</b></h1>
                <h1>Status: <b>Available</b></h1>
                <button>Reserve Now</button>
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