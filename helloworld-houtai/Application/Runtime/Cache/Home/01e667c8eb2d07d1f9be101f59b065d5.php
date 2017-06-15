<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<title>热门话题</title>
	<meta charset="utf-8">
	<meta name="viewport" content='width=device-width,initial-scale=1'><!--视口-->
	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/style.css">
	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/share.css">
	<link rel="stylesheet" href="/HelloWorld/helloworld-houtai/Public/front/css/comment-style.css">
    <link rel="stylesheet" href="/HelloWorld/helloworld-houtai/Public/front/css/comment.css">
	<script src="/HelloWorld/helloworld-houtai/Public/front/js/jquery.js"></script>
	<script src="/HelloWorld/helloworld-houtai/Public/front/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/HelloWorld/helloworld-houtai/Public/front/js/jqPaginator.js"></script>
		
</head>
<body>
	<div class="header" style="border-radius:0px;">
		
		<div class="logo">
			<a href="/HelloWorld/helloworld-houtai/index.php/Home/Index/index.html"><img src="/HelloWorld/helloworld-houtai/Public/front/img/logo.png" style="margin:3px 0 0 30px;"></a>
		</div>
		
		<div class="search" style="margin:-40px 0 0 370px;">
			<input type="text" style="width:300px;height:30px;border:none;">
			<button type="submit" class="btn btn-sm">搜 索</button>
		</div>

		<div class="user" style="float:right; margin:-32px 30px 0 0;">
			<div class="btn-group">
			  	<a href="/HelloWorld/helloworld-houtai/index.php/Home/Mine/admin.html"><button type="button" class="btn btn-lg">
			  		<span class="glyphicon glyphicon-user"></span> 你的梦里有我吗
			  	</button></a>	  	
			   	<!--<a href="xiaoxi.html"><button type="button" class="btn btn-lg">
			   		<span class="glyphicon glyphicon-envelope"></span>
			   	</button></a>-->
			   	<a href="/HelloWorld/helloworld-houtai/index.php/Home/Mine/shezhi.html"><button type="button" class="btn btn-lg">
			   		<span class="glyphicon glyphicon-cog"></span>
			   	</button></a>
			   	<a href="/HelloWorld/helloworld-houtai/index.php/Home/Login/login.html"><button type="button" class="btn btn-lg">
			   		<span class="glyphicon glyphicon-log-in"></span>
			   	</button></a>
			
			</div>
		</div>

	</div>

	<div class="content">
		
		<nav class="navbar navbar-default" role="navigation" style="margin-top:-49px;">
			<ul class="nav navbar-nav">
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Index/index.html">首页</a></li>
				<li class="active"><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/rmht.html">热门话题</a></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/ggtz.html">公告通知</a></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/xshd.html">学生活动</a></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/jsjl.html">技术交流</a></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/files_share.html">资料共享</a></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/sdtc.html">树洞吐槽</a></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/contacts.html">院友录</a></li>
			</ul>
		</nav>

		<div class="right">

			<div class="admin" style="margin-top:-46px;">
				<a href="/HelloWorld/helloworld-houtai/index.php/Home/Mine/admin.html"><img src="/HelloWorld/helloworld-houtai/Public/front/img/index-user.png" style="margin:15px 0 0 46px;width:90;height:87;"></a>
				<p class="name">你的梦里有我吗</p>
				<p class="title"><img src="/HelloWorld/helloworld-houtai/Public/front/img/title.png">工程师</p>
				
				<nav class="navbar adnav" role="navigation">
					<ul class="nav navbar-nav">
						<li><a href="#"><p>&nbsp;28</p><p style="margin-top:-8px;">关注</p></a></li>
						<li><img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png"></li>
						<li><a href="#"><p>&nbsp;28</p><p style="margin-top:-8px;">粉丝</p></a></li>
						<li><img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png"></li>
						<li><a href="#"><p>&nbsp;28</p><p style="margin-top:-8px;">帖子&nbsp;&nbsp;</p></a></li>				
					</ul>
				</nav>
			</div>

			<div class="rmht" style="margin-top:195px;">
				<p>热门话题</p>
				<div class="ht">
					<ul>
						<a href="/HelloWorld/helloworld-houtai/index.php/Home/Mine/rmht-1.html"><li>1.  软件男篮荣获冠军</li></a>
						<a href=""><li>2.  软件男篮</li></a>
						<a href=""><li>3.  留学生项目</li></a>
						<a href=""><li>4.  期末考试</li></a>
						<a href=""><li>5.  红鼻子晚会</li></a>
						<a href=""><li>6.  教室装空调</li></a>
						<a href=""><li>7.  研究生</li></a>
						<a href=""><li>8.  毕业论文</li></a>
						<a href=""><li>9.  项目实训</li></a>
						<a href=""><li>10. 实习</li></a>
					</ul>
				</div>
			</div>

			<div class="book" style="margin-top:20px;">
				<p class="bktitle">推荐书单</p>
				<div id="myCarousel" class="carousel slide">
					<!-- 轮播（Carousel）指标 -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>   
					<!-- 轮播（Carousel）项目 -->
					<div class="carousel-inner" style="border-top:1px solid #dcdcdc;">
						<div class="item active">
							<img src="/HelloWorld/helloworld-houtai/Public/front/img/HTML5.jpg" alt="First slide">
						</div>
						<div class="item">
							<img src="/HelloWorld/helloworld-houtai/Public/front/img/HTML5.jpg" alt="Second slide">
						</div>
						<div class="item">
							<img src="/HelloWorld/helloworld-houtai/Public/front/img/HTML5.jpg" alt="Third slide">
						</div>
						<br/>
					</div>
				</div>  
			</div>
			
		</div>

		<div class="left">

		    <div class="httz">
		    		<div class="page">
		    			<div class="cont">
		    				<a href=""><img src="/HelloWorld/helloworld-houtai/Public/front/img/user-lit.png" style="margin:10px 0 0 10px;"></a>
		    				<p class="username" style="margin:-50px 0 0 80px; font-size:15px;">代码使我快乐</p>
		    				<p class="time" style="margin:5px 0 0 80px;font-size:14px;color:#fff;;background:#ffa500; width:65px;border-radius: 5px;">&nbsp;热门话题&nbsp;</p>
		    				<p class="time" style="margin:-20px 0 0 150px; font-size:14px;">8:00</p>
		    				<button type="button" class="btn btn-sm gz" style="float:right; margin:-45px 10px 0 0;" onclick="myFunction()">
		    					<span class="glyphicon glyphicon-plus"> 关注</span>
		    				</button>
		    				<div class="co">
		    					<p>[#热门话题]如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦</p>
		    				</div>
		    			</div>
		    			<img src="/HelloWorld/helloworld-houtai/Public/front/img/longline.png" style="margin-left:6px;">
		    			<div class="bt">
		    				<button type="button" class="btn btn-md" style="margin-left:10px;">
						   		<span class="glyphicon glyphicon-heart">收藏</span>
						   	</button>
						   	<a href="javascript:void(0)" class="share"><button type="button" class="btn btn-m " style="margin-left:140px;">
						   		<span class="glyphicon glyphicon-share">分享</span>
						   	</button></a>
						   	<button type="button" class="btn btn-md btn-pl" style="margin-left:140px;">
						   		<span class="glyphicon glyphicon-pencil">评论</span>
						   	</button>
						   	<button type="button" class="btn btn-md" style="float:right;margin-right:10px;" onclick="myZan()">
						   		<span class="glyphicon glyphicon-thumbs-up">点赞</span>
						   	</button>
		    			</div>

		    			<div class="hh" style="display:none;">     
							<div class="commentAll" style="margin-left:23px;">
		    					<!--评论区域 begin-->
							    <div class="reviewArea clearfix">
							        <textarea class="content comment-input" placeholder="请写下你的评论;" onkeyup="keyUP(this)"></textarea>
							        <a href="javascript:;" class="plBtn">评论</a>
							    </div>
							    <!--评论区域 end-->
							    <!--回复区域 begin-->
							    <div class="comment-show">
							        <div class="comment-show-con clearfix">
							            <div class="comment-show-con-img pull-left"><img src="/HelloWorld/helloworld-houtai/Public/front/img/header-img-comment_03.png" alt=""></div>
							            <div class="comment-show-con-list pull-left clearfix">
							                <div class="pl-text clearfix">
							                    <a href="#" class="comment-size-name">张三 : </a>
							                    <span class="my-pl-con">&nbsp;来啊 造作啊!</span>
							                </div>
							                <div class="date-dz">
							                    <span class="date-dz-left pull-left comment-time">2017-6-2 11:11:39</span>
							                    <div class="date-dz-right pull-right comment-pl-block">
							                        <a href="javascript:;" class="removeBlock">删除</a>
							                        <a href="javascript:;" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a>
							                        <span class="pull-left date-dz-line">|</span>
							                        <a href="javascript:;" class="date-dz-z pull-left"><i class="date-dz-z-click-red"></i>赞 (<i class="z-num">666</i>)</a>
							                    </div>
							                </div>
							                <div class="hf-list-con"></div>
							            </div>
							        </div>
		    					</div>
		    					<!--回复区域 end-->
							</div>
						</div>
		    			
		    		</div>

		    		<div class="page">
		    			<div class="cont">
		    				<a href=""><img src="/HelloWorld/helloworld-houtai/Public/front/img/user-lit.png" style="margin:10px 0 0 10px;"></a>
		    				<p class="username" style="margin:-50px 0 0 80px; font-size:15px;">代码使我快乐</p>
		    				<p class="time" style="margin:5px 0 0 80px; font-size:14px;">8:00</p>
		    				<button type="button" class="btn btn-sm gz" style="float:right; margin:-45px 10px 0 0;" onclick="myFunction()">
		    					<span class="glyphicon glyphicon-plus"> 关注</span>
		    				</button>
		    				<div class="co">
		    					<p>[#热门话题]如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦</p>
		    				</div>
		    			</div>
		    			<img src="/HelloWorld/helloworld-houtai/Public/front/img/longline.png" style="margin-left:6px;">
		    			<div class="bt">
		    				<button type="button" class="btn btn-md" style="margin-left:10px;">
						   		<span class="glyphicon glyphicon-heart">收藏</span>
						   	</button>
						   	<a href="javascript:void(0)" class="share"><button type="button" class="btn btn-m " style="margin-left:140px;">
						   		<span class="glyphicon glyphicon-share">分享</span>
						   	</button></a>
						   	<button type="button" class="btn btn-md" style="margin-left:140px;">
						   		<span class="glyphicon glyphicon-pencil">评论</span>
						   	</button>
						   	<button type="button" class="btn btn-md" style="float:right;margin-right:10px;" onclick="myZan()">
						   		<span class="glyphicon glyphicon-thumbs-up">点赞</span>
						   	</button>
		    			</div>
		    			
		    		</div>

		    		<div class="page">
		    			<div class="cont">
		    				<a href=""><img src="/HelloWorld/helloworld-houtai/Public/front/img/user-lit.png" style="margin:10px 0 0 10px;"></a>
		    				<p class="username" style="margin:-50px 0 0 80px; font-size:15px;">代码使我快乐</p>
		    				<p class="time" style="margin:5px 0 0 80px; font-size:14px;">8:00</p>
		    				<button type="button" class="btn btn-sm gz" style="float:right; margin:-45px 10px 0 0;" onclick="myFunction()">
		    					<span class="glyphicon glyphicon-plus"> 关注</span>
		    				</button>
		    				<div class="co">
		    					<p>[#热门话题]如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦</p>
		    				</div>
		    			</div>
		    			<img src="/HelloWorld/helloworld-houtai/Public/front/img/longline.png" style="margin-left:6px;">
		    			<div class="bt">
		    				<button type="button" class="btn btn-md" style="margin-left:10px;">
						   		<span class="glyphicon glyphicon-heart">收藏</span>
						   	</button>
						   	<a href="javascript:void(0)" class="share"><button type="button" class="btn btn-m " style="margin-left:140px;">
						   		<span class="glyphicon glyphicon-share">分享</span>
						   	</button></a>
						   	<button type="button" class="btn btn-md" style="margin-left:140px;">
						   		<span class="glyphicon glyphicon-pencil">评论</span>
						   	</button>
						   	<button type="button" class="btn btn-md" style="float:right;margin-right:10px;" onclick="myZan()">
						   		<span class="glyphicon glyphicon-thumbs-up">点赞</span>
						   	</button>
		    			</div>
		    			
		    		</div>

		    		<div class="page">
		    			<div class="cont">
		    				<a href=""><img src="/HelloWorld/helloworld-houtai/Public/front/img/user-lit.png" style="margin:10px 0 0 10px;"></a>
		    				<p class="username" style="margin:-50px 0 0 80px; font-size:15px;">代码使我快乐</p>
		    				<p class="time" style="margin:5px 0 0 80px; font-size:14px;">8:00</p>
		    				<button type="button" class="btn btn-sm gz" style="float:right; margin:-45px 10px 0 0;" onclick="myFunction()">
		    					<span class="glyphicon glyphicon-plus"> 关注</span>
		    				</button>
		    				<div class="co">
		    					<p>[#热门话题]如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦</p>
		    				</div>
		    			</div>
		    			<img src="/HelloWorld/helloworld-houtai/Public/front/img/longline.png" style="margin-left:6px;">
		    			<div class="bt">
		    				<button type="button" class="btn btn-md" style="margin-left:10px;">
						   		<span class="glyphicon glyphicon-heart">收藏</span>
						   	</button>
						   <a href="javascript:void(0)" class="share"><button type="button" class="btn btn-m " style="margin-left:140px;">
						   		<span class="glyphicon glyphicon-share">分享</span>
						   	</button></a>
						   	<button type="button" class="btn btn-md" style="margin-left:140px;">
						   		<span class="glyphicon glyphicon-pencil">评论</span>
						   	</button>
						   	<button type="button" class="btn btn-md" style="float:right;margin-right:10px;" onclick="myZan()">
						   		<span class="glyphicon glyphicon-thumbs-up">点赞</span>
						   	</button>
		    			</div>
		    			
		    		</div>
		    </div>

		    <div style="margin-left:52px;">
		    	<!--<p id="p1"></p>--><!--返回的页码值-->
			    <ul class="pagination pagination1"></ul>
		    </div>
		    	
		</div>

	</div>

	<br/>	
	<div class="footer">
		<br/>
		<br/>
		<p>地址：石家庄市裕华区南二环东路20号</p>
	</div>

	<script>

		/*关注按钮*/
		function myFunction(){
			var x;
			var r=confirm("已关注！");
			if (r==true){
				//添加到后台
			}
		}

		function myZan(){
			var y;
			var s=confirm("已赞！");
			if (s==true){
				//添加到后台
			}
		}

		/*分页*/
	    jQuery.jqPaginator('.pagination1', {
	        totalPages: 100,
	        visiblePages: 10,
	        currentPage: 3,
	        onPageChange: function (num, type) {
	            jQuery('#p1').text(type + '：' + num);
	        }
	    });

		/*显示评论（如何只显示当前div的评论）*/
		jQuery(".btn-pl").click(function(){
			jQuery(".hh").toggle(); 
		});
	</script>
	<script type="text/javascript" src="/HelloWorld/helloworld-houtai/Public/front/js/share.js"></script>
	<script  type="text/javascript">
		jQuery('.share').shareConfig({
			Shade : true, //是否显示遮罩层
			Event:'click', //触发事件
			Content : 'Share', //内容DIV ID
			Title : '我爱分享' //显示标题
		});
	</script>

	<script type="text/javascript" src="/HelloWorld/helloworld-houtai/Public/front/js/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="/HelloWorld/helloworld-houtai/Public/front/js/jquery.flexText.js"></script>
	<!--textarea高度自适应-->
	<script type="text/javascript">
	    $(function () {
	        $('.content').flexText();
	    });
	</script>
	<!--textarea限制字数-->
	<script type="text/javascript">
	    function keyUP(t){
	        var len = $(t).val().length;
	        if(len > 1000){
	            $(t).val($(t).val().substring(0,1001));
	        }
	    }
	</script>
	<!--点击评论创建评论条-->
	<script type="text/javascript">
	    $('.commentAll').on('click','.plBtn',function(){
	        var myDate = new Date();
	        //获取当前年
	        var year=myDate.getFullYear();
	        //获取当前月
	        var month=myDate.getMonth()+1;
	        //获取当前日
	        var date=myDate.getDate();
	        var h=myDate.getHours();       //获取当前小时数(0-23)
	        var m=myDate.getMinutes();     //获取当前分钟数(0-59)
	        if(m<10) m = '0' + m;
	        var s=myDate.getSeconds();
	        if(s<10) s = '0' + s;
	        var now=year+'-'+month+"-"+date+" "+h+':'+m+":"+s;
	        //获取输入内容
	        var oSize = $(this).siblings('.flex-text-wrap').find('.comment-input').val();
	        console.log(oSize);
	        //动态创建评论模块
	        oHtml = '<div class="comment-show-con clearfix"><div class="comment-show-con-img pull-left"><img src="/HelloWorld/helloworld-houtai/Public/front/img/header-img-comment_03.png" alt=""></div> <div class="comment-show-con-list pull-left clearfix"><div class="pl-text clearfix"> <a href="../admin.html" class="comment-size-name">你的梦里有我吗 : </a> <span class="my-pl-con">&nbsp;'+ oSize +'</span> </div> <div class="date-dz"> <span class="date-dz-left pull-left comment-time">'+now+'</span> <div class="date-dz-right pull-right comment-pl-block"><a href="javascript:;" class="removeBlock">删除</a> <a href="javascript:;" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a> <span class="pull-left date-dz-line">|</span> <a href="javascript:;" class="date-dz-z pull-left"><i class="date-dz-z-click-red"></i>赞 (<i class="z-num">666</i>)</a> </div> </div><div class="hf-list-con"></div></div> </div>';
	        if(oSize.replace(/(^\s*)|(\s*$)/g, "") != ''){
	            $(this).parents('.reviewArea ').siblings('.comment-show').prepend(oHtml);
	            $(this).siblings('.flex-text-wrap').find('.comment-input').prop('value','').siblings('pre').find('span').text('');
	        }
	    });
	</script>
	<!--点击回复动态创建回复块-->
	<script type="text/javascript">
	    $('.comment-show').on('click','.pl-hf',function(){
	        //获取回复人的名字
	        var fhName = $(this).parents('.date-dz-right').parents('.date-dz').siblings('.pl-text').find('.comment-size-name').html();
	        //回复@
	        var fhN = '回复@'+fhName;
	        //var oInput = $(this).parents('.date-dz-right').parents('.date-dz').siblings('.hf-con');
	        var fhHtml = '<div class="hf-con pull-left"> <textarea class="content comment-input hf-input" placeholder="" onkeyup="keyUP(this)"></textarea> <a href="javascript:;" class="hf-pl">评论</a></div>';
	        //显示回复
	        if($(this).is('.hf-con-block')){
	            $(this).parents('.date-dz-right').parents('.date-dz').append(fhHtml);
	            $(this).removeClass('hf-con-block');
	            $('.content').flexText();
	            $(this).parents('.date-dz-right').siblings('.hf-con').find('.pre').css('padding','6px 15px');
	            //console.log($(this).parents('.date-dz-right').siblings('.hf-con').find('.pre'))
	            //input框自动聚焦
	            $(this).parents('.date-dz-right').siblings('.hf-con').find('.hf-input').val('').focus().val(fhN);
	        }else {
	            $(this).addClass('hf-con-block');
	            $(this).parents('.date-dz-right').siblings('.hf-con').remove();
	        }
	    });
	</script>
	<!--评论回复块创建-->
	<script type="text/javascript">
	    $('.comment-show').on('click','.hf-pl',function(){
	        var oThis = $(this);
	        var myDate = new Date();
	        //获取当前年
	        var year=myDate.getFullYear();
	        //获取当前月
	        var month=myDate.getMonth()+1;
	        //获取当前日
	        var date=myDate.getDate();
	        var h=myDate.getHours();       //获取当前小时数(0-23)
	        var m=myDate.getMinutes();     //获取当前分钟数(0-59)
	        if(m<10) m = '0' + m;
	        var s=myDate.getSeconds();
	        if(s<10) s = '0' + s;
	        var now=year+'-'+month+"-"+date+" "+h+':'+m+":"+s;
	        //获取输入内容
	        var oHfVal = $(this).siblings('.flex-text-wrap').find('.hf-input').val();
	        console.log(oHfVal)
	        var oHfName = $(this).parents('.hf-con').parents('.date-dz').siblings('.pl-text').find('.comment-size-name').html();
	        var oAllVal = '回复@'+oHfName;
	        if(oHfVal.replace(/^ +| +$/g,'') == '' || oHfVal == oAllVal){

	        }else {
	            $.getJSON("json/pl.json",function(data){
	                var oAt = '';
	                var oHf = '';
	                $.each(data,function(n,v){
	                    delete v.hfContent;
	                    delete v.atName;
	                    var arr;
	                    var ohfNameArr;
	                    if(oHfVal.indexOf("@") == -1){
	                        data['atName'] = '';
	                        data['hfContent'] = oHfVal;
	                    }else {
	                        arr = oHfVal.split(':');
	                        ohfNameArr = arr[0].split('@');
	                        data['hfContent'] = arr[1];
	                        data['atName'] = ohfNameArr[1];
	                    }

	                    if(data.atName == ''){
	                        oAt = data.hfContent;
	                    }else {
	                        oAt = '回复<a href="#" class="atName">@'+data.atName+'</a> : '+data.hfContent;
	                    }
	                    oHf = data.hfName;
	                });

	                var oHtml = '<div class="all-pl-con"><div class="pl-text hfpl-text clearfix"><a href="#" class="comment-size-name">我的名字 : </a><span class="my-pl-con">'+oAt+'</span></div><div class="date-dz"> <span class="date-dz-left pull-left comment-time">'+now+'</span> <div class="date-dz-right pull-right comment-pl-block"> <a href="javascript:;" class="removeBlock">删除</a> <a href="javascript:;" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a> <span class="pull-left date-dz-line">|</span> <a href="javascript:;" class="date-dz-z pull-left"><i class="date-dz-z-click-red"></i>赞 (<i class="z-num">666</i>)</a> </div> </div></div>';
	                oThis.parents('.hf-con').parents('.comment-show-con-list').find('.hf-list-con').css('display','block').prepend(oHtml) && oThis.parents('.hf-con').siblings('.date-dz-right').find('.pl-hf').addClass('hf-con-block') && oThis.parents('.hf-con').remove();
	            });
	        }
	    });
	</script>
	<!--删除评论块-->
	<script type="text/javascript">
	    $('.commentAll').on('click','.removeBlock',function(){
	        var oT = $(this).parents('.date-dz-right').parents('.date-dz').parents('.all-pl-con');
	        if(oT.siblings('.all-pl-con').length >= 1){
	            oT.remove();
	        }else {
	            $(this).parents('.date-dz-right').parents('.date-dz').parents('.all-pl-con').parents('.hf-list-con').css('display','none')
	            oT.remove();
	        }
	        $(this).parents('.date-dz-right').parents('.date-dz').parents('.comment-show-con-list').parents('.comment-show-con').remove();

	    })
	</script>
	<!--点赞-->
	<script type="text/javascript">
	    $('.comment-show').on('click','.date-dz-z',function(){
	        var zNum = $(this).find('.z-num').html();
	        if($(this).is('.date-dz-z-click')){
	            zNum--;
	            $(this).removeClass('date-dz-z-click red');
	            $(this).find('.z-num').html(zNum);
	            $(this).find('.date-dz-z-click-red').removeClass('red');
	        }else {
	            zNum++;
	            $(this).addClass('date-dz-z-click');
	            $(this).find('.z-num').html(zNum);
	            $(this).find('.date-dz-z-click-red').addClass('red');
	        }
	    })
	</script>
	
</body>
</html>