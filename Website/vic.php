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

<title>Hashtag Result- Team 18</title>

<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/icomoon.css">
<link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/animate-custom.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<script type="text/javascript" src="assets/js/jquery-func.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
<script type="text/javascript" src="assets/js/canvasjs.min.js"></script>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="assets/js/loader.js"></script>
<link
	href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic'
	rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700'
	rel='stylesheet' type='text/css'>



<style>
html, body {
	height: 100%;
	margin: 0;
	padding: 0;
}

#map {
	width: 60%;
	height: 100%;
	float: left;
}
/*adjust map size in smaller screen resolution*/ 
@media only screen and (max-width: 900px) , only screen and
	(max-device-width: 900px) {
	#map {
		width: 100%;
		height: 50%;
		float: left;
	}
}

.mpp {
	width: 105px;
	height: 95px;
	padding-left: 30px;
}
</style>

<script type="text/javascript">
//generate 14 MPs' emotion column and line charts
       google.charts.load('current', {packages: ['corechart', 'bar']});
       google.charts.setOnLoadCallback(drawStacked);
       function drawStacked() {
			var data1 = google.visualization.arrayToDataTable([ // Mallee
			            ['Month', 'Positive', 'Negative'],
			            ['Morning',   14,      1],
			            ['Afternoon',  0,      0],
			            ['Night',     24,      5]
			]);
			      
			var data2 = new google.visualization.arrayToDataTable([
			            ['Month', 'Positive', 'Negative'],
			            ['01',  5,      1],
			            ['02',  2,      1],
			            ['03',  4,      0],
			            ['04',  5,      0],
			            ['05',  3,      0],
			            ['06',  3,      2],
			            ['07',  0,      2],
			            ['08',  3,      1],
			            ['09',  3,      0],
			            ['10',  2,      0],
			            ['11',  0,      0],
			            ['12',  8,      1]
			]);
			 
			 
			var data3 = google.visualization.arrayToDataTable([ // Ballarat
			            ['Month', 'Positive', 'Negative'],
			            ['Morning',   71,     30],
			            ['Afternoon',  1,      1],
			            ['Night',    200,     76]
			]);
			      
			var data4 = new google.visualization.arrayToDataTable([
			            ['Month', 'Positive', 'Negative'],
			            ['01',  14,      1],
			            ['02',  27,      6],
			            ['03',  35,      5],
			            ['04',  19,      2],
			            ['05',  17,     16],
			            ['06',   9,     19],
			            ['07',  15,     12],
			            ['08',  31,      8],
			            ['09',  27,     10],
			            ['10',  29,      5],
			            ['11',  26,     12],
			            ['12',  23,     11]
			]);
			 
			                                     		
			var data5 = google.visualization.arrayToDataTable([ // Corio
			            ['Month', 'Positive', 'Negative'],
			            ['Morning',   88,     12],
			            ['Afternoon',  6,      2],
			            ['Night',    161,     34]
			]);
			      
			var data6 = new google.visualization.arrayToDataTable([
			            ['Month', 'Positive', 'Negative'],
			            ['01',   4,      1],
			            ['02',  23,      4],
			            ['03',  30,      9],
			            ['04',  27,      4],
			            ['05',  31,     10],
			            ['06',  17,      4],
			            ['07',  13,      4],
			            ['08',  37,      3],
			            ['09',  21,      1],
			            ['10',  15,      4],
			            ['11',  24,      1],
			            ['12',  13,      3]
			]);
			 
			 
			var data7 = google.visualization.arrayToDataTable([ // Gellibrand
			            ['Month', 'Positive', 'Negative'],
			            ['Morning',   63,     22],
			            ['Afternoon',  1,      0],
			            ['Night',    132,    102]
			]);
			      
			var data8 = new google.visualization.arrayToDataTable([
			            ['Month', 'Positive', 'Negative'],
			            ['01',  29,     17],
			            ['02',  41,     38],
			            ['03',  37,     18],
			            ['04',  34,     14],
			            ['05',   0,      0],
			            ['06',   0,      0],
			            ['07',   0,      0],
			            ['08',   0,      0],
			            ['09',   0,      0],
			            ['10',  17,     10],
			            ['11',  30,     13],
			            ['12',   8,     14]
			]);	

			
			var data9 = google.visualization.arrayToDataTable([ // Maribyrnong
			            ['Month', 'Positive', 'Negative'],
			            ['Morning',   51,     21],
			            ['Afternoon',  2,      0],
			            ['Night',    144,     45]
			]);
			      
			var data10 = new google.visualization.arrayToDataTable([
			            ['Month', 'Positive', 'Negative'],
			            ['01',  19,      3],
			            ['02',  15,      5],
			            ['03',  16,      4],
			            ['04',  17,      4],
			            ['05',   8,      4],
			            ['06',  14,      5],
			            ['07',  15,      7],
			            ['08',  23,      9],
			            ['09',  10,     13],
			            ['10',  23,      1],
			            ['11',  20,      8],
			            ['12',  17,      3]
			]);	

			
			var data11 = google.visualization.arrayToDataTable([ // Batman
			            ['Month', 'Positive', 'Negative'],
			            ['Morning',   25,     21],
			            ['Afternoon',  0,      0],
			            ['Night',     30,     30]
			]);
			      
			var data12 = new google.visualization.arrayToDataTable([
			            ['Month', 'Positive', 'Negative'],
			            ['01',   1,      2],
			            ['02',   0,      4],
			            ['03',   8,      8],
			            ['04',   6,     11],
			            ['05',   1,      2],
			            ['06',   9,      5],
			            ['07',   4,      5],
			            ['08',   6,      5],
			            ['09',   8,      1],
			            ['10',   3,      4],
			            ['11',   6,      2],
			            ['12',   3,      2]
			]);	
			
			
			var data13 = google.visualization.arrayToDataTable([ // Indi
			            ['Month', 'Positive', 'Negative'],
			            ['Morning',  163,     19],
			            ['Afternoon', 10,      0],
			            ['Night',    269,     43]
			]);
			      
			var data14 = new google.visualization.arrayToDataTable([
			            ['Month', 'Positive', 'Negative'],
			            ['01',  21,      1],
			            ['02',  40,      3],
			            ['03',  38,      8],
			            ['04',  23,      2],
			            ['05',  14,      7],
			            ['06',  18,      6],
			            ['07',  12,      2],
			            ['08',  93,     17],
			            ['09',  82,      9],
			            ['10',  38,      3],
			            ['11',  38,      1],
			            ['12',  25,      2]
			]);	
			

			var data15 = google.visualization.arrayToDataTable([ // Gippsland
			            ['Month', 'Positive', 'Negative'],
			            ['Morning',  133,     44],
			            ['Afternoon',  5,      0],
			            ['Night',    181,     55]
			]);
			      
			var data16 = new google.visualization.arrayToDataTable([
			            ['Month', 'Positive', 'Negative'],
			            ['01',  24,     10],
			            ['02',  36,      6],
			            ['03',  53,     16],
			            ['04',  43,     13],
			            ['05',  14,      0],
			            ['06',   8,      5],
			            ['07',  14,      7],
			            ['08',  18,      5],
			            ['09',  13,      4],
			            ['10',  10,      1],
			            ['11',  36,     18],
			            ['12',  50,     14]
			]);	
			

			var data17 = google.visualization.arrayToDataTable([ // Flinders
			            ['Month', 'Positive', 'Negative'],
			            ['Morning',  133,     44],
			            ['Afternoon',  5,      0],
			            ['Night',    181,     55]
			]);
			      
			var data18 = new google.visualization.arrayToDataTable([
			            ['Month', 'Positive', 'Negative'],
			            ['01',  14,      1],
			            ['02',  16,      2],
			            ['03',  14,      2],
			            ['04',  11,      5],
			            ['05',   5,      5],
			            ['06',   9,      2],
			            ['07',  13,      2],
			            ['08',   9,      8],
			            ['09',   5,      4],
			            ['10',  11,      6],
			            ['11',   9,      4],
			            ['12',  11,      2]
			]);		
			

			var data19 = google.visualization.arrayToDataTable([ // Melbourne
			            ['Month', 'Positive', 'Negative'],
			            ['Morning',  158,     50],
			            ['Afternoon',  2,      0],
			            ['Night',    254,     81]
			]);
			      
			var data20 = new google.visualization.arrayToDataTable([
			            ['Month', 'Positive', 'Negative'],
			            ['01',  11,      1],
			            ['02',  35,     15],
			            ['03',  31,     14],
			            ['04',  13,      8],
			            ['05',  66,     27],
			            ['06',  44,     11],
			            ['07',  20,      7],
			            ['08',  55,     13],
			            ['09',  54,      7],
			            ['10',  32,     12],
			            ['11',  33,     10],
			            ['12',  20,      6]
			]);				
			
			
			var data21 = google.visualization.arrayToDataTable([ // Menzies
			            ['Month', 'Positive', 'Negative'],
			            ['Morning',    8,      6],
			            ['Afternoon',  3,      0],
			            ['Night',     30,     12]
			]);
			      
			var data22 = new google.visualization.arrayToDataTable([
			            ['Month', 'Positive', 'Negative'],
			            ['01',   2,      1],
			            ['02',   1,      1],
			            ['03',   4,      0],
			            ['04',   7,      2],
			            ['05',   0,      5],
			            ['06',   5,      0],
			            ['07',   4,      2],
			            ['08',   7,      1],
			            ['09',   6,      3],
			            ['10',   2,      0],
			            ['11',   1,      2],
			            ['12',   2,      1]
			]);		
			

			var data23 = google.visualization.arrayToDataTable([ // Kooyong
			            ['Month', 'Positive', 'Negative'],
			            ['Morning',   45,     19],
			            ['Afternoon',  8,      1],
			            ['Night',     96,     38]
			]);
			      
			var data24 = new google.visualization.arrayToDataTable([
			            ['Month', 'Positive', 'Negative'],
			            ['01',  15,      4],
			            ['02',   9,      6],
			            ['03',  19,     11],
			            ['04',  14,      9],
			            ['05',   9,      0],
			            ['06',   5,      2],
			            ['07',   7,      3],
			            ['08',  21,      4],
			            ['09',  11,      5],
			            ['10',  20,      5],
			            ['11',  12,      7],
			            ['12',   7,      2]
			]);	
			
						
			var data25 = google.visualization.arrayToDataTable([ // Higgins
			            ['Month', 'Positive', 'Negative'],
			            ['Morning',   21,      2],
			            ['Afternoon',  1,      0],
			            ['Night',     29,      5]
			]);
			      
			var data26 = new google.visualization.arrayToDataTable([
			            ['Month', 'Positive', 'Negative'],
			            ['01',   1,      0],
			            ['02',   2,      0],
			            ['03',   3,      1],
			            ['04',   3,      1],
			            ['05',   4,      3],
			            ['06',   2,      0],
			            ['07',   5,      0],
			            ['08',   6,      1],
			            ['09',   8,      0],
			            ['10',   4,      0],
			            ['11',  10,      1],
			            ['12',   3,      0]
			]);
			
			
			var data27 = google.visualization.arrayToDataTable([ // Goldstein
			            ['Month', 'Positive', 'Negative'],
			            ['Morning',   27,     11],
			            ['Afternoon',  5,      0],
			            ['Night',     28,     18]
			]);
			      
			var data28 = new google.visualization.arrayToDataTable([
			            ['Month', 'Positive', 'Negative'],
			            ['01',   3,      1],
			            ['02',   1,      2],
			            ['03',   3,      1],
			            ['04',   4,      2],
			            ['05',   0,      0],
			            ['06',   2,      1],
			            ['07',   5,      7],
			            ['08',  10,      9],
			            ['09',  13,      3],
			            ['10',   8,      1],
			            ['11',   8,      1],
			            ['12',   3,      1]
		    ]);

                     
            var options = {
               'width':400,
               'height':250,
                chartArea: {width: '50%'}
             };

      

            var chart1= new google.visualization.ColumnChart(document.getElementById('chart1'));
            chart1.draw(data1, options);
            
            var chart2= new google.visualization.LineChart(document.getElementById('chart2'));
            chart2.draw(data2, options);

            var chart3= new google.visualization.ColumnChart(document.getElementById('chart3'));
            chart3.draw(data3, options);
            
            var chart4= new google.visualization.LineChart(document.getElementById('chart4'));
            chart4.draw(data4, options);

            var chart5= new google.visualization.ColumnChart(document.getElementById('chart5'));
            chart5.draw(data5, options);

            var chart6= new google.visualization.LineChart(document.getElementById('chart6'));
            chart6.draw(data6, options);
            
            var chart7= new google.visualization.ColumnChart(document.getElementById('chart7'));
            chart7.draw(data7, options);

            var chart8= new google.visualization.LineChart(document.getElementById('chart8'));
            chart8.draw(data8, options);

            var chart9= new google.visualization.ColumnChart(document.getElementById('chart9'));
            chart9.draw(data9, options);

            var chart10= new google.visualization.LineChart(document.getElementById('chart10'));
            chart10.draw(data10, options);
            
            var chart11= new google.visualization.ColumnChart(document.getElementById('chart11'));
            chart11.draw(data11, options);

            var chart12= new google.visualization.LineChart(document.getElementById('chart12'));
            chart12.draw(data12, options);
            
            var chart13= new google.visualization.ColumnChart(document.getElementById('chart13'));
            chart13.draw(data13, options);

            var chart14= new google.visualization.LineChart(document.getElementById('chart14'));
            chart14.draw(data14, options);

            var chart15= new google.visualization.ColumnChart(document.getElementById('chart15'));
            chart15.draw(data15, options);

            var chart16= new google.visualization.LineChart(document.getElementById('chart16'));
            chart16.draw(data16, options);
            
            var chart17= new google.visualization.ColumnChart(document.getElementById('chart17'));
            chart17.draw(data17, options);

            var chart18= new google.visualization.LineChart(document.getElementById('chart18'));
            chart18.draw(data18, options);
            
            var chart19= new google.visualization.ColumnChart(document.getElementById('chart19'));
            chart19.draw(data19, options);

            var chart20= new google.visualization.LineChart(document.getElementById('chart20'));
            chart20.draw(data20, options);
            
            var chart21= new google.visualization.ColumnChart(document.getElementById('chart21'));
            chart21.draw(data21, options);

            var chart22= new google.visualization.LineChart(document.getElementById('chart22'));
            chart22.draw(data22, options);
            
            var chart23= new google.visualization.ColumnChart(document.getElementById('chart23'));
            chart23.draw(data23, options);

            var chart24= new google.visualization.LineChart(document.getElementById('chart24'));
            chart24.draw(data24, options);
            
            var chart25= new google.visualization.ColumnChart(document.getElementById('chart25'));
            chart25.draw(data25, options);

            var chart26= new google.visualization.LineChart(document.getElementById('chart26'));
            chart26.draw(data26, options);

            var chart27= new google.visualization.ColumnChart(document.getElementById('chart27'));
            chart27.draw(data27, options);

            var chart28= new google.visualization.LineChart(document.getElementById('chart28'));
            chart28.draw(data28, options);


            
           }
