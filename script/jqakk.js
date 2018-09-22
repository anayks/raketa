jQuery(document).ready(function(){
	var list = document.getElementsByClassName("TableH");
	var list1 = document.getElementsByClassName("TableR");
	var summ = list.length + list1.length;
	var G = new Array(summ);
	for(var i = 0; i<G.length; i++) {
		if(document.getElementById("QQ"+i).innerHTML == "Подтверждено")
		{
			G[i] = 0;
		}
		else 
		{
			G[i] = 1;
		}
	}
	jQuery(".TableH").click(function() {
		var idtext = this.id;
		var idn = "";
		var i = 1;
		for(i = 2; i < idtext.length; i++){
			idn = idn + idtext[i];
		}
		if(G[idn] == 1) 
		{
			var id = document.getElementById("F"+idn).innerHTML;
			jQuery.ajax({
				type: 'POST',
				  url: 'save.php',
				  data: {id:id},
				  success: function(data){
					var Data = JSON.parse(data);
					jQuery("#"+idtext+"R").css({"display":"none"});
					jQuery("#"+idtext+"RR").css({"display":"block"});
					jQuery("#"+idtext).css({"background":"#c4f0c5", "cursor": "default"});
					G[idn] = 0;
				}
			});
		}
		else {}
	});
	var A = 0;
	var glist = document.getElementsByClassName("TableM");
	var glist1 = document.getElementsByClassName("TableN");
	var gsumm = glist.length + glist1.length;
	var Gs = new Array(gsumm);
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
		for(var i = 0; i<Gs.length; i++) {
			if(document.getElementById("MM"+i).innerHTML == "Подтверждено")
			{
				Gs[i] = 0;
			}
			else 
			{
				Gs[i] = 1;
			}
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
	jQuery(".TableM").click(function() {
		var idtext = this.id;
		var idn = "";
		var i = 1;
		for(i = 2; i < idtext.length; i++){
			idn = idn + idtext[i];
		}
		if(Gs[idn] == 1) 
		{
			var id = document.getElementById("Fz"+idn).innerHTML;
			alert(id);
			jQuery.ajax({
				type: 'POST',
				  url: 's.php',
				  data: {id:id},
				  success: function(data){
					var Data = JSON.parse(data);
					jQuery("#"+idtext).css({"background": "#c4f0c5"});
					jQuery("#"+idtext+"R").css({"display":"none"});
					jQuery("#"+idtext+"RR").css({"display":"block"});
					Gs[idn] = 0;
				}
			});
		}

	})
})