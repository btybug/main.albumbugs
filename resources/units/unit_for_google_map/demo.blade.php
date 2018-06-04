<style>
    #map {
        width: 100%;
        height: 400px;
        background-color: grey;
    }
</style>
<h3>My Google Maps Demo</h3>

<div id="map"></div>
<div style="display: none" id="lat">@if(isset($settings['lat'])) {{$settings['lat']}} @else {{10}} @endif</div>
<div style="display: none" id="lng">@if(isset($settings['lng'])) {{$settings['lng']}} @else {{10}} @endif</div>
<div style="display: none" id="styles">@if(isset($settings['style'])) {{$settings['style']}} @else {{'roadmap'}} @endif</div>
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        var lat = Number($('#lat').text());
        var lng = Number($('#lng').text());
        var styles = $('#styles').text();
        var uluru = {lat: lat, lng: lng};
        // The map, centered at Uluru
        var map = new google.maps.Map(

            document.getElementById('map'), {zoom: 4, center: uluru, mapTypeId: "roadmap"});
        console.log(styles);
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
        console.log(styles);
        if(styles == 0)
            map.setMapTypeId('roadmap');
        else if(styles == 1)
            map.setMapTypeId('satellite');
        else if(styles == 2)
            map.setMapTypeId('hybrid');
        else if(styles == 3)
            map.setMapTypeId('terrain');
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAud3CAgSUNCWBRlSZQjKz8a7M0RV7R_IA&callback=initMap">
</script>
