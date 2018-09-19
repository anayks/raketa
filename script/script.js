jQuery(document).ready(function() {
	var G = 0;
	jQuery(".dws-submit").on("click", function() {
		if(G == 0) {
			G = 1;
			var userLogin 	= jQuery('#login').val();
			var userPass 	= jQuery('#password').val();
			var i=0;
			for(i=0; i<userLogin.length; i++)
			{
				if((userLogin[i] >= "A" && userLogin[i] <= "Z") || (userLogin[i] >= "a" && userLogin[i] <= "z") || (userLogin[i] >= "0" && userLogin[i] <= "9") || userLogin[i] == "_") continue;
				else {
					//Если мудила гороховая ввел запрещенные символы в логине
					G = 0;
					return 0;
				}
				if((userPass[i] >= "A" && userPass[i] <= "Z") || (userPass[i] >= "a" && userPass[i] <= "z") || (userPass[i] >= "0" && userPass[i] <= "9") || userPass[i] == "_") continue;
				else {
					//Если мудила гороховая ввел запрещенные символы в пароле
					G = 0;
					return 0;
				}
				if(userLogin.length == 0)
				{
					//Если дифичента ебаный не ввёл логин
					G = 0;
					return 0;
				}
				if(userPass.length == 0)
				{
					//Если дурак блять не ввёл пароль
					G = 0;
					return 0;
				}
			}
			jQuery.ajax({
				type: 'POST',
			  	url: 'auth.php',
			  	data: {userLogin:userLogin, userPass:userPass},
			  	success: function(data){
				    var Data = JSON.parse(data);
				    if(Data.auth == 0)
				    {
				    	// Если у этого мудака даже аккаунта нет, а он блять авторизовывается
				    	jQuery("#login").animate({"margin-top": "+120%"}, 850);
				    }
				    if(Data.auth == 1)
				    {
				    	// Если это тупое говно не помнит пароль, а помнит только логин
				    	jQuery("#login").animate({"margin-top": "+120%"}, 850);
				    }
				    if(Data.auth == 2)
				    {
				    	document.cookie = "ID="+Data.ids;
				    	location.href = 'index.php';
				    }
				    G = 0;
				}
			})
		}
	})
});44
