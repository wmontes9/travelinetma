var geocoder;
var map;
var marker;
var address = "235 Bowery, New York, NY";

function initialize() {
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(-34.397, 150.644);

  var myOptions = {
    zoom: 15,
    center: latlng,
    disableDefaultUI: true,
    scrollwheel: false,
    draggable: true,
    styles: [{featureType:"road",elementType:"geometry",stylers:[{lightness:100},{visibility:"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#C6E2FF",}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#C5E3BF"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#D1D1B8"}]}],
    mapTypeControl: true,
    mapTypeControlOptions: {
      style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
    },
    navigationControl: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  map = new google.maps.Map(document.getElementById("map"), myOptions);


  if (geocoder) {
    geocoder.geocode({
      "address": address
    }, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
          map.setCenter(results[0].geometry.location);

          var infowindow = new google.maps.InfoWindow({
            content: "<b>" + address + "</b>",
            size: new google.maps.Size(150, 50)
          });

          var marker = new google.maps.Marker({
            position: results[0].geometry.location,
            map: map,

            title: address
          });
          google.maps.event.addListener(marker, "click", function() {
            infowindow.open(map, marker);
          });

        } else {
          alert("No results found");
        }
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }
};
google.maps.event.addDomListener(window, "load", initialize);