<!-- 
TEAM 18
YAO PAN
777241
MIN-YING CHEN
779101
JINGFENG ZHANG
755121
SIYU FENG
745399
LIANYU ZENG
733863
 -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" href="media/aus.png">

<title>Heatmap | Team 18</title>

<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="assets/css/main.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/icomoon.css">
<link href="assets/css/animate-custom.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
<script type="text/javascript" src="assets/js/canvasjs.min.js"></script>

<script type="text/javascript"
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFed46IMeMrwaFc41m5Q1oKYDQ9NVoyXY&libraries=visualization">
    </script>

<link
	href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic'
	rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700'
	rel='stylesheet' type='text/css'>


<script type="text/javascript">
var geocoder = new google.maps.Geocoder();
//Call Geocode function
function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('Cannot determine address.');
    }
  });
}
//Update marker status
function updateMarkerStatus(str) {
  document.getElementById('markerStatus').innerHTML = str;
}
//Update marker latlng
function updateMarkerPosition(latLng) {
  document.getElementById('info').innerHTML = [
    latLng.lat(),
    latLng.lng()
  ].join(', ');
}
//Update address
function updateMarkerAddress(str) {
  document.getElementById('address').innerHTML = str;
  var postcode = str.substr(-15,4);
}

function initialize() {
  var latLng = new google.maps.LatLng(-37.7987543800981, 144.9604736848023);
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom: 6,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var marker = new google.maps.Marker({
    position: latLng,
    title: 'Point A',
    map: map,
    draggable: true
  });
  
  // Update current position info.
  updateMarkerPosition(latLng);
  geocodePosition(latLng);
  
  // Add dragging event listeners.
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Dragging...');
  });
  
  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerStatus('Dragging...');
    updateMarkerPosition(marker.getPosition());
  });
  
  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerStatus('Drag ended');
    geocodePosition(marker.getPosition());
  });
  //Change Heat map radius and color 
  var heatmap = new google.maps.visualization.HeatmapLayer({
	    data: getPoints(),
	    radius:35,
	    gradient: [
	               'rgba(0, 255, 255, 0)',
	               'rgba(0, 255, 255, 1)',
	               'rgba(0, 191, 255, 1)',
	               'rgba(0, 127, 255, 1)',
	               'rgba(0, 63, 255, 1)',
	               'rgba(0, 0, 255, 1)',
	               'rgba(0, 0, 223, 1)',
	               'rgba(0, 0, 191, 1)',
	               'rgba(0, 0, 159, 1)',
	               'rgba(0, 0, 127, 1)',
	               'rgba(63, 0, 91, 1)',
	               'rgba(127, 0, 63, 1)',
	               'rgba(191, 0, 31, 1)',
	               'rgba(255, 0, 0, 1)'
	             ],
	    map: map
	  });
  var rate = (noAccidents-MIN_NO_ACC)/(MAX_NO_ACC-MIN_NO_ACC+1);
  console.log(rate);
var gradient = [
    'rgba('+Math.round(255*rate)+', '+Math.round(255*(1-rate))+', 0, 0)',
    'rgba('+Math.round(255*rate)+', '+Math.round(255*(1-rate))+', 0, 1)'];
heatmap.set('gradient', gradient);
}

