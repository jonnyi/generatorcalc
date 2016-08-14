<?php 
	$page_title = "Learning center";
	$page_description = "'Technical resources and guides to help you choose the perfect generator'";
	$page_keywords = "'Generator guides, Generator techincal resources'";
	$page_class = "'learning-center'";
 	$path = $_SERVER['DOCUMENT_ROOT'];
 	$path .= "/header.php";
 	include_once($path);
 ?>

<div class="content">
	<h1>Learning Center</h1>
	
	<div class="page-section">
		<h2>Selection guides</h2>
		<div class="guide-entry">
			<a href="/blogs/selection-guide/choosing-generator-size.php">Choosing the Best Generator Size</a>
			<p>If you're thinking about buying a generator but aren't sure how much power you will need this guide is for you. We lay out all of the factors you will need to consider to size your generator perfectly.</p>
		</div>	
		<div class="guide-entry">
			<a href="/blogs/selection-guide/choosing-generator-fuel-type.php">Choosing the Right Fuel Type</a>
			<p>Modern generators can be powered by gasoline, diesel, propane or natural gas. But which fuel is the best for you? Read through this guide to find out.</p>
		</div>	
		<div class="guide-entry">
			<a href="/blogs/selection-guide/standard-generator-vs-inverter-generator.php">Standard Generator vs Inverter Generator</a>
			<p>Understand the difforences between the traditional generator and the latest technologiocal advances in available using the inverter generator.</p>
		</div>				
	</div>	
</div>

<?php 
 	$path = $_SERVER['DOCUMENT_ROOT'];
 	$path .= "/footer.php";
 	include_once($path);
?>