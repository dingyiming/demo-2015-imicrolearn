<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" href="/imicrolearn/Public/css/animate.min.css">
		<link rel="stylesheet" href="/imicrolearn/Public/css/bootstrap.min.css">
		<link rel="stylesheet" href="/imicrolearn/Public/css/font-awesome.min.css">
		<link href='http://fonts.useso.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/imicrolearn/Public/css/templatemo-style.css">
		<link rel="stylesheet" href="/imicrolearn/Public/css/imicrolearn.css">
		<link rel="shortcut icon" href="/imicrolearn/Public/favicon.ico">
		<title>【i微学】一点一滴轻松学</title>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
			<div class="container">

				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#"  data-toggle="modal" data-target="#index" class="navbar-brand">【i微学】</a>
				</div>
				
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right text-uppercase">
					
             
             <li><a href="#" data-toggle="modal" data-target="#fx">方向</a></li>
					
				    <?php if(empty($showusername)): ?><li><a href="#" data-toggle="modal" data-target="#login">登录</a></li>
            <?php else: ?> 
              <li><a href="#" data-toggle="modal" data-target="#user" ><?php echo ($showusername); ?></a></li><?php endif; ?>
					</ul>

					
				</div>
				
			</div>
      <div class="row" >
      <div id="full" class="container-fluid">
      <div id="cb"></div>
      </div>
      </div>
</nav>

<!-- Modal -->
<div class="modal fade " id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">【请登录】</h4>
      </div>
      <div class="modal-body">
       
       <form action="/imicrolearn/user/islogin" method="post"><div class="form-group">
    	<label for="name"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></label>
   		<input type="text" class="form-control" id="name" placeholder="用户名" name="name" required>
  		</div>
  		<div class="form-group">
    	<label for="pwd"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
    	<input type="password" class="form-control" id="pwd" placeholder="密码" name="pwd" required>
  		</div>
  		<div class="checkbox">
    	<label>
      	<input type="checkbox">自动登录
    	</label>
  		</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">登录</button>
        <a href="/imicrolearn/user/register">
        <button type="button" class="btn btn-primary">注册</button>
        </a>
     </form>
      </div>
      
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade " id="fx" tabindex="-1" role="dialog" aria-labelledby="fx1" aria-hidden="true">

  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="fx1">有方向很重要</h4>
      </div>
      <div class="modal-body">
      

            <div class="list-group">
            <?php if(is_array($alltype)): $i = 0; $__LIST__ = $alltype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/imicrolearn/course/typecourse?id=<?php echo ($vo["id"]); ?>" class="text-center list-group-item list-group-item-info"><h5><?php echo ($vo["typename"]); ?></h5></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
      
      </div>
      <div class="modal-footer">

        <a href="/imicrolearn/way/showway"><button type="button" class="btn btn-primary btn-lg btn-block">看全部经验</button></a>
        <br>
        <a href="/imicrolearn/course/showcourse"><button type="button" class="btn btn-primary btn-lg btn-block">看全部教程</button></a>
       
        </a>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade " id="user" tabindex="-1" role="dialog" aria-labelledby="user1" aria-hidden="true">

  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="user1">去哪儿？</h4>
      </div>
      <div class="modal-body">
      

            <div class="list-group">
         
            <a href="/imicrolearn/user/userinfo" class="text-center list-group-item list-group-item-info"><h5>查看我的收录</h5></a>
            <a href="/imicrolearn/course/typecourse?id=<?php echo ($vo["id"]); ?>" class="text-center list-group-item list-group-item-info"><h5>查看我的专辑</h5></a>
            <a href="/imicrolearn/course/typecourse?id=<?php echo ($vo["id"]); ?>" class="text-center list-group-item list-group-item-info"><h5>我要分享</h5></a>
         
            </div>
      
      </div>
      <div class="modal-footer">

       <a href="/imicrolearn/user/logout"><button type="button" class="btn btn-danger btn-lg btn-block">注销</button></a> 
       
        </a>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade " id="index" tabindex="-1" role="dialog" aria-labelledby="index" aria-hidden="true">

  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="index">回首页？</h4>
      </div>
      <div class="modal-body">
      

            <div class="list-group">
         <a href="/imicrolearn/" class="text-center list-group-item list-group-item-info"><h5>回首页</h5></a>
            <a href="/imicrolearn/user/userinfo" class="text-center list-group-item list-group-item-info"><h5>查看我的收录</h5></a>
            <a href="/imicrolearn/course/addcourse" class="text-center list-group-item list-group-item-info"><h5>我要分享</h5></a>
         
            </div>
      
      </div>
      <div class="modal-footer">

     <button type="button" class="btn btn-danger btn-lg btn-block">关闭</button>
       
        </a>
      </div>
      
    </div>
  </div>
