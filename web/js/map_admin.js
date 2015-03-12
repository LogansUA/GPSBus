$(document).ready(function() {
    var map = L.map('map', {
        layers: MQ.mapLayer()
    }).setView([49.4105519, 26.9952585], 12);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var dir = MQ.routing.directions();

    var routeArray = [];

    function mapClick(e) {
        routeArray.push({
            latitude: e.latlng.lat,
            longitude: e.latlng.lng
        });

        var temp = [];

        for (var i in routeArray) {
            temp.push({
                latLng: {
                    lat: routeArray[i].latitude,
                    lng: routeArray[i].longitude
                }
            });
        }

        dir.route({
            locations: temp
        });

        map.addLayer(MQ.routing.routeLayer({
            directions: dir,
            fitBounds: true,
            draggable: false,
            ribbonOptions: {
                draggable: false
            }
        }));

        $('#route-area').val(JSON.stringify(temp));
    }

    map.on('click', mapClick);
});
