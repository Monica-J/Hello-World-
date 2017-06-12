<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<title>首页</title>
	<meta charset="utf-8">
	<meta name="viewport" content='width=device-width,initial-scale=1'><!--视口-->
	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/style.css">
	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/share.css">
	<link rel="stylesheet" href="/HelloWorld/helloworld-houtai/Public/front/css/comment-style.css">
    <link rel="stylesheet" href="/HelloWorld/helloworld-houtai/Public/front/css/comment.css">
	<script src="/HelloWorld/helloworld-houtai/Public/front/js/jquery.js"></script>
	<script src="/HelloWorld/helloworld-houtai/Public/front/js/bootstrap.min.js"></script>                      
		
</head>
<body>
	<div class="header" style="border-radius:0px;">
		
		<div class="logo">
			<a href="index.html"><img src="/HelloWorld/helloworld-houtai/Public/front/img/logo.png" style="margin:3px 0 0 30px;"></a>
		</div>
		
		<div class="search" style="margin:-40px 0 0 370px;">
			<input type="text" style="width:300px;height:30px;border:none;">
			<button type="submit" class="btn btn-sm">搜 索</button>
		</div>

		<div class="user" style="float:right; margin:-32px 30px 0 0;">
			<div class="btn-group">
			  	<a href="admin.html"><button type="button" class="btn btn-lg">
			  		<span class="glyphicon glyphicon-user"></span> 你的梦里有我吗
			  	</button></a>	  	
			   	<!--<a href="xiaoxi.html"><button type="button" class="btn btn-lg">
			   		<span class="glyphicon glyphicon-envelope"></span>
			   	</button></a>-->
			   	<a href="shezhi.html"><button type="button" class="btn btn-lg">
			   		<span class="glyphicon glyphicon-cog"></span>
			   	</button></a>
			   	<a href="login.html"><button type="button" class="btn btn-lg">
			   		<span class="glyphicon glyphicon-log-in"></span>
			   	</button></a>
			</div>
		</div>

	</div>

	<div class="content">
		
		<nav class="navbar navbar-default" role="navigation" style="margin-top:-49px;">
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.html">首页</a></li>
				<li style="background-color:#fff"><a href="wdsc.html">我的收藏</a></li>
				<li><img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png"></li>
				<li><a href="rmht.html">热门话题</a></li>
				<li><a href="ggtz.html">公告通知</a></li>
				<li><a href="xshd.html">学生活动</a></li>
				<li><a href="jsjl.html">技术交流</a></li>
				<li><a href="files_share.html">资料共享</a></li>
				<li><a href="sdtc.html">树洞吐槽</a></li>
				<li><a href="contacts.html">院友录</a></li>
			</ul>
		</nav>

		<div class="right">

			<div class="admin" style="margin-top:-46px;">
				<a href="admin.html"><img src="/HelloWorld/helloworld-houtai/Public/front/img/index-user.png" style="margin:15px 0 0 46px;width:90;height:87;"></a>
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

			<div class="book" style="margin-top:195px;">
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
				
			<div class="Main" id="opwri">     
			    <div class="Input_Box">     
			        <form>
				        <textarea id="httext" style="width: 687px;height: 135px;margin: 96px 0 0 230px;"></textarea>	     
				        <div class="Input_Foot">
					        <button type="button" class="btn btn-m" id="huati">
								<img src="/HelloWorld/helloworld-houtai/Public/front/img/huati.png">插入话题	
							</button>
					        <input type="submit" class="submit" value="确认"> 
					    </div>
				    </form>
			    </div>   
		    </div>

		    <div class="tiezi">
		    		<div class="page">
		    			<div class="cont">
		    				<a href=""><img src="/HelloWorld/helloworld-houtai/Public/front/img/user-lit.png" style="margin:10px 0 0 10px;"></a>
		    				<p class="username" style="margin:-50px 0 0 80px; font-size:15px;">bug</p>
		    				<p class="time" style="margin:5px 0 0 80px; font-size:14px;">8:00</p>
		    				<button type="button" class="btn btn-sm " style="float:right; margin:-45px 10px 0 0;" onclick="myFunction()">
		    					<span class="glyphicon glyphicon-plus"> 关注</span>
		    				</button>
		    				<div class="co">
		    					<p>如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦</p>
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
		    				<p class="username" style="margin:-50px 0 0 80px; font-size:15px;">爬虫</p>
		    				<p class="time" style="margin:5px 0 0 80px; font-size:14px;">8:00</p>
		    				<button type="button" class="btn btn-sm gz" style="float:right; margin:-45px 10px 0 0;" onclick="myFunction()">
		    					<span class="glyphicon glyphicon-plus"> 关注</span>
		    				</button>
		    				<div class="co">
		    					<p>如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦</p>
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
		    				<p class="username" style="margin:-50px 0 0 80px; font-size:15px;">我是大头</p>
		    				<p class="time" style="margin:5px 0 0 80px; font-size:14px;">8:00</p>
		    				<button type="button" class="btn btn-sm gz" style="float:right; margin:-45px 10px 0 0;" onclick="myFunction()">
		    					<span class="glyphicon glyphicon-plus"> 关注</span>
		    				</button>
		    				<div class="co">
		    					<p>如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦</p>
		    				</div>
		    			</div>
		    			<img src="img/longline.png" style="margin-left:6px;">
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
		    				<p class="username" style="margin:-50px 0 0 80px; font-size:15px;">你好，世界</p>
		    				<p class="time" style="margin:5px 0 0 80px; font-size:14px;">8:00</p>
		    				<button type="button" class="btn btn-sm gz" style="float:right; margin:-45px 10px 0 0;" onclick="myFunction()">
		    					<span class="glyphicon glyphicon-plus"> 关注</span>
		    				</button>
		    				<div class="co">
		    					<p>如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦</p>
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

		/*插入话题*/
				var oButton = document.getElementById("huati"), oTextarea = document.getElementById("httext");
				var TOPIC = "插入话题";
				var funGetSelected = function(element) {
					    if (!window.getSelection) { 
					        //IE浏览器
					        return document.selection.createRange().text;
					    } 
					    else {
					        return element.value.substr(element.selectionStart, element.selectionEnd - element.selectionStart);
					    }
					}, 
					funInsertTopic = function(textObj) {
					    var topic = "#" + TOPIC + "#", value = textObj.value, index = value.indexOf(topic);
					    if (index === -1) {
					        //匹配
					        funTextAsTopic(textObj, topic);
						} 
					    value = textObj.value;
					    index = value.indexOf(topic);
					    if (textObj.createTextRange) {
					        var range = textObj.createTextRange();
					        range.moveEnd("character", -1 * value.length)           
					        range.moveEnd("character", index + 5);
					        range.moveStart("character", index + 1);
					        range.select();    
					    } 
					    else {
					        textObj.setSelectionRange(index + 1, index + 5);
					        textObj.focus();
					    }
					}, 
					funTextAsTopic = function(textObj, textFeildValue) {
					    textObj.focus();
					    if (textObj.createTextRange) {
					        var caretPos = document.selection.createRange().duplicate();
					        document.selection.empty();
					        caretPos.text = textFeildValue;
					    } else if (textObj.setSelectionRange) {
					        var rangeStart = textObj.selectionStart;
					        var rangeEnd = textObj.selectionEnd;
					        var tempStr1 = textObj.value.substring(0, rangeStart);
					        var tempStr2 = textObj.value.substring(rangeEnd);
					        textObj.value = tempStr1 + textFeildValue + tempStr2;
					        textObj.blur();
					    }
					};
				oButton.onclick = function() {
				    var textSelection = funGetSelected(oTextarea);
				    if (!textSelection || textSelection === TOPIC) {
				        //没有文字选中，光标处插入
				        funInsertTopic(oTextarea);    
				    } else {
				        funTextAsTopic(oTextarea, "#" + textSelection + "#");
				    }
				};

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