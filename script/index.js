jQuery(document).ready(function(){
	var G = 0;
	var R = 0;
	var F = 0;
	jQuery(".dws-submit3").on("click", function() {
		if(R == 0)
		{
			R = 1;
			var Name = jQuery("#FIO").val();
			var Number = jQuery("#Number").val();
			var OA = jQuery("#OA").val();
			var DA = jQuery("#DA").val();
			var DXS = jQuery("#DXS").val();
			var Weight = jQuery("#Weight").val();
			if(Name.length < 3) {
				Baraban(1);
				R = 0;
				return false;
			}
			else if(Number.length < 11)
			{
				Baraban(2);
				R = 0;
				return false;
			}
			else 
			{
				for(var i = 0; i<OA.length; i++)  {
					if((OA[i] >= "A" && OA[i] <= "Z") || (OA[i] >= "а" && OA[i] <= "я") || (OA[i] >= "А" && OA[i] <= "Я") || (OA[i] >= "a" && OA[i] <= "z")) continue;
					else { Baraban(3);R = 0; return false; }
				}
				for(var i = 0; i<DA.length; i++)  {
					if((DA[i] >= "A" && DA[i] <= "Z") || (DA[i] >= "а" && DA[i] <= "я") || (DA[i] >= "А" && DA[i] <= "Я") || (DA[i] >= "a" && DA[i] <= "z")) continue;
					else { Baraban(4);R = 0; return false; }
				}
				for(var i = 0; i<DXS.length; i++)  {
					if((DXS[i] >= "A" && DXS[i] <= "Z") || (DXS[i] >= "а" && DXS[i] <= "я") || (DXS[i] >= "А" && DXS[i] <= "Я") || (DXS[i] >= "a" && DXS[i] <= "z") || (DXS[i] >= "0" && DXS[i] <= "9")) continue;
					else { Baraban(5); R = 0;return false; }
				}
				for(var i = 0; i<Weight.length; i++)  {
					if((Weight[i] >= "A" && Weight[i] <= "Z") || (Weight[i] >= "а" && Weight[i] <= "я") || (Weight[i] >= "А" && Weight[i] <= "Я") || (Weight[i] >= "a" && Weight[i] <= "z") || (Weight[i] >= "0" && Weight[i] <= "9")) continue;
					else { Baraban(6); R = 0;return false; }
				}
				for(var i = 0; i<Number.length; i++)  {
					if(Number[i] == "+" || (Number[i] >= "0" && Number[i] <= "9")) continue;
					else { Baraban(7); R = 0;return false; }
				}
				for(var i = 0; i<Name.length; i++)  {
					if((Name[i] >= "A" && Name[i] <= "Z") || (Name[i] >= "а" && Name[i] <= "я") || (Name[i] >= "А" && Name[i] <= "Я") || (Name[i] >= "a" && Name[i] <= "z")) continue;
					else { Baraban(8); R = 0;return false; }
				}
			}
			jQuery.ajax({
				type: 'POST',
				url: 'pomogite.php',
				data: {Name:Name, Number:Number, OA:OA, DA:DA, DXS:DXS, Weight:Weight},
				success: function(data){
					var Data = JSON.parse(data);
					Baraban(9);
					jQuery("body").animate({"body": "font-family: 'Roboto', sans-serif;"}, 3000, function() {
					jQuery("#mask1").slideUp(1000);
					R = 0;
				})
			  }
			});
			return 0;
			R = 0;
		}
	})
	function Baraban (A) {
		jQuery(".Err").empty();
		if(A == 1) {
			jQuery(".Err").append("<p>Ошибка при заполнении<p> (имя должно иметь больше 2 символов)");
		}
		else if(A == 2)
		{
			jQuery(".Err").append("<p>Ошибка при заполнении<p> (номер должен иметь более 10 символов)");
		}
		else if(A == 3)
		{
			jQuery(".Err").append("<p>Ошибка при заполнении<p>(в адресе отправки используются запрещенные символы)");
		}
		else if(A == 4)
		{
			jQuery(".Err").append("<p>Ошибка при заполнении<p>(в адресе доставки используются запрещенные символы)");
		}
		else if(A == 5)
		{
			jQuery(".Err").append("<p>Ошибка при заполнении<p>(в габаритах груза используются запрещенные символы)");
		}
		else if(A == 6)
		{
			jQuery(".Err").append("<p>Ошибка при заполнении<p>(пример веса: \"100 кг\"; \"10 тонн\")");
		}
		else if(A == 7)
		{
			jQuery(".Err").append("<p>Ошибка при заполнении<p> (В номере разрешен только '+' и арабские цифры)");
		}
		else if(A == 8)
		{
			jQuery(".Err").append("<p>Ошибка при заполнении<p> (В имене разрешены только кириллица и латиница)");
		}
		else if(A == 9)
		{
			jQuery(".Err").append("<p>Данные отправлены, Вам перезвонят в ближайшее время!<p> ");

		}
		if(G == 0) {
			G = 1;
			jQuery(".Err").slideToggle(700);
		}
	}
	jQuery(".dws-submit2").on("click", function() {
		if(F == 0)
		{
			F = 1;
			var Name = jQuery("#fas").val();
			var Number = jQuery("#nib").val();
			if(Name.length < 3) {
				Baraban(1);
				F = 0;
				return false;
			}
			else if(Number.length < 11)
			{
				Baraban(2);
				F = 0;
				return false;
			}
			else {
					for(var i = 0; i<Number.length; i++)  {
					if(Number[i] == "+" || (Number[i] >= "0" && Number[i] <= "9")) continue;
					else { Baraban(7); F = 0;return false; }
				}
				for(var i = 0; i<Name.length; i++)  {
					if((Name[i] >= "A" && Name[i] <= "Z") || (Name[i] >= "а" && Name[i] <= "я") || (Name[i] >= "А" && Name[i] <= "Я") || (Name[i] >= "a" && Name[i] <= "z")) continue;
					else { Baraban(8); F = 0;return false; }
				}
			}
			jQuery.ajax({
				type: 'POST',
				url: 'umer.php',
				data: {Name:Name, Number:Number},
				success: function(data){
					var Data = JSON.parse(data);
					Baraban(9);
					jQuery("body").animate({"body": "font-family: 'Roboto', sans-serif;"}, 3000, function() {
					jQuery("#mask").slideUp(1000);
					R = 0;
				})
			  }
			});
			return false;
		}
	})
});