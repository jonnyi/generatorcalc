
//onLoad
var selectedAppliances = new Array();


//Populate app list from JSON, inc class of cat
$(document).ready(function(){ 
    var applicationObject;
    $.getJSON("appliances.json", function(result){
    	applicationObject = result
        $.each(result, function(i, field){
            $(".appliance-selector .item-list").append("<li id='" + field.id + "' class='" + field.category + "'>"+ field.name + "</li>");
        });

		//onclick of item adds id to global arr and revaluates results
		$('.appliance-selector .item-list').on('click', 'li', function() {
			var applicationId = $(this).attr("id");
			$.each(applicationObject, function(index, currentAppliance) {
				if(currentAppliance.id == applicationId){
					//Add appliance object only if not added already
					if(selectedAppliances.length == 0 ){
						currentAppliance.quantity = 1;
						selectedAppliances.push(currentAppliance);
					} else{
						var unique = true;
						var selectedApplianceToIncrement;
						$.each(selectedAppliances, function(index, currentSelectedAppliance) {
							if(currentAppliance.id == currentSelectedAppliance.id){
								unique = false;
								selectedApplianceToIncrement = currentSelectedAppliance;
								return false;	
							}
						});
						if(unique){
							currentAppliance.quantity = 1;
							selectedAppliances.push(currentAppliance);
						} else {
							//If ID exists already in selectedAppliances then add qunatity to that object in selectedAppliances /or incrament
							//console.log("Appliance already selected!");
							selectedApplianceToIncrement.quantity++;
						}
					}	
				}
			});
			updateResults();
		});
		$('#results-table').on('click', '.remove-appliance', function() {
			removeAppliance($(this).attr("data-removeid"));
		});
    });
	
	//Filter list onclick events to hide/ show list items based on their class
	$(".appliance-selector .category-selector a").click(function() {
		var classToShow = $(this).attr("data-show");
		$(".appliance-selector .item-list li" ).hide();
		if($( ".appliance-selector .item-list li." + classToShow).length != 0){
			$( ".appliance-selector .item-list li." + classToShow).show();	
		} else {
			$( ".appliance-selector .item-list li").show();		
		}
	});
	


	function removeAppliance(applianceId){
		var positionToRemove;
		$.each(selectedAppliances, function(index, currentAppliance) {
			if(currentAppliance.id == applianceId){
				positionToRemove = index;	
			}
		});
		selectedAppliances.splice(positionToRemove,1);
		updateResults();
	}
	$("#manual-form").submit(function(e) {
		addManual();
		e.preventDefault();
		
	});

});

function updateResults(){
	var highestStartingWattageIndex;
	var highestStartingWattage = 0;
	var totalStartingWattage = 0;
	var totalRunningWattage = 0;
	var recommendedWattage = 0;

	$("#results-table").empty();

	if(selectedAppliances.length > 0){
		$.each(selectedAppliances, function(index, currentAppliance) {
			totalRunningWattage = totalRunningWattage + (currentAppliance.runningwattage * currentAppliance.quantity);
			totalStartingWattage = totalStartingWattage + (currentAppliance.startingwattage * currentAppliance.quantity);
			if((currentAppliance.runningwattage * currentAppliance.quantity) > highestStartingWattage){
				highestStartingWattage = (currentAppliance.startingwattage * currentAppliance.quantity);
				highestStartingWattageIndex = index;
			}
		});
		var highWattObj = selectedAppliances[highestStartingWattageIndex];
		recommendedWattage = ((totalRunningWattage - (highWattObj.runningwattage * highWattObj.quantity)) + (highWattObj.startingwattage * highWattObj.quantity));

		//Render results
		$('#results-table').append("<tr><th>Name</th><th>Quantity</th><th>Starting Wattage</th><th>Running Wattage</th><th>Remove</th></tr>");
		$.each(selectedAppliances, function(index, value) {
			$('#results-table').append( "<tr><td>" + value.name + "</td><td>" + value.quantity + "</td><td>" + (value.startingwattage * value.quantity) + "</td><td>" + (value.runningwattage * value.quantity) + "</td><td><a data-removeid='" + value.id + "' class='remove-appliance'>X</a></td></tr>");
		});
		$('#results-table').append( "<tr><th>Totals</th><th></th><th>" + totalStartingWattage + "</th><th>" + totalRunningWattage + "</th></tr>");
		$("#recommended-wattage").html(recommendedWattage);
		$("#maximum-wattage").html(totalStartingWattage);
	}
}

function addManual(){
    var formData = $("#manual-form").serializeArray();   
    var appObject = {
		"id": "item_" + Math.floor(Math.random() * 1000001),
		"name": formData[0].value,
		"quantity": formData[1].value,
		"runningwattage": formData[2].value,
		"startingwattage": formData[3].value,
		"category": "all",
		"icon": "na"
	}
	selectedAppliances.push(appObject);
	updateResults();
}

