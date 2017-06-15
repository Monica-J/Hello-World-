<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<title>设置</title>
	<meta charset="utf-8">
	<meta name="viewport" content='width=device-width,initial-scale=1'><!--视口-->
	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/style.css">
	<script src="/HelloWorld/helloworld-houtai/Public/front/js/jquery.js"></script>
	<script src="/HelloWorld/helloworld-houtai/Public/front/js/bootstrap.min.js"></script>                      
	
	<link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/font-awesome/4.6.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/HelloWorld/helloworld-houtai/Public/front/css/amazeui.min.css">
  	<link rel="stylesheet" href="/HelloWorld/helloworld-houtai/Public/front/css/amazeui.cropper.css">
  	<link rel="stylesheet" href="/HelloWorld/helloworld-houtai/Public/front/css/custom_up_img.css">
	<script src="/HelloWorld/helloworld-houtai/Public/front/js/jquery.min.js" charset="utf-8"></script>
  	<script src="/HelloWorld/helloworld-houtai/Public/front/js/amazeui.min.js" charset="utf-8"></script>
  	<script src="/HelloWorld/helloworld-houtai/Public/front/js/cropper.min.js" charset="utf-8"></script>
  	<script src="/HelloWorld/helloworld-houtai/Public/front/js/custom_up_img.js" charset="utf-8"></script>
	<style type="text/css">
		a{
			color: #fff;
		}
	</style>	
	
