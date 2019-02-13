var mapboxgl = require('mapbox-gl');


mapboxgl.accessToken = 'pk.eyJ1Ijoic2FtZGJlY2toYW0iLCJhIjoiSVk5cS1UTSJ9.0lCowgljkS2VZ_8ToBkPUA';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/samdbeckham/cjs3mmotr1kyn1fk8zk990mcz'
});


map.on('click', function(e) {
    var features = map.queryRenderedFeatures(e.point, {
      layers: ['frontendne-venue-new'] // replace this with the name of the layer
    });
  
    if (!features.length) {
      return;
    }
  
    var feature = features[0];
  
    new mapboxgl.Popup({ offset: [0, -25] })
      .setLngLat(feature.geometry.coordinates)
      .setHTML('<h3>' + feature.properties.name + '</h3><p>' + feature.properties.address + ', ' + feature.properties.postcode  + '</p>')
      .setLngLat(feature.geometry.coordinates)
      .addTo(map);
  });
  