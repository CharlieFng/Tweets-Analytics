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

<title>Sentiment Analyse| Team 18</title>

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
<script type="text/javascript" src="assets/js/loader.js"></script>
<script type="text/javascript" src="assets/js/canvasjs.min.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<link
	href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic'
	rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700'
	rel='stylesheet' type='text/css'>
<script type="text/javascript">
//google combo chart (bar + line)
	google.charts.load('current', {
		'packages' : [ 'corechart' ]
	});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {

	     var data = google.visualization.arrayToDataTable([
	                                                       ['Location',  'Geo Enabled', 'Income(*100)'],
	                                                       ['Melbourne',       1662,     556.8955125],
	                                                       ['Southbank',       664,      647.8294559],
	                                                       ['Richmond',       577,      584.7227962],
	                                                       ['Carlton',       541,      433.3646918],
	                                                       ['South Wharf',       458,      909.48],
	                                                       ['Docklands',       439,      668.2999513],
	                                                       ['Armadale',       404,      622.3309532],
	                                                       ['Traralgon',       388,      401.7695126],
	                                                       ['East Melbourne',       369,      685.7716667],
	                                                       ['Whittington',       360,      268.3942857]
	                                                    ]);

	


	    var options = {
	    	      title : '',
	    	      seriesType: 'bars',
	    	     width: '800',
	    	      series: {1: {type: 'area'}},
	    	      legend: { position: 'bottom', }
	    	 
	    	    };
		
		var options2 = {
				 title : 'Monthly Coffee Production by Country',
		
			};
		

	

		var chart = new google.visualization.ComboChart(document
				.getElementById('chart'));
		chart.draw(data, options);

	
		

	}
</script>


<style type="text/css">
.tg {
	border-collapse: collapse;
	border-spacing: 0;
	border-color: #ccc;
}

.tg td {
	font-family: Arial, sans-serif;
	font-size: 14px;
	padding: 10px 5px;
	border-style: solid;
	border-width: 1px;
	overflow: hidden;
	word-break: normal;
	border-color: #ccc;
	color: #333;
	background-color: #fff;
}

.tg th {
	font-family: Arial, sans-serif;
	font-size: 14px;
	font-weight: normal;
	padding: 10px 5px;
	border-style: solid;
	border-width: 1px;
	overflow: hidden;
	word-break: normal;
	border-color: #ccc;
	color: #333;
	background-color: #f0f0f0;
}

.tg .tg-yzt1 {
	background-color: #efefef;
	vertical-align: top
}

.tg .tg-bsv2 {
	background-color: #efefef
}

.tg .tg-4eph {
	background-color: #f9f9f9
}

.tg .tg-b7b8 {
	background-color: #f9f9f9;
	vertical-align: top
}

.tg .tg-yw4l {
	vertical-align: top
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



	<!-- ==== HEADERWRAP ==== -->


	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>

	<h1 class="centered">Privacy</h1>


	<!-- /headerwrap -->


	<!-- ==== charts ==== -->
	<div class="container">
		<div class="row white">






			<div id="chart" style="margin-left: 15%;"></div>

			<p>&nbsp;</p>
			<div style="text-align: center; margin-left: 30%;">

				<table class="tg">
					<tr>
						<th class="tg-bsv2">Area</th>
						<th class="tg-bsv2">Geo Enabled</th>
						<th class="tg-bsv2">Income</th>
						<th class="tg-yzt1">Population</th>
					</tr>
					<tr>
						<td class="tg-031e">Melbourne</td>
						<td class="tg-4eph">1662</td>
						<td class="tg-031e">55689.55125</td>
						<td class="tg-b7b8">20031</td>
					</tr>
					<tr>
						<td class="tg-031e">Southbank</td>
						<td class="tg-4eph">644</td>
						<td class="tg-031e">64782.94559</td>
						<td class="tg-b7b8">11310</td>
					</tr>
					<tr>
						<td class="tg-031e">Richmond</td>
						<td class="tg-4eph">577</td>
						<td class="tg-031e">58472.27962</td>
						<td class="tg-b7b8">26120</td>
					</tr>
					<tr>
						<td class="tg-yw4l">Carlton</td>
						<td class="tg-b7b8">541</td>
						<td class="tg-yw4l">43336.46918</td>
						<td class="tg-b7b8">14104</td>
					</tr>
					<tr>
						<td class="tg-yw4l">South Wharf</td>
						<td class="tg-b7b8">458</td>
						<td class="tg-yw4l">90948</td>
						<td class="tg-b7b8">N/A</td>
					</tr>
					<tr>
						<td class="tg-yw4l">Docklands</td>
						<td class="tg-b7b8">439</td>
						<td class="tg-yw4l">66829.99513</td>
						<td class="tg-b7b8">5790</td>
					</tr>
					<tr>
						<td class="tg-yw4l">Armadale</td>
						<td class="tg-b7b8">404</td>
						<td class="tg-yw4l">62233.09532</td>
						<td class="tg-b7b8">8760</td>
					</tr>
					<tr>
						<td class="tg-yw4l">Traralgon</td>
						<td class="tg-b7b8">388</td>
						<td class="tg-yw4l">40176.95126</td>
						<td class="tg-b7b8">25699</td>
					</tr>
					<tr>
						<td class="tg-yw4l">East Melbourne</td>
						<td class="tg-b7b8">369</td>
						<td class="tg-yw4l">68577.16667</td>
						<td class="tg-b7b8">4904</td>
					</tr>
					<tr>
						<td class="tg-yw4l">Whittington</td>
						<td class="tg-b7b8">360</td>
						<td class="tg-yw4l">26839.42857</td>
						<td class="tg-b7b8">N/A</td>
					</tr>
				</table>
			</div>


			<!-- col-lg-6 -->

			<!-- col-lg-6 -->
		</div>
		<!-- row -->
	</div>
	<!-- container -->








	<!-- ==== SERVICES ==== -->
	<div class="container">
		<br> <br>
		<div class="row">

			<hr>
			<br>
			<div class="col-lg-offset-2 col-lg-8">
				<p>
					<b>Assumption</b><br /> We expect to see less geo enabled Tweets from
					high-income area than the low-income area, as we believe the
					high-income people pay more attention to privacy.
				</p>

				<p>
					<b>Result</b><br /> We compared the result from the Twitter data with the
					data from Aurin. The result shows the number of geo enabled Tweets
					in an area is income irrelevant.
				</p>
			</div>
			<!-- col-lg -->
		</div>
		<!-- row -->


	</div>
	<!-- container -->

<p>&nbsp;</p>





	<div id="footerwrap">
		<div class="container"></div>
	</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->


	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery-func.js"></script>
</body>
</html>
