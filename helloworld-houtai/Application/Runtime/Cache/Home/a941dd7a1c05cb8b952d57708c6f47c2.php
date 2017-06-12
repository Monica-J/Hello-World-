<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
  	<title>资料共享</title>

  	<meta charset="utf-8">
  	<meta name="viewport" content='width=device-width,initial-scale=1'><!--视口-->
  	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/bootstrap.min.css" media="screen">
  	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/style.css">
  	
  	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/iconfont.css">
    <link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/fileUpload.css">

      
    <script src="/HelloWorld/helloworld-houtai/Public/front/js/jquery.js"></script>
  	<script src="/HelloWorld/helloworld-houtai/Public/front/js/bootstrap.min.js"></script>
  	<script src="/HelloWorld/helloworld-houtai/Public/front/js/layer.js"></script>

</head>
<body>
	<div class="header">
		
		<div class="logo" style="margin:0 0 0 30px;">
			<a href="index.html"><img src="/HelloWorld/helloworld-houtai/Public/front/img/logo.png"></a>
		</div>
		
		<div class="search" style="margin:-40px 0 0 370px;">
      <input type="text" style="width:300px;height:30px;border:none;">
      <button type="submit" class="btn btn-sm">搜 索</button>
    </div>

		<div class="user" style="float:right; margin:-30px 30px 0 0;">
			<div class="btn-group">
			  	<a href="admin.html"><button type="button" class="btn btn-lg">
			  		<span class="glyphicon glyphicon-user"></span> 你的梦里有我吗
			  	</button></a>	  	
			   	
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

		<nav class="navbar navbar-default" role="navigation">
			<ul class="nav navbar-nav">
				<li><a href="index.html">首页</a></li>
				<li><a href="wdsc.html">我的收藏</a></li>
				<li><img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png"></li>
				<li><a href="rmht.html">热门话题</a></li>
				<li><a href="ggtz.html">公告通知</a></li>
				<li><a href="xshd.html">学生活动</a></li>
				<li><a href="jsjl.html">技术交流</a></li>
				<li class="active"><a href="files_share.html">资料共享</a></li>
				<li><a href="sdtc.html">树洞吐槽</a></li>
				<li><a href="contacts.html">院友录</a></li>
			</ul>
		</nav>

		<div class="right">

			<div class="admin">
				<a href="admin.html"><img src="/HelloWorld/helloworld-houtai/Public/front/img/index-user.png" style="margin:15px 0 0 42px;width:90;height:87;"></a>
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

			<div class="book bor">
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
            <div id="fileUploadContent" class="fileUploadContent"></div>
	    
	    	<div id="list">
	    		<ul id="tabs">
      				<li><a href="#" name="#tab1">所有文件</a></li>
      				<li><a href="#" name="#tab2">我上传的文件</a></li>
    			</ul>
    			<div id="tabsContent">
    				<!--所有文件列表 -->
      				<div id="tab1">
          				<table class="allfileList">
            				<tr>
              					<th style="width:330px;">名称</th>
              					<th style="width:130px;">上传时间</th>
              					<th style="width:180px;">类型</th>
              					<th style="width:50px;">大小</th>
            				</tr>
            				<tr>
              					<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/pdf.png" style="width:20px;height:20px;" />&nbsp;二战学长的挥泪经验</td>
              					<td>2017-05-24</td>
              					<td>Adobe Acrobat Document</td>
              					<td>655KB</td>
            				</tr>
            				<tr>
              					<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/rar.png" style="width:20px;height:20px;" />&nbsp;常用英语8000词</td>
              					<td>2017-05-24</td>
              					<td>WinRAR ZIP压缩文件</td>
              					<td>6,143KB</td>
            				</tr>
            				<tr>
              					<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/excel.png" style="width:20px;height:20px;" />&nbsp;我院2016届考研情况</td>
              					<td>2017-05-25</td>
             					<td>Microsoft Excel</td>
              					<td>465KB</td>
            				</tr>
            				<tr>
              					<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/word.png" style="width:20px;height:20px;" />&nbsp;电子科技大学硕士考试大纲</td>
              					<td>2017-05-25</td>
              					<td>Microsoft Word</td>
              					<td>856KB</td>
            				</tr>
            				<tr>
              					<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/word.png" style="width:20px;height:20px;" />&nbsp;电子科技大学硕士考试大纲</td>
              					<td>2017-05-25</td>
              					<td>Microsoft Word</td>
              					<td>856KB</td>
            				</tr>
            				<tr>
              					<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/word.png" style="width:20px;height:20px;" />&nbsp;电子科技大学硕士考试大纲</td>
              					<td>2017-05-25</td>
              					<td>Microsoft Word</td>
              					<td>856KB</td>
            				</tr>
            				<tr>
              					<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/word.png" style="width:20px;height:20px;" />&nbsp;电子科技大学硕士考试大纲</td>
              					<td>2017-05-25</td>
              					<td>Microsoft Word</td>
              					<td>856KB</td>
            				</tr>
            				<tr>
              					<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/word.png" style="width:20px;height:20px;" />&nbsp;电子科技大学硕士考试大纲</td>
              					<td>2017-05-25</td>
              					<td>Microsoft Word</td>
              					<td>856KB</td>
            				</tr>
            				<tr>
              					<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/word.png" style="width:20px;height:20px;" />&nbsp;电子科技大学硕士考试大纲</td>
              					<td>2017-05-25</td>
              					<td>Microsoft Word</td>
              					<td>856KB</td>
            				</tr>
            					<tr>
              					<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/word.png" style="width:20px;height:20px;" />&nbsp;电子科技大学硕士考试大纲</td>
              					<td>2017-05-25</td>
              					<td>Microsoft Word</td>
              					<td>856KB</td>
            				</tr>
          			</table>
      			</div>
      			<div id="tab2">
          			<table class="myfileList">
            			<tr>
              				<th style="width:250px;">名称</th>
              				<th style="width:120px;">上传时间</th>
              				<th style="width:200px;">类型</th>
              				<th style="width:80px;">大小</th>
            			</tr>
            			<tr>
              				<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/pdf.png" style="width:20px;height:20px;" />&nbsp;二战学长的挥泪经验</td>
              				<td>2017-05-24</td>
              				<td>Adobe Acrobat Document</td>
              				<td>655KB</td>
            			</tr>
            			<tr>
             				<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/rar.png" style="width:20px;height:20px;" />&nbsp;常用英语8000词</td>
              				<td>2017-05-24</td>
              				<td>WinRAR ZIP压缩文件</td>
              				<td>6,143KB</td>
            			</tr>
            			<tr>
              				<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/excel.png" style="width:20px;height:20px;" />&nbsp;我院2016届考研情况</td>
              				<td>2017-05-25</td>
              				<td>Microsoft Excel</td>
              				<td>465KB</td>
            			</tr>
            			<tr>
              				<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/word.png" style="width:20px;height:20px;" />&nbsp;电子科技大学硕士考试大纲</td>
              				<td>2017-05-25</td>
              				<td>Microsoft Word</td>
              				<td>856KB</td>
            			</tr>
          			</table> 
      			</div>
      
    		</div>
    		<p id="about">&nbsp;</p>

		</div>
		
	</div>

	<br/>
	<br/>
	<br/>		
	<div class="footer">
		<br/>
		<br/>
		<p>地址：石家庄市裕华区南二环东路20号</p>
	</div>
		
		
	
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/HelloWorld/helloworld-houtai/Public/front/js/fileUpload.js"></script>
<script type="text/javascript">
    $("#fileUploadContent").initUpload({
        "uploadUrl":"#",//上传文件信息地址
        "progressUrl":"#",//获取进度信息地址，可选，注意需要返回的data格式如下（{bytesRead: 102516060, contentLength: 102516060, items: 1, percent: 100, startTime: 1489223136317, useTime: 2767}）
        "showSummerProgress":false,//总进度条，默认限制
        //"size":350,//文件大小限制，单位kb,默认不限制
        //"maxFileNumber":1,//文件个数限制，为整数
        //"filelSavePath":"",//文件上传地址，后台设置的根目录
        //"beforeUpload":beforeUploadFun,//在上传前执行的函数
        //"onUpload":onUploadFun，//在上传后执行的函数
        autoCommit:false,//文件是否自动上传
        //"fileType":['png','jpg','docx','doc']，//文件类型限制，默认不限制，注意写的是文件后缀
    })
    function beforeUploadFun(opt){
        opt.otherData =[{"name":"你要上传的参数","value":"你要上传的值"}];
    }
    function onUploadFun(opt,data){
        alert(data);
        uploadTools.uploadError(opt);//显示上传错误
    }