//Get heatmap latlng 
function getPoints() {
	  return [
	new google.maps.LatLng(-38.33339246, 144.70377498),
	new google.maps.LatLng(-38.19602585, 144.34304813),
	new google.maps.LatLng(-38.17234228, 144.71500489),
	new google.maps.LatLng(-38.15802104, 144.35360631),
	new google.maps.LatLng(-38.15557128, 144.37817641),
	new google.maps.LatLng(-38.15557124, 144.3781764),
	new google.maps.LatLng(-38.15279012, 144.36042774),
	new google.maps.LatLng(-38.1506173, 144.3603286),
	new google.maps.LatLng(-38.14894104, 145.11772156),
	new google.maps.LatLng(-38.14894055, 145.11772223),
	new google.maps.LatLng(-38.14605605, 145.12304054),
	new google.maps.LatLng(-38.142711, 145.118915),
	new google.maps.LatLng(-38.08958394, 144.3613941),
	new google.maps.LatLng(-38.08919363, 144.3614915),
	new google.maps.LatLng(-38.05440004, 145.40560427),
	new google.maps.LatLng(-38.05273256, 145.37993079),
	new google.maps.LatLng(-38.03748919, 145.33841141),
	new google.maps.LatLng(-38.03559922, 145.33507875),
	new google.maps.LatLng(-38.0332445, 145.34596333),
	new google.maps.LatLng(-38.02741124, 144.47325484),
	new google.maps.LatLng(-38.02673006, 144.47238257),
	new google.maps.LatLng(-38.02462896, 145.3056455),
	new google.maps.LatLng(-38.0239046, 145.313399),
	new google.maps.LatLng(-38.01944844, 145.2998785),
	new google.maps.LatLng(-38.0191, 145.299545),
	new google.maps.LatLng(-38.00624149, 145.31559036),
	new google.maps.LatLng(-37.991389, 145.216158),
	new google.maps.LatLng(-37.98833, 145.214096),
	new google.maps.LatLng(-37.97373947, 145.1448749),
	new google.maps.LatLng(-37.951837, 145.150401),
	new google.maps.LatLng(-37.943245, 145.183234),
	new google.maps.LatLng(-37.94025711, 145.13613375),
	new google.maps.LatLng(-37.93444, 145.035824),
	new google.maps.LatLng(-37.93325041, 145.43830554),
	new google.maps.LatLng(-37.92825329, 145.07041931),
	new google.maps.LatLng(-37.92676262, 145.11925536),
	new google.maps.LatLng(-37.9115858, 145.05452092),
	new google.maps.LatLng(-37.91158274, 145.054521),
	new google.maps.LatLng(-37.9115352, 145.05459411),
	new google.maps.LatLng(-37.91148377, 145.05457246),
	new google.maps.LatLng(-37.9076535, 145.06992483),
	new google.maps.LatLng(-37.90722398, 145.06999282),
	new google.maps.LatLng(-37.90508724, 145.30777355),
	new google.maps.LatLng(-37.9049724, 145.32999305),
	new google.maps.LatLng(-37.88130132, 145.16469559),
	new google.maps.LatLng(-37.87728198, 145.08076206),
	new google.maps.LatLng(-37.8438416, 144.8829956),
	new google.maps.LatLng(-37.83216284, 145.05617917),
	new google.maps.LatLng(-37.83214591, 145.05627632),
	new google.maps.LatLng(-37.821196, 144.962123),
	new google.maps.LatLng(-37.82115868, 144.96633986),
	new google.maps.LatLng(-37.821032, 144.966704),
	new google.maps.LatLng(-37.82100591, 144.96673561),
	new google.maps.LatLng(-37.8209655, 144.96639121),
	new google.maps.LatLng(-37.82096393, 144.96773067),
	new google.maps.LatLng(-37.82092, 144.966635),
	new google.maps.LatLng(-37.82090456, 144.96420446),
	new google.maps.LatLng(-37.82079101, 144.96652091),
	new google.maps.LatLng(-37.818001, 144.969601),
	new google.maps.LatLng(-37.817961, 144.969709),
	new google.maps.LatLng(-37.814837, 145.237626),
	new google.maps.LatLng(-37.79231987, 144.99983101),
	new google.maps.LatLng(-37.768609, 144.959657),
	new google.maps.LatLng(-37.76584928, 144.92816951),
	new google.maps.LatLng(-37.7474783, 144.9145107),
	new google.maps.LatLng(-37.745118, 144.96537),
	new google.maps.LatLng(-37.74508244, 144.96560311),
	new google.maps.LatLng(-37.7449652, 144.9654066),
	new google.maps.LatLng(-37.744919, 144.965335),
	new google.maps.LatLng(-37.744849, 144.965181),
	new google.maps.LatLng(-37.7432298, 144.9644748),
	new google.maps.LatLng(-37.7338947, 144.9781563),
	new google.maps.LatLng(-37.7338931, 144.9781355),
	new google.maps.LatLng(-37.7338525, 144.9781311),
	new google.maps.LatLng(-37.73385, 144.978128),
	new google.maps.LatLng(-37.7338467, 144.9781174),
	new google.maps.LatLng(-37.72515713, 144.89398869),
	new google.maps.LatLng(-37.688205, 145.108495),
	new google.maps.LatLng(-37.67348325, 144.84349295),
	new google.maps.LatLng(-37.67254201, 144.84399462),
	new google.maps.LatLng(-37.66813979, 144.85162983),
	new google.maps.LatLng(-37.56220721, 143.85322611),
	new google.maps.LatLng(-37.56159497, 143.85746596),
	new google.maps.LatLng(-37.56151806, 143.85757629),
	new google.maps.LatLng(-37.56150669, 143.85740733),
	new google.maps.LatLng(-37.56142678, 143.85770091),
	new google.maps.LatLng(-37.56141099, 143.85776896),
	new google.maps.LatLng(-37.56036693, 143.86686143),
	new google.maps.LatLng(-37.55850262, 143.84374293),
	new google.maps.LatLng(-37.55845364, 143.84373465),
	new google.maps.LatLng(-37.55843736, 143.84365006),
	new google.maps.LatLng(-37.55833174, 143.84377904),
	new google.maps.LatLng(-37.55826628, 143.8437343),
	new google.maps.LatLng(-37.55823598, 143.8437866),
	new google.maps.LatLng(-37.55823574, 143.84378626),
	new google.maps.LatLng(-37.55820394, 143.84387659),
	new google.maps.LatLng(-37.55819222, 143.84367522),
	new google.maps.LatLng(-37.55818505, 143.84359804),
	new google.maps.LatLng(-37.55817425, 143.84346225),
	new google.maps.LatLng(-37.55816353, 143.84375538),
	new google.maps.LatLng(-37.55815478, 143.84364987),
	new google.maps.LatLng(-37.55815151, 143.84386029),
	new google.maps.LatLng(-37.55814886, 143.84379786),
	new google.maps.LatLng(-37.55814604, 143.84376965),
	new google.maps.LatLng(-37.55814464, 143.84369359),
	new google.maps.LatLng(-37.55813712, 143.84369602),
	new google.maps.LatLng(-37.55812985, 143.84379727),
	new google.maps.LatLng(-37.55812472, 143.84377396),
	new google.maps.LatLng(-37.55811917, 143.84355262),
	new google.maps.LatLng(-37.55811847, 143.84381617),
	new google.maps.LatLng(-37.55811147, 143.84364906),
	new google.maps.LatLng(-37.55810318, 143.84362336),
	new google.maps.LatLng(-37.55808448, 143.84366718),
	new google.maps.LatLng(-37.5580589, 143.84348882),
	new google.maps.LatLng(-37.55804817, 143.84367616),
	new google.maps.LatLng(-37.55798316, 143.84379352),
	new google.maps.LatLng(-37.55797896, 143.84374917),
	new google.maps.LatLng(-37.55797102, 143.84358044),
	new google.maps.LatLng(-37.48408186, 143.80286832),
	new google.maps.LatLng(-37.29462507, 143.78565452),
	new google.maps.LatLng(-37.18840597, 144.40917076),
	new google.maps.LatLng(-37.14111028, 144.25258116),
	new google.maps.LatLng(-37.07915259, 144.25689911),
	new google.maps.LatLng(-37.0530521, 144.21591218),
	new google.maps.LatLng(-36.81041249, 144.24302332),
	new google.maps.LatLng(-36.80088424, 144.24647522),
	new google.maps.LatLng(-36.76158063, 144.27774181),
	new google.maps.LatLng(-36.76145311, 144.28315868),
	new google.maps.LatLng(-36.76120161, 144.28359286),
	new google.maps.LatLng(-36.76117549, 144.28358447),
	new google.maps.LatLng(-36.76002524, 144.28048564),
	new google.maps.LatLng(-36.75922029, 144.28247094),
	new google.maps.LatLng(-36.75873169, 144.27937724),
	new google.maps.LatLng(-36.75841347, 144.28107905),
	new google.maps.LatLng(-36.75489063, 144.28709248),
	new google.maps.LatLng(-36.71985056, 144.25518782),
	new google.maps.LatLng(-36.53233662, 143.79796987),
	new google.maps.LatLng(-36.44115056, 145.35721024),
	new google.maps.LatLng(-36.44097346, 145.35719041),
	new google.maps.LatLng(-36.44065742, 145.35720374),
	new google.maps.LatLng(-36.44063035, 145.35723606),
	new google.maps.LatLng(-36.44026683, 145.35724086),
	new google.maps.LatLng(-36.40848767, 145.39212613),
	new google.maps.LatLng(-36.38311726, 145.39878013),
	new google.maps.LatLng(-36.38301541, 145.39860154),
	new google.maps.LatLng(-36.38295192, 145.39894738),
	new google.maps.LatLng(-36.38290697, 145.39866228),
	new google.maps.LatLng(-35.31514318, 149.1314145),
	new google.maps.LatLng(-35.31498484, 149.13152914),
	new google.maps.LatLng(-35.31478151, 149.1312909),
	new google.maps.LatLng(-35.310909, 149.1321454),
	new google.maps.LatLng(-35.31046602, 149.12454336),
	new google.maps.LatLng(-35.31046569, 149.12447622),
	new google.maps.LatLng(-35.30926872, 149.1247773),
	new google.maps.LatLng(-35.309239, 149.125294),
	new google.maps.LatLng(-35.309064, 149.12385),
	new google.maps.LatLng(-35.30887646, 149.09494472),
	new google.maps.LatLng(-35.3087769, 149.12468391),
	new google.maps.LatLng(-35.30872897, 149.12486094),
	new google.maps.LatLng(-35.30859087, 149.12506929),
	new google.maps.LatLng(-35.30856416, 149.12480416),
	new google.maps.LatLng(-35.30853471, 149.1249787),
	new google.maps.LatLng(-35.30853142, 149.12487994),
	new google.maps.LatLng(-35.30850219, 149.12491403),
	new google.maps.LatLng(-35.308485, 149.12595),
	new google.maps.LatLng(-35.30848409, 149.12492106),
	new google.maps.LatLng(-35.30840599, 149.12499053),
	new google.maps.LatLng(-35.30811, 149.12448),
	new google.maps.LatLng(-35.308, 149.125),
	new google.maps.LatLng(-35.3076716, 149.1242085),
	new google.maps.LatLng(-35.30765542, 149.12424434),
	new google.maps.LatLng(-35.307374, 149.124651),
	new google.maps.LatLng(-35.307335, 149.125015),
	new google.maps.LatLng(-35.30699183, 149.1294378),
	new google.maps.LatLng(-35.29423388, 149.18942232),
	new google.maps.LatLng(-35.24017274, 149.0706125),
	new google.maps.LatLng(-33.87728754, 151.20399503),
	new google.maps.LatLng(-33.87315841, 151.20606708),
	new google.maps.LatLng(-33.82879007, 151.21426245),
	new google.maps.LatLng(-31.93819358, 115.86391582),
	new google.maps.LatLng(-27.47143432, 153.03028328),
	new google.maps.LatLng(-19.2559944, 146.77057141),
	new google.maps.LatLng(-12.37861473, 136.8214407),
	new google.maps.LatLng(-9.4500909, 147.21654),
	new google.maps.LatLng(-9.444109, 147.2133623),
	new google.maps.LatLng(23.38392735, 113.30065622),
	new google.maps.LatLng(38.90542183, -77.03452585),
	new google.maps.LatLng(38.90565963, -77.03422474),
	new google.maps.LatLng(38.90566184, -77.03417686),
	new google.maps.LatLng(38.90566262, -77.03425197),
	new google.maps.LatLng(38.905668, -77.03422867),
	new google.maps.LatLng(38.90570328, -77.03425241),
	new google.maps.LatLng(38.90833623, -77.03468152),
	new google.maps.LatLng(38.90857103, -77.03476778),
	new google.maps.LatLng(38.90869167, -77.0350416),
	new google.maps.LatLng(40.74900077, -73.96780005),
	new google.maps.LatLng(40.749001, -73.96780397),
	new google.maps.LatLng(40.74901982, -73.96778716),
	new google.maps.LatLng(40.74939988, -73.96740195),
	new google.maps.LatLng(40.74963068, -73.96719615),
	new google.maps.LatLng(40.75024789, -73.97678344),
	new google.maps.LatLng(40.75030961, -73.97544352),
	new google.maps.LatLng(40.75038508, -73.96757182),
	new google.maps.LatLng(40.75039197, -73.97560127),
	new google.maps.LatLng(40.75044426, -73.97564795),
	new google.maps.LatLng(40.75048218, -73.97567401),
	new google.maps.LatLng(40.75051687, -73.97559195),
	new google.maps.LatLng(40.75060263, -73.97569861),
	new google.maps.LatLng(40.75062265, -73.97582436),
	new google.maps.LatLng(40.75063693, -73.97585402),
	new google.maps.LatLng(40.7506426, -73.97569222),
	new google.maps.LatLng(40.75069784, -73.97571614),
	new google.maps.LatLng(40.7507698, -73.97573669),
	new google.maps.LatLng(40.75079273, -73.97613325),
	new google.maps.LatLng(40.75113089, -73.97624527),
	new google.maps.LatLng(40.7648887, -73.96266402),
	new google.maps.LatLng(40.76490953, -73.96273827),
	new google.maps.LatLng(40.76494531, -73.9629464),
	new google.maps.LatLng(40.76498331, -73.9632002),
	new google.maps.LatLng(46.23032505, 6.10681485),
	new google.maps.LatLng(46.23132923, 6.13201925),
	new google.maps.LatLng(52.505483, 13.38174),
	new google.maps.LatLng(52.505506, 13.381328)
	  ];
	}
