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
        <h4 class="modal-title text-center" id="fx1">请选择方向</h4>
      </div>
      <div class="modal-body">
      

            <div class="list-group">
            <?php if(is_array($alltype)): $i = 0; $__LIST__ = $alltype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/imicrolearn/course/typecourse?id=<?php echo ($vo["id"]); ?>" class="text-center list-group-item list-group-item-info"><h5><?php echo ($vo["typename"]); ?></h5></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
      
      </div>
      <div class="modal-footer">

        <a href=""><button type="button" class="btn btn-primary btn-lg btn-block">看全部经验</button></a>
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
        <h4 class="modal-title text-center" id="user1">我要去？</h4>
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
        <h4 class="modal-title text-center" id="index">回主页？</h4>
      </div>
      <div class="modal-body">
      

            <div class="list-group">
         
            <a href="/imicrolearn/user/userinfo" class="text-center list-group-item list-group-item-info"><h5>查看我的收录</h5></a>
            <a href="/imicrolearn/course/typecourse?id=<?php echo ($vo["id"]); ?>" class="text-center list-group-item list-group-item-info"><h5>回首页</h5></a>
            <a href="/imicrolearn/course/typecourse?id=<?php echo ($vo["id"]); ?>" class="text-center list-group-item list-group-item-info"><h5>我要分享</h5></a>
         
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

		
			<div class="container-fluid">

				<div id="coursetitle" class="row">
				<div class="container">
				<br>	
				<?php if(is_array($onecourse)): $i = 0; $__LIST__ = array_slice($onecourse,0,1,true);if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-md-9 wow fadeIn" data-wow-delay="0.2s">
				
					<h2 class="text-uppercase"><?php echo ($v["cname"]); ?></h2>
					<p><?php echo ($v["ctitle"]); ?></p>
					
					</div>
					<div class="col-md-3 wow fadeIn center-block" data-wow-delay="0.2s">
							
					<a href="../course/typecourse?id=<?php echo ($v["typeid"]); ?>"><button type="button" class="btn btn-success btn-lg btn-block"><?php echo ($v["typename"]); ?></button></a>
					<br>
					
					<button type="button" class="btn btn-warning btn-lg btn-block">收录</button>
					</div><?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
				</div>
				<br>
				</div>
				<div class="container">
					<div class="row">
					<div class="col-md-9 wow fadeIn" data-wow-delay="0.2s">
				<?php if(is_array($onecourse)): $i = 0; $__LIST__ = $onecourse;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="stepid" class="text-center"><h1 ><?php echo ($vo["stepid"]); ?></h1></div>
						
					<div id="scontent" class="panel panel-info">	
				
					<img src="/imicrolearn/Public/images/courseimg/stepimg/<?php echo ($vo["stepimg"]); ?>.jpg"  class="img-responsive" alt="Responsive image">
			
						<p><?php echo ($vo["scontent"]); ?></p>	
						</div><?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
				</div>
					<div  class="col-md-3 hidden-xs	 wow fadeIn center-block " data-wow-delay="0.2s">
					<br><br>
						<ul class="list-group ">
						<?php if(is_array($coursename)): $i = 0; $__LIST__ = array_slice($coursename,0,5,true);if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$cn): $mod = ($i % 2 );++$i;?><a href="../course/showonecourse?id=<?php echo ($cn["cid"]); ?>" class="list-group-item list-group-item-info">
 					<!-- <span class="badge">点击量</span> -->
 					 <h5 class="list-group-item-heading"><?php echo ($cn["cname"]); ?>
					</h5>
    				<p class="list-group-item-text"><?php echo ($cn["ctitle"]); ?></p>
 					
 					</a><?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
						</ul>


					</div>

				</div>
				</div>

			</div>
<hr><br>

		
		<div class="clearfix"></div>
			<footer>
			<div id="full" class="container-fluid">
			<div id="cb"></div>
			<div id="footer">
				<div class="container">
				<div class="row"  style="color:white;">
					<div class="col-md-4">
					<br><br><br><br>
					<img id="logo" src="/imicrolearn/Public/imlogo.png" alt="">
					<div class="text-center">imicrolearn</div>
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