</script>
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
	<!-- ==== HEADERWRAP ==== -->


	<p style="height: 40px;">&nbsp;</p>



	<div id="map"></div>


	<div class="tab-content"
		style="float: right; width: 40%; padding: 10px;">
		<div id="home" class="tab-pane fade in active">
			<h1>Emotion Map</h1>
			<p>Click on the marker to check more details.</p>
			<p>
				<b>Assumption</b><br /> We expect to see the Tweets from the politicians to
				be positive at most of times.

			</p>
			<p>
				<b>Result</b><br /> As expected, most of the Tweets from the politicians
				are positive. And in general, the MPs are happier in the night time.

			</p>



		</div>

		<div id="mallee" class="tab-pane fade">
			<p>
				<b>Name:</b> Mr Andrew Broad MP
			</p>
			<p>
				<b>Twitter:</b>@broad4mallee
			</p>

			<div id="chart1" style="margin-left: -10px;"></div>
			<div id="chart2" style="margin-left: -10px;"></div>
		</div>

		<div id="ballarat" class="tab-pane fade">
			<p>
				<b>Name:</b> Hon Catherine King MP
			</p>
			<p>
				<b>Twitter:</b>@CatherineKingMP
			</p>

			<div id="chart3" style="margin-left: -10px;"></div>
			<div id="chart4" style="margin-left: -10px;"></div>
		</div>

		<div id="corio" class="tab-pane fade">
			<p>
				<b>Name:</b> Hon Richard Marles MP
			</p>
			<p>
				<b>Twitter:</b>@RichardMarlesMP
			</p>

			<div id="chart5" style="margin-left: -10px;"></div>
			<div id="chart6" style="margin-left: -10px;"></div>
		</div>

		<div id="gellibrand" class="tab-pane fade">
			<p>
				<b>Name:</b> Mr Tim Watts MP
			</p>
			<p>
				<b>Twitter:</b>@TimWattsMP
			</p>

			<div id="chart7" style="margin-left: -10px;"></div>
			<div id="chart8" style="margin-left: -10px;"></div>
		</div>

		<div id="maribyrnong" class="tab-pane fade">
			<p>
				<b>Name:</b> Hon Bill Shorten MP
			</p>
			<p>
				<b>Twitter:</b>@billshortenmp
			</p>

			<div id="chart9" style="margin-left: -10px;"></div>
			<div id="chart10" style="margin-left: -10px;"></div>
		</div>

		<div id="batman" class="tab-pane fade">
			<p>
				<b>Name:</b> Hon Bill Shorten MP
			</p>
			<p>
				<b>Twitter:</b>@billshortenmp
			</p>

			<div id="chart11" style="margin-left: -10px;"></div>
			<div id="chart12" style="margin-left: -10px;"></div>
		</div>

		<div id="indi" class="tab-pane fade">
			<p>
				<b>Name:</b> Ms Cathy McGowan AO, MP
			</p>
			<p>
				<b>Twitter:</b>@Indigocathy
			</p>

			<div id="chart13" style="margin-left: -10px;"></div>
			<div id="chart14" style="margin-left: -10px;"></div>
		</div>

		<div id="gippsland" class="tab-pane fade">
			<p>
				<b>Name:</b> Hon Darren Chester MP
			</p>
			<p>
				<b>Twitter:</b>@DarrenChesterMP
			</p>

			<div id="chart15" style="margin-left: -10px;"></div>
			<div id="chart16" style="margin-left: -10px;"></div>
		</div>

		<div id="flinders" class="tab-pane fade">
			<p>
				<b>Name:</b> Hon Greg Hunter MP
			</p>
			<p>
				<b>Twitter:</b>@GregHuntMP
			</p>

			<div id="chart17" style="margin-left: -10px;"></div>
			<div id="chart18" style="margin-left: -10px;"></div>
		</div>

		<div id="melbourne" class="tab-pane fade">
			<p>
				<b>Name:</b> Mr Adam Bandt MP
			</p>
			<p>
				<b>Twitter:</b>@AdamBandt
			</p>

			<div id="chart19" style="margin-left: -10px;"></div>
			<div id="chart20" style="margin-left: -10px;"></div>
		</div>

		<div id="menzies" class="tab-pane fade">
			<p>
				<b>Name:</b> Mr Kevin Andrews MP
			</p>
			<p>
				<b>Twitter:</b>@kevinandrewsmp
			</p>

			<div id="chart21" style="margin-left: -10px;"></div>
			<div id="chart22" style="margin-left: -10px;"></div>
		</div>

		<div id="kooyong" class="tab-pane fade">
			<p>
				<b>Name:</b> Hon Josh Frydenberg MP
			</p>
			<p>
				<b>Twitter:</b>@JoshFrydenberg
			</p>

			<div id="chart23" style="margin-left: -10px;"></div>
			<div id="chart24" style="margin-left: -10px;"></div>
		</div>

		<div id="higgins" class="tab-pane fade">
			<p>
				<b>Name:</b> Hon Kelly O'Dwyer MP
			</p>
			<p>
				<b>Twitter:</b>@KellyODwyer
			</p>

			<div id="chart25" style="margin-left: -10px;"></div>
			<div id="chart26" style="margin-left: -10px;"></div>
		</div>

		<div id="goldstein" class="tab-pane fade">
			<p>
				<b>Name:</b> Hon Kelly O'Dwyer MP
			</p>
			<p>
				<b>Twitter:</b>@KellyODwyer
			</p>

			<div id="chart27" style="margin-left: -10px;"></div>
			<div id="chart28" style="margin-left: -10px;"></div>
		</div>
	</div>

	<script>

      // Displays a marker at the center of Australia.
      // When the user clicks the marker, an info window opens.
      
	  var map;
	  var Melbourne = {lat: -37.801047, lng: 144.969861}; //Carlton
	  function CenterControl(controlDiv, map) {

		  // Set CSS for the control border.
		  var controlUI = document.createElement('div');
		  controlUI.style.backgroundColor = '#fff';
		  controlUI.style.border = '2px solid #fff';
		  controlUI.style.borderRadius = '3px';
		  controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
		  controlUI.style.cursor = 'pointer';
		  controlUI.style.marginBottom = '22px';
		  controlUI.style.textAlign = 'center';
		  controlUI.title = 'Click to recenter the map';
		  controlDiv.appendChild(controlUI);

		  // Set CSS for the control interior.
		  var controlText = document.createElement('div');
		  controlText.style.color = 'rgb(25,25,25)';
		  controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
		  controlText.style.fontSize = '16px';
		  controlText.style.lineHeight = '38px';
		  controlText.style.paddingLeft = '5px';
		  controlText.style.paddingRight = '5px';
		  controlText.innerHTML = 'Center Map';
		  controlUI.appendChild(controlText);

		  // Setup the click event listeners: simply set the map to Chicago.
		  controlUI.addEventListener('click', function() {
		    map.setCenter(Melbourne);
		  });

		}

	  
      function initMap() {
		//Every centre of the Victoria election boundaries have been chosen below
		var Mallee = {lat: -36.253247, lng: 142.39448};
		var Wannon = {lat: -37.74418, lng: 142.021946};
		var Murray = {lat: -36.377518, lng: 145.400044};
		var Bendigo = {lat: -36.758711, lng: 144.283747};
		var Ballarat = {lat: -37.563649, lng: 143.867187};

		var Corangamite = {lat: -38.326463, lng: 144.315669};
		var Corio = {lat: -38.148544, lng: 144.361348};
		var Lalor = {lat: -37.902906 , lng: 144.658475}; //Werribee
		var Wills  = {lat: -37.741664, lng: 144.962806}; //Coburg
		var McEwen = {lat: -37.356168, lng: 145.026335}; //Wandong
		
		var Gorton = {lat: -37.682979 , lng: 144.580466}; //Melton
		var Calwell = {lat: -37.699012, lng: 144.841027}; //Melbourne airport
		var Gellibrand = {lat: -37.821063, lng: 144.835043}; //Brooklyn
		var Maribyrnong = {lat: -37.764831, lng: 144.86136}; //Avondale Heights
		
		
		var Scullin = {lat: -37.645932, lng: 145.040333}; //Epping
		var Batman = {lat: -37.738813, lng: 145.004028}; //Preston
		var MelbournePorts = {lat: -37.867512 , lng: 144.978981}; //St Kilda
		var Indi = {lat: -37.053205, lng: 146.086476}; //Mansfield
		var Gippsland = {lat: -37.824577 , lng: 147.631719 }; //Bairnsdale
		
		var Jagajaga = {lat: -37.713377, lng: 145.148916}; //Eltham
		var McMillan = {lat: -38.161155, lng: 145.931824}; //Warragul
		var Flinders = {lat: -38.414598 , lng: 145.433627}; //Corinella
		var Frankston = {lat: -38.141399, lng: 145.122464}; //Frankston
		var Casey = {lat: -37.753601, lng: 145.689087}; //Casey  
		
		var LaTrobe = {lat: -37.932495, lng: 145.44072}; //Emerald
		var Holt = {lat: -38.108347, lng: 145.284425}; //Cranbourne
		var Issacs = {lat: -38.037371, lng: 145.187023}; //Bangholme
		var Hotham = {lat: -37.941434, lng: 145.102378}; //Clarinda 
		var Bruce = {lat: -37.910314, lng: 145.188505}; //Wheelers Hill  
		
		var Chisholm = {lat: -37.85014, lng: 145.119031}; //Burwood
		var Deakin = {lat: -37.814262, lng: 145.227386}; //Ringwood
		var Menzies = {lat: -37.76953, lng: 145.234321}; //Warrandyte South
		var Aston = {lat: -37.869949, lng: 145.237095}; //Wantirna South
		var Kooyong = {lat: -37.812792, lng: 145.080868}; //Balwyn  

		var Higgins = {lat: -37.8600009, lng: 145.057355}; //Glen Iris
		var Goldstein = {lat: -37.905516, lng: 145.004401}; //Brighton

				     
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: Melbourne
        });
        //Load GeoJson to display the election boundaries
        map.data.loadGeoJson('resource/victoria.json');
        // Create the DIV to hold the control and call the CenterControl()
        // constructor passing in this DIV.
        var centerControlDiv = document.createElement('div');
        var centerControl = new CenterControl(centerControlDiv, map);

        centerControlDiv.index = 1;
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);
        // Set the stroke width, and fill color for each polygon
          map.data.setStyle(function(feature) {
	    var color = 'gray';
	    if (feature.getProperty('isColorful')) {
	      color = feature.getProperty('color');
	    }
    // Color each letter gray. Change the color when the isColorful property
    // is set to true.
    	return /** @type {google.maps.Data.StyleOptions} */({
        fillColor: '#C0C0C0',
        strokeColor: '#303030',
        strokeOpacity: 0.7,
        strokeWeight: 1
    });
  });
          map.data.addListener('click', function(event) {
        	    event.feature.setProperty('isColorful', true);
        	    
        	  });
          map.data.addListener('mouseover', function(event) {
        	    map.data.revertStyle();
        	    map.data.overrideStyle(event.feature, {strokeWeight: 5});
        	  });

        	  map.data.addListener('mouseout', function(event) {
        	    map.data.revertStyle();
        	  });	        

		//Mallee
        var contentString1 =
        '<h1>Mallee</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/>Mr Andrew Broad MP</p>'+
        '<p><b>Party:</b><br/>The Nationals</p>'+
        '<p><b>Twitter:</b><br/>@broad4mallee</p>'+
        '<p><a data-toggle="tab" href="#mallee">More Info...</a></p></td>'+
        '<td><img src="img/4.jpg" class="mpp"></td></tr></table>';
	    var infowindow1 = new google.maps.InfoWindow({
	      content: contentString1
	    });
	    var marker1 = new google.maps.Marker({
	      position: Mallee,
	      map: map,
	      title: 'Mallee',
	      icon: 'media/nation.png'
		      
	    });
	    marker1.addListener('click', function() {
	      infowindow1.open(map, marker1);
	      map.panTo(this.getPosition());
	      map.setZoom(9);
	      
	    });

	    
		//Wannon
        var contentString2 = 
        '<h1>Wannon</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Dan Tehan MP</p>'+
        '<p><b>Party:</b><br/> Liberal Party</p>'+
        '<p><b>Title(s):</b><br/> Minister Assisting the Prime Minister for the Centenary of ANZAC, Minister for Defence Materiel, Minister for Veterans Affairs</p>'+
        '<p><b>Twitter:</b><br/> @DanTehanWannon</p>'+
       
        '<td><img src="img/32.jpg" class="mpp"></td></tr></table>';
	    var infowindow2 = new google.maps.InfoWindow({
	      content: contentString2
	    });
	    var marker2 = new google.maps.Marker({
	      position: Wannon,
	      map: map,
	      title: 'Wannon',
	      icon: 'media/liberal_gy.png'
	    });
	    marker2.addListener('click', function() {
	      infowindow2.open(map, marker2);
	      map.panTo(this.getPosition());
	      map.setZoom(9);
	    });


		//Murray
        var contentString3 = 
        '<h1>Murray</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Sharman Stone MP</p>'+
        '<p><b>Party:</b><br/> Liberal Party</p>'+
        '<p><b>Twitter:</b><br/> @SharmanStone</p>'+
       
        '<td><img src="img/30.JPG" class="mpp"></td></tr></table>';
	    var infowindow3 = new google.maps.InfoWindow({
	      content: contentString3
	    });
	
	    var marker3 = new google.maps.Marker({
	      position: Murray,
	      map: map,
	      title: 'Murray',
	      icon: 'media/liberal_gy.png'
	    });
	    marker3.addListener('click', function() {
	      infowindow3.open(map, marker3);
	      map.panTo(this.getPosition());
	      map.setZoom(9);
	    });


		//Bendigo
        var contentString4 = 
        '<h1>Bendigo</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Ms Lisa Chesters MP</p>'+
        '<p><b>Party:</b><br/> Labor Party</p>'+
        '<p><b>Twitter:</b><br/> @LMChesters</p>'+
       
        '<td><img src="img/9.jpg" class="mpp"></td></tr></table>';
	    var infowindow4 = new google.maps.InfoWindow({
	      content: contentString4
	    });
	    var marker4 = new google.maps.Marker({
	      position: Bendigo,
	      map: map,
	      title: 'Bendigo',
	      icon: 'media/labor_gy.png'
	    });
	    marker4.addListener('click', function() {
	      infowindow4.open(map, marker4);
	      map.panTo(this.getPosition());
	      map.setZoom(9);
	    });

		//Ballarat
        var contentString5 = 
        '<h1>Ballarat</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Catherine King MP</p>'+
        '<p><b>Party:</b><br/> Labor Party</p>'+
        '<p><b>Twitter:</b><br/> @CatherineKingMP</p>'+
        '<p><a data-toggle="tab" href="#ballarat">More Info...</a></p></td>'+
        '<td><img src="img/18.JPG" class="mpp"></td></tr></table>';
	    var infowindow5 = new google.maps.InfoWindow({
	      content: contentString5
	    });
	    var marker5 = new google.maps.Marker({
	      position: Ballarat,
	      map: map,
	      title: 'Ballarat',
	      icon: 'media/labor.png'
	    });
	    marker5.addListener('click', function() {
	      infowindow5.open(map, marker5);
	      map.panTo(this.getPosition());
	      map.setZoom(9);
	    });
	    

		//Corangamite
        var contentString6 = 
        '<h1>Corangamite</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Ms Sarah Henderson MP</p>'+
        '<p><b>Party:</b><br/> Liberal Party</p>'+
        '<p><b>Twitter:</b><br/> @SHendersonMP</p>'+
  
        '<td><img src="img/16.jpg" class="mpp"></td></tr></table>';
	    var infowindow6 = new google.maps.InfoWindow({
	      content: contentString6
	    });
	    var marker6 = new google.maps.Marker({
	      position: Corangamite,
	      map: map,
	      title: 'Corangamite',
	      icon: 'media/liberal_gy.png'
	    });
	    marker6.addListener('click', function() {
	      infowindow6.open(map, marker6);
	      map.panTo(this.getPosition());
	      map.setZoom(9);
	    });


		//Corio 
        var contentString7 = 
        '<h1>Corio</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Richard Marles MP</p>'+
        '<p><b>Party:</b><br/> Labor Party</p>'+
        '<p><b>Twitter:</b><br/> @RichardMarlesMP</p>'+
        '<p><a data-toggle="tab" href="#corio">More Info...</a></p></td>'+
        '<td><img src="img/20.JPG" class="mpp"></td></tr></table>';
	    var infowindow7 = new google.maps.InfoWindow({
	      content: contentString7
	    });
	    var marker7 = new google.maps.Marker({
	      position: Corio ,
	      map: map,
	      title: 'Corio ',
	      icon: 'media/labor.png'
	    });
	    marker7.addListener('click', function() {
	      infowindow7.open(map, marker7);
	      map.panTo(this.getPosition());
	      map.setZoom(9);
	    });

	    
		//Lalor  
        var contentString8 =
        '<h1>Lalor</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Ms Joanne Ryan MP</p>'+
        '<p><b>Party:</b><br/> Labor Party</p>'+
        '<p><b>Title(s):</b><br/> Opposition Whip</p>'+
        '<p><b>Twitter:</b><br/> @JoanneRyanLalor</p></td>'+
        '<td><img src="img/27.jpg" class="mpp"></td></tr></table>';
	    var infowindow8 = new google.maps.InfoWindow({
	      content: contentString8
	    });
	    var marker8 = new google.maps.Marker({
	      position: Lalor  ,
	      map: map,
	      title: 'Lalor  ',
	      icon: 'media/labor_gy.png'
	    });
	    marker8.addListener('click', function() {
	      infowindow8.open(map, marker8);
	      map.panTo(this.getPosition());
	      map.setZoom(10);
	    });


		//Wills    
        var contentString9 =
        '<h1>Wills</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Kelvin Thomson MP</p>'+
        '<p><b>Party:</b><br/> Labor Party</p>'+
        '<p><b>Twitter:</b><br/> @KelvinThomsonMP</p></td>'+
        '<td><img src="img/33.jpg" class="mpp"></td></tr></table>';
	    var infowindow9 = new google.maps.InfoWindow({
	      content: contentString9
	    });
	    var marker9 = new google.maps.Marker({
	      position: Wills,
	      map: map,
	      title: 'Wills',
	      icon: 'media/labor_gy.png'
	    });
	    marker9.addListener('click', function() {
	      infowindow9.open(map, marker9);
	      map.panTo(this.getPosition());
	      map.setZoom(11);
	    });


		//McEwen    
        var contentString10 = 
        '<h1>McMillan</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Mr Rob Mitchell MP</p>'+
        '<p><b>Party:</b><br/> Labor Party</p>'+
        '<p><b>Titles(s):</b><br/> Second Deputy Speaker</p>'+
        '<p><b>Twitter:</b><br/> @RobMitchellMP</p></td>'+
        '<td><img src="img/22.jpg" class="mpp"></td></tr></table>';
	    var infowindow10 = new google.maps.InfoWindow({
	      content: contentString10
	    });
	    var marker10 = new google.maps.Marker({
	      position: McEwen,
	      map: map,
	      title: 'McEwen',
	      icon: 'media/labor_gy.png'
	    });
	    marker10.addListener('click', function() {
	      infowindow10.open(map, marker10);
	      map.panTo(this.getPosition());
	      map.setZoom(9);
	    });


		//Gorton     
        var contentString11 = 
        '<h1>Gorton</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Brendan O&#39;Connor MP</p>'+
        '<p><b>Party:</b><br/> Labor Party</p>'+
        '<p><b>Twitter:</b><br/> None</p></td>'+
        '<td><img src="img/23.JPG" class="mpp"></td></tr></table>';
	    var infowindow11 = new google.maps.InfoWindow({
	      content: contentString11
	    });
	    var marker11 = new google.maps.Marker({
	      position: Gorton ,
	      map: map,
	      title: 'Gorton ',
	      icon: 'media/labor_gy.png'
	    });
	    marker11.addListener('click', function() {
	      infowindow11.open(map, marker11);
	      map.panTo(this.getPosition());
	      map.setZoom(10);
	    });

		//Calwell      
        var contentString12 = 
        '<h1>Calwell</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Ms Maria Vamvakinou MP</p>'+
        '<p><b>Party:</b><br/> Labor Party</p>'+
        '<p><b>Twitter:</b><br/> @MariaVamvakinou</p></td>'+
        '<td><img src="img/35.jpg" class="mpp"></td></tr></table>';
	    var infowindow12 = new google.maps.InfoWindow({
	      content: contentString12
	    });
	    var marker12 = new google.maps.Marker({
	      position: Calwell  ,
	      map: map,
	      title: 'Calwell  ',
	      icon: 'media/liberal_gy.png'
	    });
	    marker12.addListener('click', function() {
	      infowindow12.open(map, marker12);
	      map.panTo(this.getPosition());
	      map.setZoom(11);
	    });
	    

		//Gellibrand       
        var contentString13 = 
        '<h1>Gellibrand</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Mr Tim Watts MP</p>'+
        '<p><b>Party:</b><br/> Labor Party</p>'+
        '<p><b>Twitter:</b><br/> @TimWattsMP</p>'+
        '<p><a data-toggle="tab" href="#gellibrand">More Info...</a></p></td>'+
        '<td><img src="img/36.jpg" class="mpp"></td></tr></table>';
	    var infowindow13 = new google.maps.InfoWindow({
	      content: contentString13
	    });
	    var marker13 = new google.maps.Marker({
	      position: Gellibrand   ,
	      map: map,
	      title: 'Gellibrand   ',
	      icon: 'media/labor.png'
	    });
	    marker13.addListener('click', function() {
	      infowindow13.open(map, marker13);
	      map.panTo(this.getPosition());
	      map.setZoom(11);
	    });

		//Maribyrnong        
        var contentString14 = 
        '<h1>Maribyrnong</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Bill Shorten MP</p>'+
        '<p><b>Party:</b><br/> Labor Party</p>'+
        '<p><b>Title(s):</b><br/> Leader of the Opposition</p>'+
        '<p><b>Twitter:</b><br/> @billshortenmp</p>'+
        '<p><a data-toggle="tab" href="#maribyrnong">More Info...</a></p></td>'+
        '<td><img src="img/28.jpg" class="mpp"></td></tr></table>';
	    var infowindow14 = new google.maps.InfoWindow({
	      content: contentString14
	    });
	    var marker14 = new google.maps.Marker({
	      position: Maribyrnong,
	      map: map,
	      title: 'Maribyrnong',
	      icon: 'media/labor.png'		     
	    });
	    marker14.addListener('click', function() {
	      infowindow14.open(map, marker14);
	      map.panTo(this.getPosition());
	      map.setZoom(11);
	    });


		//Melbourne         
        var contentString15 = 
        '<h1>Melbourne</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Mr Adam Bandt MP</p>'+
        '<p><b>Party:</b><br/> Australian Greens</p>'+
        '<p><b>Twitter:</b><br/> @AdamBandt</p>'+
        '<p><a data-toggle="tab" href="#melbourne">More Info...</a></p></td>'+
        '<td><img src="img/2.jpg" class="mpp"></td></tr></table>';
	    var infowindow15 = new google.maps.InfoWindow({
	      content: contentString15
	    });
	    var marker15 = new google.maps.Marker({
	      position: Melbourne ,
	      map: map,
	      title: 'Melbourne ',
	      icon: 'media/greens.png'
	    });
	    marker15.addListener('click', function() {
	      infowindow15.open(map, marker15);
	      map.panTo(this.getPosition());
	      map.setZoom(11);
	    });


		//Scullin          
        var contentString16 = 
        '<h1>Scullin</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Mr Andrew Giles MP</p>'+
        '<p><b>Party:</b><br/> Labor Party</p>'+
        '<p><b>Twitter:</b><br/> @andrewjgiles</p></td>'+
        '<td><img src="img/14.jpg" class="mpp"></td></tr></table>';
	    var infowindow16 = new google.maps.InfoWindow({
	      content: contentString16
	    });
	    var marker16 = new google.maps.Marker({
	      position: Scullin  ,
	      map: map,
	      title: 'Scullin  ',
	      icon: 'media/labor_gy.png'
	    });
	    marker16.addListener('click', function() {
	      infowindow16.open(map, marker16);
	      map.panTo(this.getPosition());
	      map.setZoom(11);
	    });  

	    
		//Batman           
        var contentString17 = 
        '<h1>Batman</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon David Feeney MP</p>'+
        '<p><b>Party:</b><br/> Labor Party</p>'+
        '<p><b>Twitter:</b><br/> @Feeney4Batman</p>'+
        '<p><a data-toggle="tab" href="#batman">More Info...</a></p></td>'+
        '<td><img src="img/12.JPG" class="mpp"></td></tr></table>';
	    var infowindow17 = new google.maps.InfoWindow({
	      content: contentString17
	    });
	    var marker17 = new google.maps.Marker({
	      position: Batman   ,
	      map: map,
	      title: 'Batman   ',
	      icon: 'media/labor.png'
	    });
	    marker17.addListener('click', function() {
	      infowindow17.open(map, marker17);
	      map.panTo(this.getPosition());
	      map.setZoom(11);
	    });


		//MelbournePorts            
        var contentString18 = 
        '<h1>Melbourne Ports</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Michael Danby MP</p>'+
        '<p><b>Party:</b><br/> The Nationals</p>'+
        '<p><b>Twitter:</b><br/> None</p></td>'+
        '<td><img src="img/10.JPG" class="mpp"></td></tr></table>';
	    var infowindow18 = new google.maps.InfoWindow({
	      content: contentString18
	    });
	    var marker18 = new google.maps.Marker({
	      position: MelbournePorts    ,
	      map: map,
	      title: 'MelbournePorts    ',
	      icon: 'media/national_gy.png'
	    });
	    marker18.addListener('click', function() {
	      infowindow18.open(map, marker18);
	      map.panTo(this.getPosition());
	      map.setZoom(11);
	    });

		//Indi             
        var contentString19 = 
        '<h1>Indi</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Ms Cathy McGowan AO, MP</p>'+
        '<p><b>Party:</b><br/> Independent</p>'+
        '<p><b>Twitter:</b><br/> @Indigocathy</p>'+
        '<p><a data-toggle="tab" href="#indi">More Info...</a></p></td>'+
        '<td><img src="img/21.jpg" class="mpp"></td></tr></table>';
	    var infowindow19 = new google.maps.InfoWindow({
	      content: contentString19
	    });
	    var marker19 = new google.maps.Marker({
	      position: Indi     ,
	      map: map,
	      title: 'Indi     '      
	    });
	    marker19.addListener('click', function() {
	      infowindow19.open(map, marker19);
	      map.panTo(this.getPosition());
	      map.setZoom(9);
	    });

		//Gippsland              
        var contentString20 =
        '<h1>Gippsland</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Darren Chester MP</p>'+
        '<p><b>Party:</b><br/> The Nationals</p>'+
        '<p><b>Title(s):</b><br/> Minister for Infrastructure and Transport</p>'+
        '<p><b>Twitter:</b><br/> @DarrenChesterMP</p>'+
        '<p><a data-toggle="tab" href="#gippsland">More Info...</a></p></td>'+
        '<td><img src="img/8.JPG" class="mpp"></td></tr></table>';
	    var infowindow20 = new google.maps.InfoWindow({
	      content: contentString20
	    });
	    var marker20 = new google.maps.Marker({
	      position: Gippsland      ,
	      map: map,
	      title: 'Gippsland      ',
	      icon: 'media/nation.png'
	    });
	    marker20.addListener('click', function() {
	      infowindow20.open(map, marker20);
	      map.panTo(this.getPosition());
	      map.setZoom(9);
	    });


		//Jagajaga               
        var contentString21 =
        '<h1>McMillan</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Jenny Macklin MP</p>'+
        '<p><b>Party:</b><br/> Labor Party</p>'+
        '<p><b>Twitter:</b><br/> None</p></td>'+
        '<td><img src="img/19.jpg" class="mpp"></td></tr></table>';
	    var infowindow21 = new google.maps.InfoWindow({
	      content: contentString21
	    });
	    var marker21 = new google.maps.Marker({
	      position: Jagajaga       ,
	      map: map,
	      title: 'Jagajaga       ',
	      icon: 'media/labor_gy.png'
	    });
	    marker21.addListener('click', function() {
	      infowindow21.open(map, marker21);
	      map.panTo(this.getPosition());
	      map.setZoom(11);
	    });


		//McMillan                
        var contentString22 = 
        '<h1>McMillan</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Mr Russell Broadbent MP</p>'+
        '<p><b>Party:</b><br/> Liberal Party</p>'+
        '<p><b>Twitter:</b><br/> None</p></td>'+
        '<td><img src="img/5.jpg" class="mpp"></td></tr></table>';
	    var infowindow22 = new google.maps.InfoWindow({
	      content: contentString22
	    });
	    var marker22 = new google.maps.Marker({
	      position: McMillan        ,
	      map: map,
	      title: 'McMillan        ',
	      icon: 'media/liberal_gy.png'
	    });
	    marker22.addListener('click', function() {
	      infowindow22.open(map, marker22);
	      map.panTo(this.getPosition());
	      map.setZoom(9);
	    });

	    
		//Flinders                 
        var contentString23 = 
        '<h1>Flinders</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Greg Hunt MP</p>'+
        '<p><b>Party:</b><br/> Liberal Party</p>'+
        '<p><b>Title(s):</b><br/> Minister for the Environment</p>'+
        '<p><b>Twitter:</b><br/> @GregHuntMP</p>'+
        '<p><a data-toggle="tab" href="#flinders">More Info...</a></p></td>'+
        '<td><img src="img/17.jpg" class="mpp"></td></tr></table>';
	    var infowindow23 = new google.maps.InfoWindow({
	      content: contentString23
	    });
	    var marker23 = new google.maps.Marker({
	      position: Flinders,
	      map: map,
	      title: 'Flinders',
	      icon: 'media/liberal.png'
	    });
	    marker23.addListener('click', function() {
	      infowindow23.open(map, marker23);
	      map.panTo(this.getPosition());
	      map.setZoom(9);
	    });

		//Dunkley                  
        var contentString24 =
        '<h1>Dunkley</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/>Hon Bruce Billson MP</p>'+
        '<p><b>Party:</b><br/> Liberal Party</p>'+
        '<p><b>Twitter:</b><br/> @BruceBillsonMP</p></td>'+
        '<td><img src="img/3.JPG" class="mpp"></td></tr></table>';
	    var infowindow24 = new google.maps.InfoWindow({
	      content: contentString24
	    });
	    var marker24 = new google.maps.Marker({
	      position: Frankston ,
	      map: map,
	      title: 'Frankston ',
	      icon: 'media/liberal_gy.png'
	    });
	    marker24.addListener('click', function() {
	      infowindow24.open(map, marker24);
	      map.panTo(this.getPosition());
	      map.setZoom(10);
	    });

	    
		//Casey                   
        var contentString25 = 
        '<h1>Casey</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> The Hon Tony Smith MP</p>'+
        '<p><b>Party:</b><br/> Liberal Party</p>'+
        '<p><b>Twitter:</b><br/> @TonySmithMP</p></td>'+
        '<td><img src="img/29.JPG" class="mpp"></td></tr></table>';
	    var infowindow25 = new google.maps.InfoWindow({
	      content: contentString25
	    });
	    var marker25 = new google.maps.Marker({
	      position: Casey  ,
	      map: map,
	      title: 'Casey  ',
	      icon: 'media/liberal_gy.png'
	    });
	    marker25.addListener('click', function() {
	      infowindow25.open(map, marker25);
	      map.panTo(this.getPosition());
	      map.setZoom(9);
	    });

	    
		//LaTrobe                    
        var contentString26 = 
        '<h1>La Trobe</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Mr Jason Wood MP</p>'+
        '<p><b>Party:</b><br/> Liberal Party</p>'+
        '<p><b>Twitter:</b><br/> @JasonWood_MP</p></td>'+
        '<td><img src="img/37.JPG" class="mpp"></td></tr></table>';
	    var infowindow26 = new google.maps.InfoWindow({
	      content: contentString26
	    });
	    var marker26 = new google.maps.Marker({
	      position: LaTrobe,
	      map: map,
	      title: 'LaTrobe',
	      icon: 'media/liberal_gy.png'
	    });
	    marker26.addListener('click', function() {
	      infowindow26.open(map, marker26);
	      map.panTo(this.getPosition());
	      map.setZoom(10);
	    });

	    
		//Holt                     
        var contentString27 =
        '<h1>Holt</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Anthony Byrne MP</p>'+
        '<p><b>Party:</b><br/> Labor Party</p>'+
        '<p><b>Twitter:</b><br/> @AnthonyByrne_MP</p></td>'+
        '<td><img src="img/7.jpg" class="mpp"></td></tr></table>';
	    var infowindow27 = new google.maps.InfoWindow({
	      content: contentString27
	    });
	    var marker27 = new google.maps.Marker({
	      position: Holt ,
	      map: map,
	      title: 'Holt ',
	      icon: 'media/labor_gy.png'
	    });
	    marker27.addListener('click', function() {
	      infowindow27.open(map, marker27);
	      map.panTo(this.getPosition());
	      map.setZoom(10);
	    });

	    
		//Isaacs                      
        var contentString28 =
        '<h1>Isaacs</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Mark Dreyfus QC, MP</p>'+
        '<p><b>Party:</b><br/> Labor Party</p>'+
        '<p><b>Titles(s):</b><br/> Deputy Manager of Opposition Business</p>'+
        '<p><b>Twitter:</b><br/> None</p></td>'+
        '<td><img src="img/11.JPG" class="mpp"></td></tr></table>';
	    var infowindow28 = new google.maps.InfoWindow({
	      content: contentString28
	    });
	    var marker28 = new google.maps.Marker({
	      position: Issacs  ,
	      map: map,
	      title: 'Issacs  ',
	      icon: 'media/labor_gy.png'
	      
	    });
	    marker28.addListener('click', function() {
	      infowindow28.open(map, marker28);
	      map.panTo(this.getPosition());
	      map.setZoom(9);
	    });

	    
		//Hotham                       
        var contentString29 = 
        '<h1>Hotham</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Ms Clare O&#39;Neil MP</p>'+
        '<p><b>Party:</b><br/> Labor Party</p>'+
        '<p><b>Twitter:</b><br/> @ClareONeilMP</p></td>'+
        '<td><img src="img/25.jpg" class="mpp"></td></tr></table>';
	    var infowindow29 = new google.maps.InfoWindow({
	      content: contentString29
	    });
	    var marker29 = new google.maps.Marker({
	      position: Hotham,
	      map: map,
	      title: 'Hotham',
	      icon: 'media/labor_gy.png'
	    });
	    marker29.addListener('click', function() {
	      infowindow29.open(map, marker29);
	      map.panTo(this.getPosition());
	      map.setZoom(11);
	    });

	    
		//Bruce                        
        var contentString30 =
        '<h1>Bruce</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Alan Griffin MP</p>'+
        '<p><b>Party:</b><br/> Labor Party</p>'+
        '<p><b>Twitter:</b><br/> None</p></td>'+
        '<td><img src="img/15.jpg" class="mpp"></td></tr></table>';
	    var infowindow30 = new google.maps.InfoWindow({
	      content: contentString30
	    });
	    var marker30 = new google.maps.Marker({
	      position: Bruce    ,
	      map: map,
	      title: 'Bruce    ',
	      icon: 'media/labor_gy.png'
	    });
	    marker30.addListener('click', function() {
	      infowindow30.open(map, marker30);
	      map.panTo(this.getPosition());
	      map.setZoom(11);
	    });

	    
		//Chisholm                         
        var contentString31 =
        '<h1>Chisholm</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Ms Anna Burke MP</p>'+
        '<p><b>Party:</b><br/> Labor Party</p>'+
        '<p><b>Twitter:</b><br/> None</p></td>'+
        '<td><img src="img/6.jpg" class="mpp"></td></tr></table>';
	    var infowindow31 = new google.maps.InfoWindow({
	      content: contentString31
	    });
	    var marker31 = new google.maps.Marker({
	      position: Chisholm     ,
	      map: map,
	      title: 'Chisholm     ',
	      icon: 'media/labor_gy.png'
	    });
	    marker31.addListener('click', function() {
	      infowindow31.open(map, marker31);
	      map.panTo(this.getPosition());
	      map.setZoom(11);
	    });
	    
	    
		//Deakin                          
        var contentString32 = 
        '<h1>Deakin</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Mr Michael Sukkar MP</p>'+
        '<p><b>Party:</b><br/> Liberal Party</p>'+
        '<p><b>Twitter:</b><br/> None</p></td>'+
        '<td><img src="img/31.jpg" class="mpp"></td></tr></table>';
	    var infowindow32 = new google.maps.InfoWindow({
	      content: contentString32
	    });
	    var marker32 = new google.maps.Marker({
	      position: Deakin,
	      map: map,
	      title: 'Deakin',
	      icon: 'media/liberal_gy.png'
	    });
	    marker32.addListener('click', function() {
	      infowindow32.open(map, marker32);
	      map.panTo(this.getPosition());
	      map.setZoom(11);
	    });

	    
		//Menzies                           
        var contentString33 =        
        '<h1>Menzies</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Kevin Andrews MP</p>'+
        '<p><b>Party:</b><br/> Liberal Party</p>'+
        '<p><b>Twitter:</b><br/> @kevinandrewsmp</p>'+
        '<p><a data-toggle="tab" href="#menzies">More Info...</a></p></td>'+
        '<td><img src="img/1.jpg" class="mpp"></td></tr></table>';
	    var infowindow33 = new google.maps.InfoWindow({
	      content: contentString33
	    });
	    var marker33 = new google.maps.Marker({
	      position: Menzies ,
	      map: map,
	      title: 'Menzies ',
	      icon: 'media/liberal.png'
	    });
	    marker33.addListener('click', function() {
	      infowindow33.open(map, marker33);
	      map.panTo(this.getPosition());
	      map.setZoom(11);
	    });

	    
		//Aston                            
        var contentString34  = 
        '<h1>Aston</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Alan Tudge MP</p>'+
        '<p><b>Party:</b><br/> Liberal Party</p>'+
        '<p><b>Title(s):</b><br/> Minister for Human Services</p>'+
        '<p><b>Twitter:</b><br/> @AlanTudgeMP</p></td>'+
        '<td><img src="img/34.jpg" class="mpp"></td></tr></table>';
	    var infowindow34 = new google.maps.InfoWindow({
	      content: contentString34
	    });
	    var marker34 = new google.maps.Marker({
	      position: Aston  ,
	      map: map,
	      title: 'Aston  ',
	      icon: 'media/liberal_gy.png'
	    });
	    marker34.addListener('click', function() {
	      infowindow34.open(map, marker34);
	      map.panTo(this.getPosition());
	      map.setZoom(11);
	    });

	    
		//Kooyong                            
        var contentString35  = 
        '<h1>Kooyong</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Josh Frydenberg MP</p>'+
        '<p><b>Party:</b><br/> Liberal Party</p>'+
        '<p><b>Title:</b><br/> Minister for Resources</p>'+
        '<p><b>Twitter:</b><br/> @JoshFrydenberg</p>'+
        '<p><a data-toggle="tab" href="#kooyong">More Info...</a></p></td>'+
        '<td><img src="img/13.jpg" class="mpp"></td></tr></table>';
	    var infowindow35 = new google.maps.InfoWindow({
	      content: contentString35
	    });
	    var marker35 = new google.maps.Marker({
	      position: Kooyong,
	      map: map,
	      title: 'Kooyong',
	      icon: 'media/liberal.png'
	    });
	    marker35.addListener('click', function() {
	      infowindow35.open(map, marker35);
	      map.panTo(this.getPosition());
	      map.setZoom(11);
	    });

	    
		//Higgins                             
        var contentString36  = 
        '<h1>Higgins</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Kelly ODwyer MP</p>'+
        '<p><b>Party:</b><br/> Liberal Party</p>'+
        '<p><b>Title(s):</b><br/> Minister for Small Business</p>'+
        '<p><b>Twitter:</b><br/> @KellyODwyer</p>'+
        '<p><a data-toggle="tab" href="#higgins">More Info...</a></p></td>'+
        '<td><img src="img/24.jpg" class="mpp"></td></tr></table>';
	    var infowindow36 = new google.maps.InfoWindow({
	      content: contentString36
	    });
	    var marker36 = new google.maps.Marker({
	      position: Higgins ,
	      map: map,
	      title: 'Higgins ',
	      icon: 'media/liberal.png'
	    });
	    marker36.addListener('click', function() {
	      infowindow36.open(map, marker36);
	      map.panTo(this.getPosition());
	      map.setZoom(11);
	    });
	    

		//Goldstein                              
        var contentString37  = 
        '<h1>Goldstein</h1>'+
        '<table><tr>'+
        '<td><p><b>MP:</b><br/> Hon Andrew Robb AO, MP</p>'+
        '<p><b>Party:</b><br/> Liberal Party</p>'+
        '<p><b>Twitter:</b><br/> @AndrewRobbMP</p>'+
        '<p><a data-toggle="tab" href="#goldstein">More Info...</a></p></td>'+
        '<td><img src="img/26.JPG" class="mpp"></td></tr></table>';
	    var infowindow37 = new google.maps.InfoWindow({
	      content: contentString37
	    });
	    var marker37 = new google.maps.Marker({
	      position: Goldstein,
	      map: map,
	      title: 'Goldstein',
	      icon: 'media/liberal.png'
	    });
	    marker37.addListener('click', function() {
	      infowindow37.open(map, marker37);
	      map.panTo(this.getPosition());
	      map.setZoom(11);
	    });
	    
      }
    </script>
    <!-- Google Map API -->
	<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFed46IMeMrwaFc41m5Q1oKYDQ9NVoyXY&callback=initMap">
    </script>

	<div style="clear: both"></div>

	<div id="footerwrap">
		<div class="container"></div>
	</div>




</body>
</html>
