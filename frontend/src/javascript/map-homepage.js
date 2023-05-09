function initMap() {//google maps initialize, asa ang coordinates, unsay style sa map
    var map = new google.maps.Map(document.getElementById("map"), {
        center: {
            lat: 10.310075,
            lng: 123.911533,
        },
        zoom: 18,
        heading: 321,
        tilt: 47.5,
        mapId: "37a142a1e1464d01",
    });//syntax of... google.maps.Map(mapDiv,options) - options can accept multiple settings like zoom, style, etc

    // Define the coordinates for each grave site/tombstone as rectangles
    // var graves = [
    //     { lat: 10.309180, lng: 123.911015, graveID: 'First Grave' },
    //     { lat: 10.309156, lng: 123.910903, graveID: 'Second Grave' },
    //     { lat: 10.309128, lng: 123.910790, graveID: 'Third Grave' },
    //     { lat: 10.309099, lng: 123.910676, graveID: 'Fourth Grave' },
    //     // Add more graves here as needed
    // ];

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
                alert('You clicked on ' + grave["graveID"]);
            });
    });
}