/* 
 * Google Map Initialization & Customization
 */

jQuery(window).on('load', function($){

    "use strict";

    var map;
    var mapLocation = {
        lat: 38.435828, 
        lng: -122.728091
    };
    var image = 'assets/images/map-marker.png';

    map = new GMaps({
        el: '#gmap',
        center: mapLocation,
        scrollwheel: false,
        zoom: 14,
        zoomControl : true,
        panControl : false,
        streetViewControl : false,
        mapTypeControl: true,
        fullscreenControl: true,
        overviewMapControl: false,
        clickable: false,
        disableDefaultUI: true
    });

    map.addMarker({
        position: mapLocation,
        icon: image,
        animation: google.maps.Animation.BOUNCE,
        verticalAlign: 'bottom',
        horizontalAlign: 'center',
        backgroundColor: '#3e8bff',
    });


    var styles = [
        {
            "stylers": [
                {
                    "hue": "#dd0d0d"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
                {
                    "lightness": 100
                },
                {
                    "visibility": "simplified"
                }
            ]
        }
    ];

    map.addStyle({
        styledMapName:"Styled Map",
        styles: styles,
        mapTypeId: "map_style"  
    });

    map.setStyle("map_style");
});