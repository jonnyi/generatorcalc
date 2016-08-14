<?php 
	$page_title = "Generator Calculator";
	$page_description = "'Use generator-calculator.com to determine your electric generator power needs for recreation, construction, home backup, and emergency use'";
	$page_keywords = "'Generators, Generator Calculator, Power generator, Power needs'";
 	$path = $_SERVER['DOCUMENT_ROOT'];
 	$path .= "/header.php";
 	include_once($path);
 ?>

<div class="content">
	<input type="hidden" id="ga-wattage">
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
</div>
<?php 
 	$path = $_SERVER['DOCUMENT_ROOT'];
 	$path .= "/footer.php";
 	include_once($path);
?>
