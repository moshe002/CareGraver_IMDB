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
        { lat: 10.309180, lng: 123.911015, graveID: '1' },
        { lat: 10.309156, lng: 123.910903, graveID: '2' },
        { lat: 10.309128, lng: 123.910790, graveID: '3' },
        { lat: 10.309099, lng: 123.910676, graveID: '4' },
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

        
        google.maps.event.addListener(rectangle, 'click', function() { 
            // $.post("../pages/grave-explorer.php", { graveClicked:grave['graveID'] }, function(response) {
            //     console.log(response)
            // });
            var xhr = new XMLHttpRequest();
    xhr.open('POST', '../pages/grave-explorer-process.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // Process the PHP script response here if needed
        console.log(xhr.responseText);
        gravesiteResult = JSON.parse(xhr.responseText);
        var status = gravesiteResult.availability;
        console.log(status);
        var name = gravesiteResult['nameOfDeceased'];
            var dateOfBirth = gravesiteResult['dateOfBirth'];
            var dateOfDeath = gravesiteResult['dateOfDeath'];
            // var coordinates = gravesiteResult['graveCoordinates'];
            // coordinates.split(",")
            var blockNo = gravesiteResult['graveCoordinates'];
            var lotNo = gravesiteResult['graveCoordinates'];
            // var graveImage = gravesiteResult['availability'];
            var graveClassification = gravesiteResult['gravesiteClassification'];
            var gravePrice = gravesiteResult['price'];
            
            var statusHTML = document.getElementById('status');
            statusHTML.textContent = status;
            var nameHTML = document.getElementById('name');
            nameHTML.textContent = name;
            var dobHTML = document.getElementById('dob');
            dobHTML.textContent = dateOfBirth;
            var dodHTML = document.getElementById('dod');
            dodHTML.textContent = dateOfDeath;
            var blockNoHTML = document.getElementById('blockNo');
            blockNoHTML.textContent = blockNo;
            var lotNoHTML = document.getElementById('lotNo');
            lotNoHTML.textContent = lotNo;
            var graveClassHTML = document.getElementById('graveClass');
            graveClassHTML.textContent = graveClassification;
            var priceHTML = document.getElementById('price');
            priceHTML.textContent = gravePrice;
            // sqlResult

            switch(status) {
                case "O":
                    document.getElementById('nameT').style.display = 'flex';
                    document.getElementById('dobT').style.display = 'flex';
                    document.getElementById('dodT').style.display = 'flex';
                  break;
                case "R":
                  // code block
                  break;
                case "A":
                  // code block
                  break;
                default:
                  // code block
              }

      }
    };
    xhr.send('graveClicked=' + encodeURIComponent(grave['graveID']));
            document.getElementById('sidebar').style.display = 'flex';
            document.getElementById('sidebar').style.width = '27%';
            document.getElementById('map').style.width = '73%';
            // console.log($.post());
            // $(document).ready(function() {
            //     // AJAX request to retrieve the PHP variable value
            //     $.post('../pages/grave-explorer.php', function(response) {
            //       var myVariable = response;
            //       console.log(myVariable);
            //     });
            //   });
            // var dump = document.getElementById('dump');
            // gravesiteResult = dump.textContent;
            

            
            
            



        });
    });
}