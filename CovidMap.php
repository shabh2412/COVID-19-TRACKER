<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MapWise Data</title>
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />

</head>
<body>
    <div id='map' style='width: 400px; height: 300px;'></div>
    <script>
    mapboxgl.accessToken = 'pk.eyJ1IjoicmlzaGFiaHBhbmVzYXIiLCJhIjoiY2s5NXV6cDA4MDIwbjNocnNteW1ubXk1MSJ9.IgpO0MOPxdRXD_jNt69vUQ';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11'
    });
    </script>
</body>
</html>