</script>


<script src="/HelloWorld/helloworld-houtai/Public/front/js/jquery-1.7.2.min.js"></script>
<script>
    function resetTabs(){
        $("#tabsContent > div").hide(); //Hide all tabsContent
        $("#tabs a").attr("id",""); //Reset id's      
    }

    var myUrl = window.location.href; //get URL
    var myUrlTab = myUrl.substring(myUrl.indexOf("#")); // For localhost/tabs.html#tab2, myUrlTab = #tab2      
    var myUrlTabName = myUrlTab.substring(0,4); // For the above example, myUrlTabName = #tab

    (function(){
        $("#tabsContent > div").hide(); // Initially hide all tabsContent
        $("#tabs li:first a").attr("id","current"); // Activate first tab
        $("#tabsContent > div:first").fadeIn(); // Show first tab tabsContent
        
        $("#tabs a").on("click",function(e) {
            e.preventDefault();
            if ($(this).attr("id") == "current"){ //detection for current tab
              return       
            }
            else{             
              resetTabs();
              $(this).attr("id","current"); // Activate this
              $($(this).attr('name')).fadeIn(); // Show tabsContent for current tab
            }
        });

        for (i = 1; i <= $("#tabs li").length; i++) {
          if (myUrlTab == myUrlTabName + i) {
              resetTabs();
              $("a[name='"+myUrlTab+"']").attr("id","current"); // Activate url tab
              $(myUrlTab).fadeIn(); // Show url tab tabsContent        
          }
        }
    })()
</script>

</body>
</html>