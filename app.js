
//onLoad
	//Populate app list from JSON, inc class of cat

$(document).ready(function(){
    $.getJSON("appliances.json", function(result){
        $.each(result, function(i, field){
            $("div").append(field + " ");
        });
    });
});




//Filter list onclick events to hide/ show list items based on their class

//onclick of item adds id to global arr and revaluates results

//revaluate results will look up details from JSON based on ID's and populate the table and final wattage