// Onload handler to fire off the app.
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<style>
#mapCanvas {
	width: 60%;
	height: 100%;
	float: left;
}

#infoPanel {
	float: left;
	margin-left: 10px;
}

#infoPanel div {
	margin-bottom: 5px;
}

.loco {
	height: 200px;
	width: 470px;
	overflow-y: scroll;
	font-size: 11px;
}

@media only screen and (max-width: 980px) , only screen and
	(max-device-width: 980px) {
	#mapCanvas {
		width: 100%;
		height: 60%;
		float: left;
	}
	.loco {
		height: 300px;
		width: 600px;
		overflow-y: scroll;
		font-size: 14px;
	}
	
}
</style>
</head>
<body data-spy="scroll" data-offset="0" data-target="#navbar-main">
	<div id="navbar-main">
		<!-- Fixed navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".navbar-collapse">
						<img src="media/bar-menu.png" style="width: 30px; height: 30px;">

					</button>

				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="index.html" class="smoothScroll">Home</a></li>
						<li><a href="atsign.html" class="smoothScroll">User Mention</a></li>
						<li><a href="hashtag.html" class="smoothScroll">Hashtag</a></li>
						<li><a href="words.php" class="smoothScroll">Word</a></li>
						<li><a href="vic.php" class="smoothScroll"> Emotion Map</a></li>
						<li><a href="heatmap.php" class="smoothScroll"> Heatmap</a></li>
						<li><a href="voting.php" class="smoothScroll">Voting Intention</a></li>
						<li><a href="sentiment.html" class="smoothScroll">Sentiment</a></li>
						<li><a href="income.php" class="smoothScroll">Privacy</a></li>
						<li><a href="lang.html" class="smoothScroll">Language</a></li>
					</ul>
				</div>
				<!--/.nav-collapse -->

			</div>
		</div>
	</div>
	<p style="height: 40px;">&nbsp;</p>

	<div id="mapCanvas"></div>
	<div id="infoPanel" style="width:35%;">
		<p>&nbsp;</p>
		
		<div id="markerStatus" style="display:none;">
			<i>Click and drag the marker.</i>
		</div>
		<b>Current position:</b>
		<div id="info"></div>
		<b>Closest matching address:</b>
		<div id="address"></div>
		<p>
			<b>Assumption</b><br /> We expect to see the politicians to disable the
			location service on Twitter to protect their privacy.
		</p>
		<p>
			<b>Result</b><br /> As expected, most of the Tweets from the politicians are
			geo disabled. Only 227 of the 62,201 tweets from the politician is
			geo enabled.
		</p>
		
		<hr />
		<p>
			<b>Location Information</b>
		</p>

		<div class="loco">
			<p>
				Farnsworth Track, Portsea VIC 3944, Australia &nbsp; ( National Park
				) <br /> 188 Marshalltown Rd, Grovedale VIC 3216, Australia &nbsp; (
				Lee's Roof Treatment ) <br /> 1342 Murradoc Rd, St Leonards VIC
				3223, Australia &nbsp; ( Residential ) <br /> 10 Kilgour St, South
				Geelong VIC 3220, Australia &nbsp; ( National Park ) <br /> 7
				Frederick St, East Geelong VIC 3219, Australia &nbsp; ( Residential
				) <br /> 77 Little Myers St, Geelong VIC 3220, Australia &nbsp; (
				Residential ) <br /> 55 Little Ryrie St, Geelong VIC 3220, Australia
				&nbsp; ( Residential ) <br /> 5 Nolan St, Frankston VIC 3199,
				Australia &nbsp; ( Residential ) <br /> 35R Davey St, Frankston VIC
				3199, Australia &nbsp; ( Frankston Arts Centre ) <br /> 75 Wells St,
				Frankston VIC 3199, Australia &nbsp; ( South East Water ) <br /> 39
				Rose Ave, Norlane VIC 3214, Australia &nbsp; ( National Park ) <br />
				65-85 Bayview Rd, Officer VIC 3809, Australia &nbsp; ( Farm ) <br />
				8-18 Oneil Rd, Officer VIC 3809, Australia &nbsp; ( Beaconsfield
				Neighbourhood Centre ) <br /> 23 Intrepid St, Berwick VIC 3806,
				Australia &nbsp; ( Commercial ) <br /> LOT 16 Hatfield Dr, Berwick
				VIC 3806, Australia &nbsp; ( Commercial ) <br /> 15C Langmore Ln,
				Berwick VIC 3806, Australia &nbsp; ( Residential ) <br /> 80 Beach
				Rd, Avalon VIC 3212, Australia &nbsp; ( Airport ) <br /> 53 Webb St,
				Narre Warren VIC 3805, Australia &nbsp; ( Commercial ) <br /> 56-58
				Victor Cres, Narre Warren VIC 3805, Australia &nbsp; ( Commercial )
				<br /> Patrick NE Dr, Narre Warren VIC 3805, Australia &nbsp; (
				National Park ) <br /> 19-23 Rozzy Parade, Narre Warren VIC 3805,
				Australia &nbsp; ( Oatlands Primary School ) <br /> 35-39 Pultney
				St, Dandenong VIC 3175, Australia &nbsp; ( Dandenong Police Station
				) <br /> 229 Lonsdale St, Dandenong VIC 3175, Australia &nbsp; (
				Greater Dandenong City Council ) <br /> 159-171 Clarke Rd,
				Springvale South VIC 3172, Australia &nbsp; (Cambodian Buddhist
				Association) <br /> 8 Windsor Ave, Springvale VIC 3171, Australia
				&nbsp; ( Springvale Central Medical Dental Centre ) <br /> Sixth Rd,
				Springvale VIC 3171, Australia &nbsp; ( Springvale Botanical
				Cemetery ) <br /> 100-120 Rosebank Ave, Clayton South VIC 3169,
				Australia &nbsp; ( Residential ) <br /> 999 Nepean Hwy, Moorabbin
				VIC 3189, Australia &nbsp; ( Kingston City Hall ) <br /> 3 Memorial
				Ave, Emerald VIC 3782, Australia &nbsp; ( Emerald Puffing Billy
				Railway ) <br /> 167 Bignell Rd, Bentleigh East VIC 3165, Australia
				&nbsp; ( Residential ) <br /> 367-369 Clayton Rd, Clayton VIC 3168,
				Australia &nbsp; ( Clayton's Fresh Fruit Mart ) <br /> 15 Lancaster
				St, Bentleigh East VIC 3165, Australia &nbsp; ( Residential ) <br />
				992 North Rd, Bentleigh East VIC 3165, Australia &nbsp; (
				Residential ) <br /> Ferndale Rd, Upper Ferntree Gully VIC 3156,
				Australia &nbsp; ( National Park ) <br /> 14 Morris Rd, Upwey VIC
				3158, Australia &nbsp; ( Residential ) <br /> 185 Coleman Parade,
				Glen Waverley VIC 3150, Australia &nbsp; ( Commercial ) <br />
				Monash Fwy, Malvern East VIC 3145, Australia &nbsp; ( Monash Freeway
				) <br /> 1 Market St, Newport VIC 3015, Australia &nbsp; (
				Williamstown Football Club ) <br /> 695 Burke Rd, Camberwell VIC
				3124, Australia &nbsp; ( Josh Frydenberg MP ) <br /> 1 Southbank
				Blvd, Southbank VIC 3006, Australia &nbsp; ( Commercial ) <br /> 40
				Yarra Bank Hwy, Southbank VIC 3006, Australia &nbsp; ( Commercial )
				<br /> 28 Southgate Ave, Southbank VIC 3006, Australia &nbsp; (
				Commercial ) <br /> 8-10 Riverside Quay, Southbank VIC 3006,
				Australia &nbsp; ( Commercial ) <br /> 1 Batman Ave, Melbourne VIC
				3000, Australia &nbsp; ( ZINC Federation Square ) <br /> 39 Pitt St,
				Ringwood VIC 3134, Australia &nbsp; ( Residential ) <br /> 6 Dally
				St, Clifton Hill VIC 3068, Australia &nbsp; ( Residential ) <br />
				Upfield Bike Path, Brunswick VIC 3056, Australia &nbsp; ( Upfield
				Bike Path ) <br /> 17 Coats St, Moonee Ponds VIC 3039, Australia
				&nbsp; ( Residential ) <br /> 22 Marco Polo St, Essendon VIC 3040,
				Australia &nbsp; ( Residential ) <br /> 3 Munro St, Coburg VIC 3058,
				Australia &nbsp; ( Kelvin Thomson MP ) <br /> 21A Victoria St,
				Coburg VIC 3058, Australia &nbsp; ( Uniting Church in Australia
				Coburg ) <br /> 18 Julius St, Coburg North VIC 3058, Australia
				&nbsp; ( Residential ) <br /> Nomad Rd, Essendon Fields VIC 3042,
				Australia &nbsp; ( Airport ) <br /> 23-29 Civic Dr, Greensborough
				VIC 3088, Australia &nbsp; ( Commercial ) <br /> Airside Rd,
				Melbourne Airport VIC 3045, Australia &nbsp; ( Airport ) <br /> 1
				Dawson St S, Ballarat VIC 3350, Australia &nbsp; ( Commercial ) <br />
				202A Sturt St, Ballarat VIC 3350, Australia &nbsp; ( Commercial ) <br />
				5 Lydiard St N, Ballarat VIC 3350, Australia &nbsp; ( Commercial ) <br />
				52 Humffray St N, Ballarat East VIC 3350, Australia &nbsp; (
				Commercial ) <br /> 1113 Mair St, Ballarat VIC 3350, Australia
				&nbsp; ( Residential ) <br /> 15 Raglan St, Miners Rest VIC 3352,
				Australia &nbsp; ( Residential ) <br /> 100 Bailey St, Clunes VIC
				3370, Australia &nbsp; ( Clunes Post Office ) <br /> LOT 1 Old
				Quarry Rd, Malmsbury VIC 3446, Australia &nbsp; ( Farm ) <br /> 39
				White Quartz Rd, Fryerstown VIC 3451, Australia &nbsp; ( Farm ) <br />
				LOT 218A Walkers St, Chewton VIC 3451, Australia &nbsp; ( Farm ) <br />
				Downes Rd, Castlemaine VIC 3450, Australia &nbsp; ( National Park )
				<br /> 283 High St, Kangaroo Flat VIC 3555, Australia &nbsp; (
				Commercial ) <br /> 24-28 Chapel St, Kangaroo Flat VIC 3555,
				Australia &nbsp; ( Residential ) <br /> 402 Hargreaves St, Bendigo
				VIC 3550, Australia &nbsp; ( Commercial ) <br /> 11 Myers St,
				Bendigo VIC 3550, Australia &nbsp; ( Commercial ) <br /> 295
				Hargreaves St, Bendigo VIC 3550, Australia &nbsp; ( Commercial ) <br />
				231 Lyttleton Terrace, Bendigo VIC 3550, Australia &nbsp; (
				Centrelink ) <br /> 1 Pall Mall, Bendigo VIC 3550, Australia &nbsp;
				( Commercial ) <br /> 22 CHANCERY Ln, Bendigo VIC 3550, Australia
				&nbsp; ( Commercial ) <br /> 64 Baxter St, Bendigo VIC 3550,
				Australia &nbsp; ( Commercial ) <br /> Coral Sea Dr, Garbutt QLD
				4814, Australia &nbsp; ( Airport ) <br /> 5328 Calder Hwy, Kurting
				VIC 3517, Australia &nbsp; ( Farm ) <br /> 35-37 Arcadia Downs Dr,
				Kialla VIC 3631, Australia &nbsp; ( Residential ) <br /> 15
				Riverview Dr, Kialla VIC 3631, Australia &nbsp; ( Residential ) <br />
				7 Vaughan St, Shepparton VIC 3630, Australia &nbsp; ( Middy's ) <br />
				406-420 Wyndham St, Shepparton VIC 3630, Australia &nbsp; (
				Commercial ) <br /> 8 Dominion Circuit, Forrest ACT 2603, Australia
				&nbsp; ( Residential ) <br /> 19 National Circuit, Barton ACT 2600,
				Australia &nbsp; ( Australian National Audit Office ) <br />
				Parliament Dr, Capital Hill ACT 2600, Australia &nbsp; ( Parliament
				House ) <br /> 20 Schomburgk St, Yarralumla ACT 2600, Australia
				&nbsp; ( Residential ) <br /> 1 Capital Cir, Capital Hill ACT 2600,
				Australia &nbsp; ( Parliament House ) <br /> 1 State Cir, Barton ACT
				2600, Australia &nbsp; ( Parliament House ) <br /> Majura Rd,
				Canberra International Airport ACT 2609, Australia &nbsp; ( Airport
				) <br /> 51 Chandler St, Belconnen ACT 2617, Australia &nbsp; (
				Commercial ) <br /> 14-20 Dixon St, Sydney NSW 2000, Australia
				&nbsp; ( Commercial ) <br /> 456 Kent St, Sydney NSW 2000, Australia
				&nbsp; ( City of Sydney Council ) <br /> LOT 6 Warringah Fwy,
				Cammeray NSW 2062, Australia &nbsp; ( National Park ) <br /> LOT 288
				William St, Perth WA 6000, Australia &nbsp; ( National Park ) <br />
				39 Edward St, Brisbane QLD 4000, Australia &nbsp; ( Commercial ) <br />
				Coral Sea Dr, Garbutt QLD 4814, Australia &nbsp; ( Airport ) <br />
				Port Bradshaw Rd, East Arnhem NT 0822, Australia &nbsp; ( Freeway )
				<br /> Jacksons Parade, Port Moresby, Papua New Guinea &nbsp; (
				Freeway ) <br /> Ji Chang Da Dao Xi, Huadu Qu, Guangzhou Shi,
				Guangdong Sheng, China &nbsp; ( Airport ) <br /> 1177 15th St NW,
				Washington, DC 20005, USA &nbsp; ( Hotel ) <br /> 1310-1330 15th St
				NW, Washington, DC 20005, USA &nbsp; ( Commercial ) <br /> 1500-1520
				O St NW, Washington, DC 20005, USA &nbsp; ( Residential ) <br /> 762
				1st Avenue, New York, NY 10017, USA &nbsp; ( United Nations ) <br />
				FDR Drive, New York, NY 10017, USA &nbsp; ( United Nations ) <br />
				133-145 E 40th St, New York, NY 10016, USA &nbsp; ( Commercial ) <br />
				140-198 E 41st St, New York, NY 10017, USA &nbsp; ( Commercial ) <br />
				752 United Nations Plaza, New York, NY 10017, USA &nbsp; ( United
				Nations ) <br /> 129-199 E 41st St, New York, NY 10168, USA &nbsp; (
				Commercial ) <br /> 150 E 42nd St, New York, NY 10017, USA &nbsp; (
				Commercial ) <br /> 375 Lexington Ave, New York, NY 10017, USA
				&nbsp; ( Commercial ) <br /> 201-279 E 65th St, New York, NY 10065,
				USA &nbsp; ( Commercial ) <br /> 201 E 65th St, New York, NY 10065,
				USA &nbsp; ( Commercial ) <br /> 200 E 65th St, New York, NY 10065,
				USA &nbsp; ( Commercial ) <br /> Route de l'Aeroport 17, 1215
				Meyrin, Switzerland &nbsp; ( Airport ) <br /> Route des Morillons
				17, 1218 Le Grand-Saconnex, Switzerland &nbsp; ( Commercial ) <br />
				Stresemannstrabe 92, 10963 Berlin, Germany &nbsp; ( Commercial ) <br />
			</p>
		</div>
	</div>


	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery-func.js"></script>
</body>
</html>