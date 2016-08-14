<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<title>Generator Calculator</title>
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
		<meta content="Use generator-calculator.com to determine your electric generator power needs for recreation, construction, home backup, and emergency use" name="description">
		<meta content="Generators, Generator Calculator, Power generator, Power needs" name="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="app.js"></script>
		<script type="text/javascript" src="aff-links.js"></script>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,100" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="apple-touch-icon" sizes="57x57" href="/images/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/images/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/images/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/images/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/images/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/images/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/images/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/images/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/images/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
		<link rel="manifest" href="/images/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/images/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">		
	</head>
	<body>
		<input type="hidden" id="ga-wattage">
		<div class="page_wrapper">
			<div class="header">
				<div class="logo">Generator Calculator</div>
				<div class="menu">
					<ul>
						<li><a href="index.html">Calculator</a></li>
						<li><a href="javascript:void(0)" id="about-link">About</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="content">
				<div class="hero-content">
					<h1 class="home-page">Generator Calculator</h1>
					<p>Generator calculator helps you determine your electrical power needs for recreation, construction, home backup, and emergency use!</p>
				</div>
				<div class="appliance-selector">
					<div class="category-selector">
						<a href="javascript:void(0)" data-show="home" class="home selected">Home</a>
						<a href="javascript:void(0)"  data-show="work" class="work">Work</a>
						<a href="javascript:void(0)"  data-show="leisure" class="leisure">Leisure</a>
					</div>
					<div class="item-selector">
						<ul class="item-list"></ul>
						<div class="custom">
							<h3>Add custom appliance:</h3>
							<form id="manual-form">
								<input type="text" name="quick-name" id="quick-name" placeholder="Add a name" required>
								<input type="number" name="quantity" id="quantity" placeholder="Quantity" min="1" max="20" value="1" required>
								<input type="number" name="wattage-running" id="wattage-running" placeholder="Wattage" max="20000">
								<input type="number" name="wattage-starting" id="wattage-starting" placeholder="Starting Wattage" max="20000">
								<input type="submit" value="Add item">
							</form>
						</div>
					</div>
				</div>
				<div class="loadout">
					<table id="results-table"></table>
				</div>
				<div class="recommendations">
					<a href="javascript:void(0)" id="more-info" onclick="toggleOverlay('#more-info-overlay');">
						<span class="whats-this">What does this mean?</span>
						<span class="material-icons">info_outline</span>
					</a>
					<div class="rec-wattage">
						<p>Recommended Wattage</p> 
						<p class="result"><span id="recommended-wattage"></span>watt</p>
					</div>
					<div class="rec-max"><p>Maximum Wattage: <span id="maximum-wattage"></span>watt</p></div>
					<!--<div><p>Estimated running cost per hour: XXX</p></div>-->
				</div>
				<div class="button-container">
					<a id="aff-link" href="" target="_blank">Find matching generators <span class="tag-line">Between <span class="low"></span> and <span class="high"></span>watts</span></a>
				</div>
			</div>

			<div class="footer">
				<div class="footer-content">
					<div class="about">
						<h4 class="">
							About Generator Calculator
						</h4>
						<p>Use Generator Calculator to make more informed decisions before purchasing a genertor based on your own specific power needs. Start by simply browsing and selecting the appliances you would like to power and view the resulting power wattage you will need to sustain those appliances.</p>
						<p>Appliances are divided into categories of home, work and leisure for easier browsing however you are able to mix and match all appliances</p>
						<p>If you would like to make improvment suggestions or have a question about generator calculator please e-mail <a href="mailto:info@generator-calculator.com">info@generator-calculator.com</a></p>
					</div>
					<div class="disclaimer">
						<p>Disclaimer: Although this tool is designed to act as a guide please ensure that you contact the manufactorer of your chosen generator if you have any doubts. Overloading your generator can cause both it and your appliances damage.</p>
						<p>&copy; Generator Calculator 2016</p>
					</div>
				</div>
			</div>
		</div>
		<div id="more-info-overlay" class="moreinfo-overlay-wrapper">
			<div class="moreinfo-overlay">
				<a href="javascript:void(0)" id="close-more-info" onclick="toggleOverlay('#more-info-overlay');"><i class="material-icons">clear</i></a>
				<h2>What do these results mean</h2>
				<h3>Starting wattage &amp; Running wattage</h3>
				<p>Some appliances require a higher amount of power for a few seconds when starting but once started they may only then need a fraction of that power to run. Appliances that have electric motors and moving parts, such as power tools, a furnace or washing machine will have a higher starting wattage. Most small appliances will consistently require the same power.</p>

				<h3>Why do we give 'Recommended Wattage' &amp; 'Maximum Wattage' in the results</h3>
				<p>(Highest starting wattage + Total running wattage of <i>other</i> appliances) = 'Recommended Wattage'</p>
				<p>The 'Recommended Wattage’ suggests the amount of power you will need to power all of your selections at once.</p>
				<p>This total assumes that each appliance will be started on it’s own as it is not likely you will need to start all appliances at once. The ‘Recommended Wattage’ is the best size to choose for most people.</p>
				<p>The ‘Maximum Wattage' is the power that would be needed if all selected appliances were to be started at once however this is most likely too large for general running purposes.</p>
			</div>
		</div>
		<!--<div class="view-results">
			<a href="javascript:void(0)" id="more-info" onclick="toggleOverlay('#more-info-overlay');">
				<span>Results</span>
				<i class="material-icons">arrow_downward</i>
			</a>			
		</div>
		-->		
		<script>
			var ga;
			if (document.location.hostname.search("generator-calculator.com") !== -1) {  
				//Google Analytics Script
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			} else {
			    console.log("Running non-production google analytics replacement now");
			    ga = function(arg) {
			        console.log("ga:", arguments);
			    };
			}
			ga('create', 'UA-81002642-1', 'auto');
			ga('send', 'pageview');
		</script>
	</body>
</html>