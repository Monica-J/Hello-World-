<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">
<head>

 <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>用户登录</title>

<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/end/css/styles.css">

</head>
<body>
<div class="jq22-container">

  <div class="login-wrap" style="margin-top:60px">
    <div class="login-html">
      <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">管理员登录</label>
      <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
      <div class="login-form">
        <div class="sign-in-htm">
          <div class="group">
            <label for="user" class="label">用户名</label>
            <input id="user" type="text" class="input">
          </div>
          <div class="group">
            <label for="pass" class="label">密码</label>
            <input id="pass" type="password" class="input" data-type="password">
          </div>


          <!-- <div class="group">
            <label for="pass" class="label">验证码</label>
            <input id="pass" type="addon" class="input" data-type="addon">
          </div> -->



          <div class="group">
            <input id="check" type="checkbox" class="check" checked>
            <label for="check"><span class="icon"></span> 记住密码</label>        
          </div>
          <div class="group">
            <input  type="submit" class="button"  value="登录" style="color:#FFF;">

          </div>            
          <div class="foot-lnk">
            <a href="#forgot">忘记密码?</a>
          </div>
        </div>
        <!-- <div class="sign-up-htm">
          <div class="group">
            <label for="user" class="label">用户名</label>
            <input id="user" type="text" class="input">
          </div>
          <div class="group">
            <label for="pass" class="label">密码</label>
            <input id="pass" type="password" class="input" data-type="password">
          </div>
          <div class="group">
            <label for="pass" class="label">重复密码</label>
            <input id="pass" type="password" class="input" data-type="password">
          </div> -->
          <!--
          <div class="group">
            <label for="pass" class="label">邮箱</label>
            <input id="pass" type="text" class="input">
          </div>
          -->
          <!-- <div class="group">
            <input type="submit" class="button" value="注册" style="color:#FFF;">
          </div>
          <div class="foot-lnk">
            <label for="tab-1" style="color:#FF7110;">已有账号?</a>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>










<!-- <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户登录</title>
<link rel="stylesheet" href="/HelloWorld/helloworld-houtai/Public/end/css/bootstrap.css">
<link href="/HelloWorld/helloworld-houtai/Public/end/css/jquery-ui.css" rel="stylesheet">
<link href="/HelloWorld/helloworld-houtai/Public/end/css/mystyle.css" rel="stylesheet">
<script src="/HelloWorld/helloworld-houtai/Public/end/js/jquery.js"></script>    
<script src="/HelloWorld/helloworld-houtai/Public/end/js/bootstrap.min.js"></script>


</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  
  <div class="navbar-header"> <span class="navbar-logo" > Hello World</span></div>

    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1"> 
   
      <div class="btn-group ">
  <button type="button" class="btn btn-primary active"><span class="glyphicon glyphicon-heart"></span> </button>
  <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-home"></span> </button>
  <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-question-sign"></span></button>
</div>
      
   
  </div>
</nav> 

	<div class="row">
    <div class="col-md-4"></div>
    	<div class="col-md-4 ">
        <div class="list-group login">
  <div  class="list-group-item active">
    <span class="glyphicon glyphicon-lock"></span> <strong class="font14">用户登录</strong>
  </div>
  <div class="list-group-item">
  	<form role="form" >
    <div class="input-group">
  <span class="input-group-addon">用户名：</span>
  <input type="text" class="form-control" placeholder="">
</div>
<div class="input-group">
  <span class="input-group-addon">密<img src="/HelloWorld/helloworld-houtai/Public/end/images/em.png" width="12" height="20">码：</span>
  <input type="password" class="form-control" placeholder="">
</div>
 <div class="row yz">
  <div class="col-md-8">
<div class="input-group"> 
  <span class="input-group-addon">验证码：</span>
  <input type="text" class="form-control" placeholder=""></div></div>
  <div class="col-md-3"><img src="/HelloWorld/helloworld-houtai/Public/end/images/yzm.gif" width="78" height="30" class="yzm"></div>
</div>
<div class="checkbox">
    <label>
      <input type="checkbox"> 记住密码
    </label>
    <a href="#" class="pull-right img1">我要注册</a> 
    </div> 
     <div class="input-group">
  <button type="submit" class="btn btn-primary "> &nbsp;&nbsp;登&nbsp;&nbsp;录&nbsp;&nbsp;</button>
  </div>
    </form>
  </div>
 
</div>
        </div>
        <div class="col-md-4"></div>
    </div>

</body>
</html>
 -->