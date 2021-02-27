var map;
function initMap() {
    const LINDOLFO_COLLOR = {lat: -29.5868337, lng: -51.2183983 };
    const IVOTI = {lat: -29.6053812, lng: -51.1582156 };
    const DOIS_IRMÃOS = {lat: -29.5862639, lng: -51.0790538};
    const ESTANCIA_VELHA = {lat: -29.6583649, lng: -51.1917968}

    const RECTANGLE_BOUNDS = {
        north: 46.680082213381574,
        south: -9.559701515624965,
        east: 55.838712726148,
        west: 9.358755515625035
    }

    var mapOptions = {
        center: IVOTI,
        zoom: 11
    };

    map = new google.maps.Map(document.getElementById('map'),mapOptions);


    //Polyline
    /*
    const poly = new google.maps.Polyline({
        path: [LIVERPOOL, LONDRES],
        strokeColor:'#FF0000',
        strokeWeight:5,
        strokeOpacity:1,
        //map: map
    });
*/

    //Circle
    const poly = new google.maps.Circle({
        strokeColor: '#96ccfc',
        strokeWeight: 2,
        strokeOpacity: 1,
        fillColor: '#96ccfc',
        fillOpacity: .4,
        center: IVOTI,
        radius: 2000,
        map: map
    });

    const lindolfo_color = new google.maps.Circle({
        strokeColor: '#96ccfc',
        strokeWeight: 2,
        strokeOpacity: 1,
        fillColor: '#96ccfc',
        fillOpacity: .4,
        center: LINDOLFO_COLLOR,
        radius: 2000,
        map: map
    });

    const dois_irmaos = new google.maps.Circle({
        strokeColor: '#96ccfc',
        strokeWeight: 2,
        strokeOpacity: 1,
        fillColor: '#96ccfc',
        fillOpacity: .4,
        center: DOIS_IRMÃOS,
        radius: 2000,
        map: map
    });
    

    const estancia_velha = new google.maps.Circle({
        strokeColor: '#96ccfc',
        strokeWeight: 2,
        strokeOpacity: 1,
        fillColor: '#96ccfc',
        fillOpacity: .4,
        center: ESTANCIA_VELHA,
        radius: 2000,
        map: map
    });

    poly.setMap(map);
    lindolfo_color.setMap(map);
    dois_irmaos.setMap(map);
    estancia_velha.setMap(map);

}