</div>
		<div id ="cleannav"class="clearfix"></div>

		

<div class="container-fluid" style="padding:0;">
<div id="login" >
<div class="container">
<div class="row">
<div id="logintext" class="col-md-6 col-md-offset-3">
<br><br><br><br><br>
<form  action="./isregister" method="post" class="form-block">
 
  <div class="form-group">
  <h4 style="color:white;">用户名</h4>
    <input class="form-control" type="text" required>
    <h4 style="color:white;">密码</h4><input type="password" class="form-control" required>
    <h4 style="color:white;">确认密码</h4><input type="password" class="form-control" required>
    <h4 style="color:white;">邮箱</h4><input type="email" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-info">注册</button>
  <a href="../user/login"><button type="button" class="btn btn-warning">登录</button></a>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

		
		<div class="clearfix"></div>
			<footer>
			<div id="full" class="container-fluid">
			<div id="cb"></div>
			<div id="footer">
				<div class="container">
				<div class="row"  style="color:white;">
					<div class="col-md-4">
					<br><br>
					<img id="logo" src="/imicrolearn/Public/imlogo.png" alt="">
					<div class="text-center">imicrolearn</div>
					<button data-am-smooth-scroll type="button" class="btn btn-success">回到顶部</button>
					</div>

					<div class="col-md-4 hidden-xs">
					<br><br>
					<div class="list-group">
  <a href="" class="list-group-item list-group-item-success">加入我们</a>
  <a href="#" class="list-group-item list-group-item-info">基础引路</a>
  <a href="#" class="list-group-item list-group-item-warning">经验进阶</a>
  <a href="#" class="list-group-item list-group-item-danger">梦想与现实</a>
</div>
					</div>
					<div class="col-md-4 hidden-xs hidden-md">
					<br><br>
<div class="list-group">
  <a href="../user/login" class="list-group-item list-group-item-success">加入我们</a>
  <a href="#" class="list-group-item list-group-item-info">基础引路</a>
  <a href="#" class="list-group-item list-group-item-warning">经验进阶</a>
  <a href="#" class="list-group-item list-group-item-danger">梦想与现实</a>
</div>

					</div>
				</div>
				<div  class="row" style="color:white;">
				<br>
					<p>Copyright © 2015 zero0.cn |   <a style="color:white;" href="http://www.imicrolearn.com" target="_blank">imicrolearn.com</a></p>
				</div>
				</div>
			</div>
			</div>
			<div class="row" >
			<div id="full" class="container-fluid">
			<div id="cb"></div>
			</div>
			</div>
	</footer>
		<script src="/imicrolearn/Public/js/jquery.js"></script>
		<script src="/imicrolearn/Public/js/bootstrap.min.js"></script>
		<script src="/imicrolearn/Public/js/wow.min.js"></script>
		<script src="/imicrolearn/Public/js/jquery.singlePageNav.min.js"></script>
		<script src="/imicrolearn/Public/js/custom.js"></script>
	</body>
</html>