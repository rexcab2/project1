<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         *{
            margin:0;
            padding:0;
         }
         #map{
            margin:auto;
            height: 500px;
            width: 500px;
         }
    </style>
</head>

<body>
    
<div id="map">

</div>


<script>
    // This is the initialization function for the Google Maps API
function initMap() {
    // Define the initial location with latitude and longitude
    var location = {lat: -25.363, lng: 131.044};
    
    // Create a new map instance and attach it to the "map" element in the HTML
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4, // Set the initial zoom level of the map
        center: location // Set the center of the map to the defined location
    });
    
    // Add a marker to the map to indicate the specified location
    var marker = new google.maps.Marker({
        position: location, // Set the position of the marker to the defined location
        map: map // Attach the marker to the map instance created above
    });
    location = {lat: 9.018540, lng: 125.517590};
    var marker = new google.maps.Marker({
        position: location, // Set the position of the marker to the defined location
        map: map // Attach the marker to the map instance created above
    });
}

</script>
<script async defer src="https://maps.googleapis.com/maps/api/
js?key=AIzaSyB-hnY0D6lQML-TTV3bjcnvy5vUXLAxzjQ&callback=initMap">
</script>

</body>
</html>