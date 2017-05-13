$(document).ready(function () {
    // svg path for target icon
    var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";
    // svg path for plane icon
    var planeSVG = "m2,106h28l24,30h72l-44,-133h35l80,132h98c21,0 21,34 0,34l-98,0 -80,134h-35l43,-133h-71l-24,30h-28l15,-47";

    var arrow = "m295.666648,63.333291c0,0 0,175.9999 0,175.9999c0,0 199.99992,-94.769177 199.99992,-94.769177c0,0 -199.99992,-81.230723 -199.99992,-81.230723z";

    var factorySvg = "m49.719 1.75v432.69h-49.719v261.94h746v-261.94h-26.66l-213.72-212.19v212.19h-8.43l-213.72-212.19v212.19h-184l-0.001-432.69h-49.75zm41.469 488.25h51.402v51.38h-51.402v-51.38zm102.43 0h51.41v51.38h-51.41v-51.38zm102.47 0h51.41v51.38h-51.41v-51.38zm102.44 0h51.41v51.38h-51.41v-51.38zm102.47 0h51.41v51.38h-51.41v-51.38zm102.44 0h51.4v51.38h-51.4v-51.38zm-512.25 99.47h51.402v51.37h-51.402v-51.37zm102.43 0h51.41v51.37h-51.41v-51.37zm102.47 0h51.41v51.37h-51.41v-51.37zm102.44 0h51.41v51.37h-51.41v-51.37zm102.47 0h51.41v51.37h-51.41v-51.37zm102.44 0h51.4v51.37h-51.4v-51.37z";

    var officeSvg = `M561.997,130.566L451.481,94.262c0,0-1.432-0.526-3.365-0.489c-1.934,0.037-3.463,0.734-3.463,0.734l-71.531,29.168V75.707 
c0-4.284-2.754-8.079-6.818-9.425L165.984,0.492c0,0-1.836-0.759-4.456-0.392c-2.619,0.367-4.455,1.787-4.455,1.787L10.658,106.294 
c-2.607,1.86-4.162,4.859-4.162,8.078v370.713c0,3.623,1.983,6.952,5.166,8.69l146.463,80.282c0,0,1.408,0.832,3.586,1.139 
c2.191,0.293,3.586-0.233,3.586-0.233L365.618,524.4l85.203-21.493l110.467-27.883c4.393-1.113,7.479-5.079,7.479-9.62 
l0.023-325.401C568.815,135.707,566.061,131.913,561.997,130.566z M65.224,448.868c0,1.077-0.526,2.093-1.408,2.717 
c-0.563,0.38-1.236,0.588-1.897,0.588c-0.379,0-0.759-0.062-1.138-0.208l-28.85-10.612c-1.297-0.478-2.167-1.714-2.167-3.097 
v-55.961c0-0.979,0.453-1.91,1.2-2.546c0.747-0.625,1.763-0.882,2.717-0.71l28.837,5.41c1.567,0.293,2.705,1.664,2.705,3.256 
V448.868z M65.224,357.129c0,0.931-0.392,1.812-1.089,2.448c-0.612,0.551-1.396,0.845-2.228,0.845c-0.11,0-0.221,0-0.318-0.013 
l-28.837-2.803c-1.702-0.171-2.987-1.591-2.987-3.293v-55.948c0-1.727,1.334-3.158,3.036-3.305l28.85-2.375 
c0.93-0.086,1.824,0.232,2.509,0.856c0.686,0.625,1.065,1.506,1.065,2.424V357.129z M65.224,265.39 
c0,1.604-1.163,2.987-2.754,3.256l-28.837,4.97c-0.196,0.037-0.392,0.049-0.563,0.049c-0.771,0-1.53-0.257-2.13-0.771 
c-0.759-0.625-1.188-1.555-1.188-2.521V214.41c0-1.396,0.894-2.656,2.216-3.121l28.85-10.171c1.016-0.355,2.142-0.208,3.011,0.416 
c0.869,0.624,1.396,1.628,1.396,2.705V265.39z M65.224,173.651c0,1.31-0.759,2.497-1.971,3.023l-28.837,12.778 
c-0.428,0.196-0.894,0.282-1.334,0.282c-0.637,0-1.273-0.184-1.812-0.539c-0.942-0.612-1.506-1.652-1.506-2.766V130.48 
c0-1.15,0.588-2.215,1.555-2.815l28.85-17.981c1.028-0.636,2.301-0.673,3.354-0.085c1.052,0.587,1.701,1.689,1.701,2.889V173.651z 
 M142.679,477.362c0,1.077-0.526,2.094-1.407,2.705c-0.576,0.392-1.236,0.6-1.897,0.6c-0.379,0-0.759-0.061-1.138-0.208 
l-42.693-15.703c-1.31-0.478-2.167-1.714-2.167-3.098v-67.43c0-0.979,0.441-1.909,1.2-2.546c0.759-0.624,1.763-0.881,2.729-0.71 
l42.681,8.018c1.567,0.281,2.705,1.652,2.705,3.243v75.129H142.679z M142.679,364.682c0,0.93-0.392,1.823-1.089,2.447 
c-0.612,0.563-1.395,0.857-2.228,0.857c-0.11,0-0.208,0-0.318-0.013L96.363,363.8c-1.702-0.171-2.987-1.591-2.987-3.292v-67.431 
c0-1.726,1.322-3.158,3.036-3.28l42.681-3.525c0.931-0.086,1.836,0.22,2.521,0.856c0.673,0.625,1.065,1.506,1.065,2.424V364.682z 
 M142.679,252.011c0,1.616-1.163,2.987-2.754,3.269l-42.681,7.368c-0.196,0.024-0.379,0.049-0.563,0.049 
c-0.771,0-1.53-0.269-2.142-0.783c-0.747-0.624-1.175-1.555-1.175-2.521v-67.43c0-1.395,0.881-2.644,2.203-3.109l42.693-15.067 
c1.016-0.355,2.142-0.208,3.011,0.416c0.869,0.625,1.395,1.628,1.395,2.705v75.104H142.679z M142.679,139.342 
c0,1.31-0.783,2.497-1.971,3.023l-42.681,18.911c-0.428,0.196-0.894,0.293-1.346,0.293c-0.637,0-1.261-0.184-1.799-0.538 
c-0.943-0.612-1.506-1.652-1.506-2.779V90.835c0-1.15,0.588-2.215,1.555-2.803l42.693-26.61c1.016-0.636,2.301-0.673,3.354-0.085 
c1.041,0.587,1.701,1.701,1.701,2.888V139.342z M256.511,542.541c0,1.529-1.028,2.839-2.497,3.23l-67.956,17.137 
c-0.27,0.073-0.539,0.098-0.796,0.098c-0.734,0-1.444-0.245-2.032-0.697c-0.808-0.625-1.273-1.579-1.273-2.607V404.718 
c0-1.726,1.31-3.146,3.023-3.305l67.944-5.862c0.918-0.086,1.836,0.232,2.521,0.856c0.686,0.624,1.077,1.506,1.077,2.424v143.71 
H256.511z M256.511,362.919c0,1.774-1.396,3.219-3.17,3.305l-67.944,3.048c-0.049,0.012-0.098,0.012-0.147,0.012 
c-0.857,0-1.677-0.33-2.301-0.918c-0.648-0.624-1.016-1.48-1.016-2.387v-77.491c0-0.894,0.367-1.763,1.016-2.375 
c0.649-0.625,1.506-0.955,2.412-0.918l67.957,2.583c1.762,0.061,3.182,1.531,3.182,3.305v71.837H256.511z M256.511,255.133 
c0,0.93-0.392,1.799-1.065,2.436c-0.624,0.563-1.419,0.869-2.252,0.869c-0.086,0-0.184,0-0.257-0.012l-67.944-5.398 
c-1.726-0.135-3.048-1.567-3.048-3.305v-77.492c0-0.967,0.428-1.885,1.163-2.509c0.734-0.637,1.726-0.906,2.681-0.759 
l67.944,11.041c1.604,0.257,2.791,1.64,2.791,3.268v71.861H256.511z M256.511,147.359c0,0.992-0.453,1.934-1.224,2.57 
c-0.6,0.478-1.334,0.747-2.093,0.747c-0.208,0-0.441-0.024-0.661-0.073l-67.957-13.855c-1.53-0.318-2.644-1.677-2.644-3.244V56 
c0-1.028,0.49-2.007,1.31-2.631c0.833-0.637,1.897-0.833,2.901-0.539l67.944,19.498c1.42,0.404,2.399,1.702,2.399,3.183v71.849 
H256.511z M341.579,521.071c0,1.506-1.027,2.84-2.484,3.207l-54.688,13.819c-0.269,0.049-0.539,0.098-0.808,0.098 
c-0.722,0-1.444-0.245-2.032-0.697c-0.795-0.649-1.273-1.604-1.273-2.632V396.224c0-1.726,1.31-3.158,3.023-3.305l54.811-4.737 
c0.93-0.098,1.836,0.232,2.51,0.845c0.697,0.637,1.076,1.518,1.076,2.436L341.579,521.071z M341.702,359.088 
c0,1.762-1.383,3.23-3.158,3.292l-54.811,2.473c-0.037,0-0.098,0-0.146,0c-0.845,0-1.665-0.318-2.277-0.918 
c-0.661-0.624-1.028-1.481-1.028-2.387v-69.327c0-0.894,0.367-1.763,1.016-2.375c0.649-0.637,1.518-0.967,2.411-0.918l54.81,2.081 
c1.775,0.073,3.184,1.529,3.184,3.292V359.088z M341.702,261.901c0,0.942-0.379,1.812-1.053,2.448 
c-0.625,0.563-1.408,0.869-2.252,0.869c-0.098,0-0.172,0-0.258-0.024l-54.811-4.37c-1.713-0.135-3.048-1.567-3.048-3.28v-69.34 
c0-0.967,0.429-1.885,1.163-2.509c0.734-0.637,1.713-0.906,2.668-0.759l54.811,8.911c1.604,0.257,2.779,1.652,2.779,3.268V261.901 
L341.702,261.901z M341.702,164.728c0,0.991-0.43,1.934-1.225,2.57c-0.6,0.478-1.309,0.747-2.08,0.747 
c-0.221,0-0.453-0.024-0.674-0.061l-54.798-11.188c-1.542-0.306-2.644-1.677-2.644-3.244V84.226c0-1.041,0.49-2.02,1.322-2.644 
c0.82-0.636,1.897-0.82,2.889-0.539l54.81,15.729c1.408,0.404,2.389,1.702,2.389,3.183v64.774H341.702z M432.252,383.653 
c0,1.726-1.309,3.146-3.035,3.305l-42.484,3.672c-0.1,0.013-0.197,0.013-0.283,0.013c-0.807,0-1.627-0.307-2.227-0.869 
c-0.697-0.625-1.078-1.506-1.078-2.424v-91.2c0-0.894,0.355-1.763,1.004-2.375c0.648-0.624,1.531-0.954,2.436-0.918l42.486,1.616 
c1.773,0.073,3.182,1.53,3.182,3.292V383.653z M432.252,269.111c0,0.918-0.379,1.812-1.076,2.423 
c-0.6,0.563-1.408,0.869-2.229,0.869c-0.098,0-0.195,0-0.258,0l-42.508-3.378c-1.727-0.134-3.037-1.566-3.037-3.292v-91.188 
c0-0.991,0.453-1.934,1.225-2.57c0.76-0.624,1.775-0.869,2.754-0.673l42.484,8.666c1.555,0.306,2.656,1.665,2.656,3.244v85.9 
H432.252z M513.038,151.019c0-1.04,0.477-2.02,1.309-2.644c0.809-0.625,1.885-0.82,2.889-0.539l29.045,8.348 
c1.434,0.404,2.412,1.701,2.412,3.17v47.614c0,0.991-0.453,1.934-1.225,2.57c-0.6,0.478-1.334,0.734-2.105,0.734 
c-0.207,0-0.428-0.024-0.648-0.073l-29.07-5.924c-1.529-0.306-2.631-1.665-2.631-3.244v-50.013H513.038z M513.038,226.05 
c0-0.979,0.402-1.897,1.15-2.521c0.746-0.636,1.725-0.894,2.68-0.734l29.07,4.725c1.578,0.257,2.766,1.64,2.766,3.268v47.602 
c0,0.918-0.379,1.787-1.076,2.423c-0.625,0.563-1.408,0.869-2.252,0.869c-0.074,0-0.172,0-0.258-0.012l-29.045-2.301 
c-1.727-0.146-3.035-1.579-3.035-3.305V226.05z M513.038,301.07c0-0.894,0.354-1.763,1.002-2.375 
c0.65-0.624,1.506-0.955,2.412-0.918l29.07,1.113c1.762,0.062,3.182,1.519,3.182,3.306v47.613c0,1.774-1.406,3.219-3.158,3.305 
l-29.068,1.298c-0.051,0.012-0.1,0.012-0.148,0.012c-0.855,0-1.676-0.33-2.301-0.918c-0.648-0.624-1.004-1.48-1.004-2.387V301.07 
H513.038z M503.979,480.092c0,1.518-1.027,2.828-2.484,3.207l-33.904,8.556c-0.258,0.073-0.551,0.11-0.809,0.11 
c-0.746,0-1.457-0.257-2.031-0.71c-0.82-0.624-1.273-1.591-1.273-2.607V380.385c0-1.726,1.285-3.146,3.012-3.305l33.904-2.925 
c0.93-0.099,1.836,0.22,2.51,0.856c0.697,0.624,1.076,1.506,1.076,2.436V480.092z M503.979,351.792 
c0,1.775-1.383,3.231-3.158,3.306l-33.904,1.529c-0.049,0-0.098,0-0.146,0c-0.857,0-1.678-0.318-2.301-0.918 
c-0.65-0.624-1.004-1.48-1.004-2.387v-54.125c0-0.894,0.354-1.763,1.004-2.375c0.648-0.636,1.504-0.967,2.41-0.93l33.904,1.285 
c1.775,0.073,3.184,1.529,3.184,3.316v51.298H503.979z M503.979,274.814c0,0.918-0.379,1.799-1.053,2.424 
c-0.623,0.563-1.432,0.881-2.252,0.881c-0.098,0-0.195-0.012-0.258-0.012l-33.904-2.705c-1.725-0.134-3.035-1.566-3.035-3.305 
v-54.101c0-0.967,0.404-1.885,1.15-2.521c0.734-0.637,1.727-0.894,2.682-0.734l33.904,5.508c1.604,0.257,2.777,1.64,2.777,3.268 
v51.298H503.979z M503.979,197.85c0,0.991-0.453,1.934-1.225,2.558c-0.6,0.489-1.334,0.747-2.08,0.747 
c-0.221,0-0.453-0.024-0.674-0.074l-33.893-6.903c-1.529-0.318-2.631-1.677-2.631-3.256v-54.125c0-1.041,0.477-2.02,1.311-2.644 
c0.807-0.624,1.885-0.82,2.889-0.539l33.891,9.731c1.408,0.404,2.389,1.701,2.389,3.182v51.323H503.979z M547.198,471.757 
l-30.049,7.589c-0.27,0.061-0.551,0.098-0.807,0.098c-0.748,0-1.457-0.245-2.033-0.697c-0.807-0.637-1.271-1.592-1.271-2.62 
V376.089c0-1.714,1.285-3.146,3.01-3.293l29.045-2.509c0.932-0.086,1.838,0.232,2.51,0.832c0.697,0.624,1.078,1.493,1.102,2.411 
l1.004,94.971C549.708,470.031,548.68,471.39,547.198,471.757z`;

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
        "theme": "light",

        "dataProvider": {
            "map": "worldLow",
            "zoomLevel": 1.8,
            "zoomLongitude": 0,
            "zoomLatitude": 0,
            "getAreasFromMap": true,
            

            "lines": linesArray,
            "images": [
                {
                    "id": "office1",
                    "svgPath": officeSvg,
                    "title": "Office - Calgary,Alberta.",
                    "latitude": 51.0483, 
                    "longitude": -114.07104,
                    "color": officeColor,
                    "scale": 0.03
                }, {
                    "id": "office2",
                    "svgPath": officeSvg,
                    "title": "Office - El Salvador.",
                    "latitude": 13.79418, 
                    "longitude": -88.89652,
                    "color": officeColor,
                    "scale": 0.03
                }, {
                    "id": "office3",
                    "svgPath": officeSvg,
                    "title": "Office - Curaçao.",
                    "latitude": 19.50011, 
                    "longitude": -72.8363,
                    "color": officeColor,
                    "scale": 0.03
                }, {
                    "id": "office4",
                    "svgPath": officeSvg,
                    "title": "Office - Colombia.",
                    "latitude": 3.33795, 
                    "longitude": -72.72949,
                    "color": officeColor,
                    "scale": 0.03
                }, {
                    "id": "office5",
                    "svgPath": officeSvg,
                    "title": "Office - Kolkata, India.",
                    "latitude": 22.58358,
                    "longitude": 88.37402,
                    "color": officeColor,
                    "scale": 0.03
                },
                
                
                
                
                
                {
                "svgPath": factorySvg,
                "title": "Kingdom Lubricants",
                "latitude": 26.52713,
                "longitude": startLng,
                "color": "#ff6600",
                "scale": 0.05
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
                "flipDirection": false,
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
                "flipDirection": false,
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
                "flipDirection": false,
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
                "flipDirection": false,
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
                "flipDirection": false,
                "loop": true,
                "scale": 0.05,
                "positionScale": 1.5
            }, {
                "id": "plane6",
                "svgPath": arrow,
                "positionOnLine": 0,
                "color": planeColor,
                "lineId": "line6",
                "flipDirection": false,
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
                "flipDirection": false,
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
                "flipDirection": false,
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
                "flipDirection": false,
                "loop": true,
                "scale": 0.05,
                "positionScale": 1.5
            },
            
            
            
            
            ]
        },

        "areasSettings": {
            "color": "#ccffcc",
            "outlineColor": "rgba(80,80,80,0.3)",
            "rollOverOutlineColor": "rgba(80,80,80,0.4)",
            "rollOverColor": "#e6ffe6",
            "unlistedAreasAlpha": 0,
            "unlistedAreasOutlineAlpha": 0
        },

        "imagesSettings": {
            "color": targetColor,
            "rollOverColor": "#585869",
            "selectedColor": "#585869",
            "pauseDuration": 0.6,
            "animationDuration": 5,
            "adjustAnimationSpeed": true
        },

        "linesSettings": {
            "color": "#515254",
            "alpha": 0.4
        }

    });
});