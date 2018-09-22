jQuery(document).ready(function(){
	var A = 0;
	jQuery(".Rima").on("click", function() {
		if(A == 0)
		{
			A = 1;
			var a = document.getElementById('TableQ').offsetHeight;
			jQuery("#TableQ").animate({"opacity": "0"}, 700, function() {
				jQuery("#TableQ").css({"display": "none"});
				jQuery("#TableJ").css({"display":"table"})
				jQuery("#TableJ").animate({"opacity":"1"}, 600);
			});
			jQuery(".Rima").css({"opacity": "0.3", "cursor":"default"});
			jQuery(".Lima").css({"opacity": "1", "cursor":"pointer"});
		}
	});
	jQuery(".Lima").on("click", function() {
		if(A == 1)
		{
			A = 0;
			var a = document.getElementById('TableQ').offsetHeight;
			jQuery("#TableJ").animate({"opacity": "0"}, 700, function() {
				jQuery("#TableJ").css({"display": "none"});
				jQuery("#TableQ").css({"display": "table"});
				jQuery("#TableQ").animate({"opacity":"1"}, 600);
			});
			jQuery(".Lima").css({"opacity": "0.3", "cursor":"default"});
			jQuery(".Rima").css({"opacity": "1", "cursor":"pointer"});
		}
	});
});