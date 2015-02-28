$(document).ready(function() {
    var map = L.map('map', {
        layers: MQ.mapLayer()
    }).setView([48.76375572, 31.62963867], 6);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var dir = MQ.routing.directions();

    dir.route({
        locations: [
            { latLng: { lat: 49.443126, lng: 26.998456 } },
            { latLng: { lat: 49.442019, lng: 26.994313 } },
            { latLng: { lat: 49.426160, lng: 26.979069 } }
        ]
    });

    map.addLayer(MQ.routing.routeLayer({
        directions: dir,
        fitBounds: true,
        draggable: false,
        ribbonOptions: {
            draggable: false
        }
    }));
});
