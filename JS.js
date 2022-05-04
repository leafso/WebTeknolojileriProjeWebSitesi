function initMap(){
    var locationKaraman = {lat: 37.170050, lng: 33.222090};
    var map = new google.maps.Map(document.getElementById("mapKaraman"),
    {zoom: 9,
    center: locationKaraman});
    var marker = new google.maps.Marker({position: locationKaraman, map: map});   
}
