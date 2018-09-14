jQuery(document).ready(function() {
	var G = 0;
	jQuery(".dws-submit").on("click", function() {
		if(G == 0) {
			G = 1;
			var userLogin 	= jQuery('#login').val();
			var userPass 	= jQuery('#password').val();
			jQuery.ajax({
				type: 'POST',
			  	url: 'auth.php',
			  	data: {userLogin:userLogin, userPass:userPass},
			  	success: function(data){
				    var Data = JSON.parse(data);
				    if(Data.auth == 0)
				    {
				    	//Тут блять то, что если пароль неверный
				    }
				    if(Data.auth == 1)
				    {
				    	document.cookie = "ID="+Data.ids;
				    	location.href = 'index.php';
				    }
				    G = 0;
				}
			})
		}
	})
});