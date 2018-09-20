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
			var list = document.getElementsByClassName("TableH");
			var list1 = document.getElementsByClassName("TableR");
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
			})
		}
		else {}
	})
})