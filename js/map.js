$(document).ready(function () {
    // svg path for target icon
    var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";
    // svg path for plane icon
    var planeSVG = "m2,106h28l24,30h72l-44,-133h35l80,132h98c21,0 21,34 0,34l-98,0 -80,134h-35l43,-133h-71l-24,30h-28l15,-47";

    var arrow = "m295.666648,63.333291c0,0 0,175.9999 0,175.9999c0,0 199.99992,-94.769177 199.99992,-94.769177c0,0 -199.99992,-81.230723 -199.99992,-81.230723z";

    var startLat = 24.52713;
    var startLng = 54.14062;

    var planeColor = "#515254";

    var officeColor = "#ffcf15";
    var targetColor = "#663300";

    var latLng = {
        point1: {
            lat: 27.37176,
            lng: -96.67968
        },
        point2: {
            lat: 3.58473,
            lng: -52.75673
        },
        point3: {
            lat: -38.96327,
            lng: -61.875
        },
        point4: {
            lat: 42.03297,
            lng: 1.75781
        },
        point5: {
            lat: 7.01366,
            lng: 6.67968
        },
        point6: {
            lat: -4.03961, 
            lng: 39.55078
        },
        point7: {
            lat: 16.28649,
            lng: 72.91271
        },
        point8: {
            lat: -21.94304,
            lng: 117.42187
        },
        point9: {
            lat: 29.53522, 
            lng: 121.28906
        }

    }

    var linesArray = [
        {
            "id": "line1",
            "title": "To Mexico",
            "arc": -0.85,
            "alpha": 0.5,
            "thickness": 1.9,
            "dashLength": 4.8,
            "latitudes": [startLat, latLng.point1.lat],
            "longitudes": [startLng, latLng.point1.lng]
        },
        {
            "id": "line2",
            "title": "To ------",
            "arc": -0.8,
            "alpha": 0.5,
            "thickness": 1.9,
            "dashLength": 4.8,
            "latitudes": [startLat, latLng.point2.lat],
            "longitudes": [startLng, latLng.point2.lng]
        },
        {
            "id": "line3",
            "title": "To ------",
            "arc": -0.85,
            "alpha": 0.5,
            "thickness": 1.9,
            "dashLength": 4.8,
            "latitudes": [startLat, latLng.point3.lat],
            "longitudes": [startLng, latLng.point3.lng]
        },
        {
            "id": "line4",
            "title": "To ------",
            "arc": -0.6,
            "alpha": 0.5,
            "thickness": 1.9,
            "dashLength": 4.8,
            "latitudes": [startLat, latLng.point4.lat],
            "longitudes": [startLng, latLng.point4.lng]
        },
        {
            "id": "line5",
            "title": "To ------",
            "arc": -0.6,
            "alpha": 0.5,
            "thickness": 1.9,
            "dashLength": 4.8,
            "latitudes": [startLat, latLng.point5.lat],
            "longitudes": [startLng, latLng.point5.lng]
        },
        {
            "id": "line6",
            "title": "To ------",
            "arc": -0.5,
            "alpha": 0.5,
            "thickness": 1.9,
            "dashLength": 4.8,
            "latitudes": [startLat, latLng.point6.lat],
            "longitudes": [startLng, latLng.point6.lng]
        },
        {
            "id": "line7",
            "title": "To ------",
            "arc": -0.75,
            "alpha": 0.5,
            "thickness": 1.9,
            "dashLength": 4.8,
            "latitudes": [startLat, latLng.point7.lat],
            "longitudes": [startLng, latLng.point7.lng]
        },
        {
            "id": "line8",
            "title": "To ------",
            "arc": -0.83,
            "alpha": 0.5,
            "thickness": 1.9,
            "dashLength": 4.8,
            "latitudes": [startLat, latLng.point8.lat],
            "longitudes": [startLng, latLng.point8.lng]
        },
        {
            "id": "line9",
            "title": "To ------",
            "arc": -0.7,
            "alpha": 0.5,
            "thickness": 1.9,
            "dashLength": 4.8,
            "latitudes": [startLat, latLng.point9.lat],
            "longitudes": [startLng, latLng.point9.lng]
        },
    ];

    window.map = AmCharts.makeChart("location-container", {
        "type": "map",

        "dataProvider": {
            "map": "worldLow",
            "zoomLevel": 1.8,
            "zoomLongitude": 0,
            "zoomLatitude": 0,

            "lines": linesArray,
            "images": [
                {
                    "id": "office1",
                    "svgPath": targetSVG,
                    "title": "Office - Calgary,Alberta",
                    "latitude": 51.0483, 
                    "longitude": -114.07104,
                    "color": officeColor,
                    "scale": 1.8
                }, {
                    "id": "office2",
                    "svgPath": targetSVG,
                    "title": "Office - El Salvador",
                    "latitude": 13.79418, 
                    "longitude": -88.89652,
                    "color": officeColor,
                    "scale": 1.8
                }, {
                    "id": "office3",
                    "svgPath": targetSVG,
                    "title": "Office - Curaçao",
                    "latitude": 19.50011, 
                    "longitude": -72.8363,
                    "color": officeColor,
                    "scale": 1.8
                }, {
                    "id": "office4",
                    "svgPath": targetSVG,
                    "title": "Office - -------",
                    "latitude": 3.33795, 
                    "longitude": -72.72949,
                    "color": officeColor,
                    "scale": 1.8
                }, {
                    "id": "office5",
                    "svgPath": targetSVG,
                    "title": "Office - Kolkata, India",
                    "latitude": 22.58358,
                    "longitude": 88.37402,
                    "color": officeColor,
                    "scale": 1.8
                },
                
                
                
                
                
                {
                "svgPath": targetSVG,
                "title": "Kingdom Lubricants",
                "latitude": startLat,
                "longitude": startLng,
                "color": "#ff6600",
                "scale": 2
            }, {
                "id": "point1",
                "svgPath": targetSVG,
                "title": "Mexico",
                "latitude": latLng.point1.lat,
                "longitude": latLng.point1.lng
            }, {
                "id": "point2",
                "svgPath": targetSVG,
                "title": "--------",
                "latitude": latLng.point2.lat,
                "longitude": latLng.point2.lng
            },
            {
                "id": "point3",
                "svgPath": targetSVG,
                "title": "--------",
                "latitude": latLng.point3.lat,
                "longitude": latLng.point3.lng
            },
            {
                "id": "point4",
                "svgPath": targetSVG,
                "title": "--------",
                "latitude": latLng.point4.lat,
                "longitude": latLng.point4.lng
            },
            {
                "id": "point5",
                "svgPath": targetSVG,
                "title": "--------",
                "latitude": latLng.point5.lat,
                "longitude": latLng.point5.lng
            }, {
                "id": "point6",
                "svgPath": targetSVG,
                "title": "--------",
                "latitude": latLng.point6.lat,
                "longitude": latLng.point6.lng
            }, {
                "id": "point7",
                "svgPath": targetSVG,
                "title": "--------",
                "latitude": latLng.point7.lat,
                "longitude": latLng.point7.lng
            }, {
                "id": "point8",
                "svgPath": targetSVG,
                "title": "--------",
                "latitude": latLng.point8.lat,
                "longitude": latLng.point8.lng
            }, {
                "id": "point9",
                "svgPath": targetSVG,
                "title": "--------",
                "latitude": latLng.point9.lat,
                "longitude": latLng.point9.lng
            },
            
            
            
            
            
            
            
            
            
            {
                "id": "plane1",
                "svgPath": arrow,
                "positionOnLine": 0,
                "color": planeColor,
                "animateAlongLine": true,
                "lineId": "line1",
                "flipDirection": true,
                "loop": true,
                "scale": 0.05,
                "positionScale": 1.5

            },
            {
                "id": "plane2",
                "svgPath": arrow,
                "positionOnLine": 0,
                "color": planeColor,
                "lineId": "line2",
                "flipDirection": true,
                "animateAlongLine": true,
                "loop": true,
                "scale": 0.05,
                "positionScale": 1.5
            },
            {
                "id": "plane3",
                "svgPath": arrow,
                "positionOnLine": 0,
                "color": planeColor,
                "lineId": "line3",
                "animateAlongLine": true,
                "flipDirection": true,
                "loop": true,
                "scale": 0.05,
                "positionScale": 1.5
            }, {
                "id": "plane4",
                "svgPath": arrow,
                "positionOnLine": 0,
                "color": planeColor,
                "animateAlongLine": true,
                "lineId": "line4",
                "flipDirection": true,
                "loop": true,
                "scale": 0.05,
                "positionScale": 1.5
            }, {
                "id": "plane5",
                "svgPath": arrow,
                "positionOnLine": 0,
                "color": planeColor,
                "animateAlongLine": true,
                "lineId": "line5",
                "flipDirection": true,
                "loop": true,
                "scale": 0.05,
                "positionScale": 1.5
            }, {
                "id": "plane6",
                "svgPath": arrow,
                "positionOnLine": 0,
                "color": planeColor,
                "lineId": "line6",
                "flipDirection": true,
                "loop": true,
                "animateAlongLine": true,
                "scale": 0.05,
                "positionScale": 1.5,
                "animationDuration": 20
            }, {
                "id": "plane7",
                "svgPath": arrow,
                "positionOnLine": 0,
                "color": planeColor,
                "animateAlongLine": true,
                "lineId": "line7",
                "flipDirection": true,
                "loop": true,
                "scale": 0.05,
                "positionScale": 1.5,
                "animationDuration": 20
            }, {
                "id": "plane8",
                "svgPath": arrow,
                "positionOnLine": 0,
                "color": planeColor,
                "animateAlongLine": true,
                "lineId": "line8",
                "flipDirection": true,
                "loop": true,
                "scale": 0.05,
                "positionScale": 1.5
            }, {
                "id": "plane9",
                "svgPath": arrow,
                "positionOnLine": 0,
                "color": planeColor,
                "animateAlongLine": true,
                "lineId": "line9",
                "flipDirection": true,
                "loop": true,
                "scale": 0.05,
                "positionScale": 1.5
            },
            
            
            
            
            ]
        },

        "areasSettings": {
            "unlistedAreasColor": "#ccffcc"
        },

        "imagesSettings": {
            "color": targetColor,
            "rollOverColor": "#585869",
            "selectedColor": "#585869",
            "pauseDuration": 1,
            "animationDuration": 10,
            "adjustAnimationSpeed": true
        },

        "linesSettings": {
            "color": "#515254",
            "alpha": 0.4
        }

    });
});