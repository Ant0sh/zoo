<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>{$title}</title>
	<link rel="stylesheet" type="text/css" href="style_admin.css">
</head>
<body>
<div id="login_container">
	<div id="login_text">���� � ���������������� ������ ���������� ���������</div>
	<form method="post" action="admin_panel.php">
		<div class="text">�����:</div><input class="input" type="text" name="login" size="20" />
		<div class="text">������:</div><input class="input" type="password" name="password" size="20" />
		<div id="login_ok"><input type="submit" title="�����" value="�����">
		<input type="submit" title="������" value="������" onclick="index.php"></div>
	</form>
</div>
</body>
</html>