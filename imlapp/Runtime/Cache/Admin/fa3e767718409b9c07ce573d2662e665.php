<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>i微学--一点一点轻松学</title>
</head>
<body>

添加管理员
<form action="../admin/newadmin" method="post">
	
	用户名<input type="text" name="name"><br>
	密码<input type="text" name="pwd1"><br>
	再输一次密码<input type="text"name="pwd2"><br>
	<input type="submit" value="添加">
</form>

</body>
</html>