</head>
<body style="background-image: url(/HelloWorld/helloworld-houtai/Public/front/img/bg.png);background-repeat: repeat-y;font-family:'微软雅黑';font-size:16px;">
  	<!--顶部-->	
  	<?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?><div class="header" style="border-radius: 0px;">
		
		<div class="logo" style="margin:0 0 0 30px;">
			<a href="/HelloWorld/helloworld-houtai/index.php/Home/Index/index.html"><img src="/HelloWorld/helloworld-houtai/Public/front/img/logo.png"></a>
		</div>
		
		<div class="search" style="margin:-40px 0 0 370px;">
			<input type="text" style="width:300px;height:30px;border:none;">
			<button type="submit" class="btn btn-sm">搜 索</button>
		</div>

		<div class="user" style="float:right; margin:-30px 30px 0 0;">
			<div class="btn-group">
			  	<a href="/HelloWorld/helloworld-houtai/index.php/Home/Mine/admin.html"><button type="button" class="btn btn-lg">
			  		<span class="glyphicon glyphicon-user"></span> <?php echo ($u["name"]); ?>
			  	</button></a>	  	

			   	<a href="/HelloWorld/helloworld-houtai/index.php/Home/Mine/shezhi.html"><button type="button" class="btn btn-lg">
			   		<span class="glyphicon glyphicon-cog"></span>
			   	</button></a>
			   	<a href="/HelloWorld/helloworld-houtai/index.php/Home/Login/login.html"><button type="button" class="btn btn-lg">
			   		<span class="glyphicon glyphicon-log-in"></span>
			   	</button></a>

			   
			</div>
		</div>

	</div>
  	</div>
  	<!--内容-->
  	<div class="content" style="margin:50px 0 0 310px;">
  		<div class="shezhi_page">
  			<div class="uptx">
  				<div class="up-img-cover"  id="up-img-touch" >
    				<img class="am-circle" alt="点击图片上传" src="/HelloWorld/helloworld-houtai/Public/front/img/index-user.png" data-am-popover="{content: '点击更换', trigger: 'hover focus'}" >
    			</div>
    			<div>
    				<a style="text-align: center; display: block;"  id="pic"></a>
    			</div>
    	
    			<!--图片上传框-->
    			<div class="am-modal am-modal-no-btn up-frame-bj " tabindex="-1" id="doc-modal-1">
			  					<div class="am-modal-dialog up-frame-parent up-frame-radius">
			    					<div class="am-modal-hd up-frame-header">
				       					<label>修改头像</label>
				      					<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
			    					</div>
			    					<div class="am-modal-bd  up-frame-body">
			      						<div class="am-g am-fl">
			      						<div class="am-form-group am-form-file">
				      						<div class="am-fl">
				        						<button type="button" class="am-btn am-btn-default am-btn-sm">
				          							<i class="am-icon-cloud-upload"></i> 选择要上传的文件
				        						</button>
				      						</div>
				      						<input type="file" id="inputImage">
				   						</div>
			      						</div>
			      						<div class="am-g am-fl" >
			      					<div class="up-pre-before up-frame-radius">
			      						<img alt="" src="" id="image" >
			      					</div>
			      					<div class="up-pre-after up-frame-radius"></div>
			      						</div>
			      						<div class="am-g am-fl">
	   								<div class="up-control-btns">
	    								<span class="am-icon-rotate-left"  onclick="rotateimgleft()"></span>
	    								<span class="am-icon-rotate-right" onClick="rotateimgright()"></span>
	    								<span class="am-icon-check" id="up-btn-ok" url="/admin/user/upload.action"></span>
	   								</div>
		    	  						</div>
			    					</div>
			  					</div>
				</div>
    	
    			<!--加载框-->
    			<div class="am-modal am-modal-loading am-modal-no-btn" tabindex="-1" id="my-modal-loading">
		  						<div class="am-modal-dialog">
		    						<div class="am-modal-hd">正在上传...</div>
		    						<div class="am-modal-bd">
		      							<span class="am-icon-spinner am-icon-spin"></span>
		    						</div>
		  						</div>
				</div>
		
				<!--警告框-->
				<div class="am-modal am-modal-alert" tabindex="-1" id="my-alert">
		  						<div class="am-modal-dialog">
		    						<div class="am-modal-hd">信息</div>
		    						<div class="am-modal-bd"  id="alert_content">成功了 </div>
		    						<div class="am-modal-footer">
		      							<span class="am-modal-btn">确定</span>
		    						</div>
		  						</div>
				</div>
			</div>
			<volist name="user" id="u">
			<div class="infor" style="margin: 10px 0 0 55px;">
	            <form method="post" action="/HelloWorld/helloworld-houtai/index.php/Home/mine/xiugai" class="role">
						<div class="form-group">
    						<img src="/HelloWorld/helloworld-houtai/Public/front/img/name.png" style="float:left; margin:14px 0 0 0;">
    						<label for="name" style="margin: 15px 0 0 25px;">密码</label>
    						<!-- <input type="text" name="username" id="username" value="<?php echo ($u["username"]); ?>"> -->
    						<input type="text" class="form-control" name="password" id="password" placeholder="请输入密码" value="<?php echo ($u["password"]); ?>" style="    width: 500px;margin: -30px 0 0 120px;">
  						</div>
  						<!--
  						<div class="form-group">
  							<img src="img/sex.png" style="float:left; margin:14px 0 0 0;">
  							<div class="radio">
	  							<label>
							    	<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>男
							  	</label>
							</div>
							
							<div class="radio">
							  	<label>
							    	<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">女
							  	</label>
							</div>
  						</div>
  						-->
  						<div class="form-group">
  							<img src="/HelloWorld/helloworld-houtai/Public/front/img/bir.png" style="float:left; margin:14px 0 0 0;">
					    	<label for="name"  style="margin:15px 0 0 25px;">生日</label>
					    	<input type="date" name="birthday" id="birthday" value="<?php echo ($u["birthday"]); ?>" class="form-control" style="margin: -30px 0 0 120px;width: 500px;"></textarea>
					  	</div>
  						<div class="form-group">
  							<img src="/HelloWorld/helloworld-houtai/Public/front/img/text.png" style="float:left; margin:14px 0 0 0;">
					    	<label for="name" style="margin:13px 0 0 9px;">个性签名</label>
					    	<input type="textarea" class="form-control" name="gxqm" id="gxqm" value="<?php echo ($u["gxqm"]); ?>" rows="3"  placeholder="介绍你自己吧" style="margin: -30px 0 0 120px;width: 500px;"></input>
					  	</div>
  						
						
							
						
						<input type="submit" data-inline="true" value="提交" class="submit" style="background-color:#ffa500;">

					</div>
				</form>
	        </div><?php endforeach; endif; else: echo "" ;endif; ?>					
  		</div>  			
  	</div>

</body>
</html>