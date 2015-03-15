$(document).ready(function() {
    var map = L.map('map', {
        layers: MQ.mapLayer()
    }).setView([49.4105519, 26.9952585], 12);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var dir = MQ.routing.directions();

    var area = $('ul#route-list li:first').children().data('area');

    console.log(area);
    $('ul#route-list li a').click(function() {
        area = $(this).data('area');

        dir.route({
            locations: area
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

    dir.route({
        locations: area
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
