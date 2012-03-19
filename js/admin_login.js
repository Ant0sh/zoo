$(document).ready(function() {
	$('#cancel_bt').live('click', function(event){
		document.location.href="index.php"
	});

	$('#ok_bt').live('click', function(event){
		var login = $(':input:first').val();
		var password = $(':input:last').val();
		$.post('admin_login_ajax.php', {login: login, password: password},
			function(data){
				if(data == 1){
					document.location.href="admin_panel.php";
				}
				else{
					$('#status').text('Неверный логин или пароль!');
				}
			});
		});
});