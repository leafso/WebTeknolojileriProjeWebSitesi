function initMap(VarLat = 37.170050 , VarLng = 33.222090 , VarZoom = 15){
    var location = {lat: VarLat, lng: VarLng};
    var map = new google.maps.Map(document.getElementById("mapKaraman"),
    {zoom: VarZoom,
    center: location});
    var marker = new google.maps.Marker({position: location, map: map});   
}
