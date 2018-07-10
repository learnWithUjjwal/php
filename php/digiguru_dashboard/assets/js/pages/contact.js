$( document ).ready(function() {
    function initialize() {
        var mapOptions = {
            center: new google.maps.LatLng(28.6338158,77.28270109999994,12),
            zoom: 12
        };
        var map = new google.maps.Map(document.getElementById('contact-map-canvas'),  mapOptions); 
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    

});