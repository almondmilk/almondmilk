geocoder = new google.maps.Geocode();

window.getCoordinates = function(address, callback){
  var coordinates;
  geocoder.geocode({addres: address}, function (results,status){
   coordinates = results[0].geometry.location;
   callback (coordinates);
  })
}
