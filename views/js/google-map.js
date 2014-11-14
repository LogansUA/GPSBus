/**
 * Created by logans on 12.10.14.
 */
var map;
var flightPath;
var markersArray = [];
var Khmelnitsky = new google.maps.LatLng(49.4165828, 26.989422);

function initialize() {
    directionsDisplay = new google.maps.DirectionsRenderer();
    var mapOptions = {
        center: Khmelnitsky,
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
    directionsDisplay.setMap(map);

    google.maps.event.addListener(map, 'click', function(event) {
       addMarker(event.latLng);
    });
}

function displayRoute(route) {
    var flightPlanCoordinates;

    switch (route) {
        case '1':

            break;
        case '2':
            flightPlanCoordinates = [
                new google.maps.LatLng(49.4521099, 26.9272621),
                new google.maps.LatLng(49.4483539, 26.9246417),
                new google.maps.LatLng(49.434385, 26.9613757),
                new google.maps.LatLng(49.4259216, 26.9646803),
                new google.maps.LatLng(49.4240777, 26.9780764),
                new google.maps.LatLng(49.4268342, 26.9799003),
                new google.maps.LatLng(49.4256828, 26.991112),
                new google.maps.LatLng(49.4243987, 26.9908223),
                new google.maps.LatLng(49.4160538, 27.0173064),
                new google.maps.LatLng(49.4119994, 27.0150303),
                new google.maps.LatLng(49.4119692, 27.0149775),
                new google.maps.LatLng(49.407277, 27.0268682),
                new google.maps.LatLng(49.4066766, 27.0334987),
                new google.maps.LatLng(49.4058389, 27.0383052),
                new google.maps.LatLng(49.4049104, 27.0446567),
                new google.maps.LatLng(49.4005468, 27.0587007),
                new google.maps.LatLng(49.3936132, 27.0540122),
                new google.maps.LatLng(49.3949749, 27.0489696),
                new google.maps.LatLng(49.3933898, 27.048004),
                new google.maps.LatLng(49.3933077, 27.0480261),
                new google.maps.LatLng(49.3932415, 27.0482132),
                new google.maps.LatLng(49.3931333, 27.0483124),
                new google.maps.LatLng(49.3930425, 27.0483379),
                new google.maps.LatLng(49.3929447, 27.048299),
                new google.maps.LatLng(49.3928958, 27.0481528),
                new google.maps.LatLng(49.3929229, 27.0479704),
                new google.maps.LatLng(49.392998, 27.0478712),
                new google.maps.LatLng(49.3930966, 27.0478484),
                new google.maps.LatLng(49.3932537, 27.0479436),
                new google.maps.LatLng(49.3933077, 27.0480261)
            ];
            break;
        default:
    }

    flightPath = new google.maps.Polyline({
        path: flightPlanCoordinates,
        geodesic: true,
        strokeColoe: '#FF0000',
        strokeOpacity: 1.0,
        strokeWeight: 2
    });

    addLine();
}

function addLine() {
    flightPath.setMap(map);
}

function deleteLine() {
    flightPath.setMap(null);
}

function addMarker(location) {
    var pinIcon = new google.maps.MarkerImage(
        "../images/icon.png",
        null,
        null,
        null,
        new google.maps.Size(30, 30)
    );

    marker = new google.maps.Marker({
        position: location,
        map: map,
        icon: pinIcon,
        draggable: true,
        animation: google.maps.Animation./*DROP*/BOUNCE
    });
    /*
    setTimeout(function() {
        marker.setAnimation(null)
    }, 3000);
    */
    markersArray.push(marker);
}

google.maps.event.addDomListener(window, 'load', initialize);