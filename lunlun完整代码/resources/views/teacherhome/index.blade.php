<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="{{asset('static/bootstrap/css/pintuer.css')}}">
    <link rel="stylesheet" href="{{asset('static/bootstrap/css/admin.css')}}">
    <script src="{{asset('static/bootstrap/js/jquery.js')}}"></script>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
      @foreach($teacher as $value)
    <h1><img src="{{asset("uploads/$value->teacher_img")}}" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
      @endforeach
  </div>
  <div class="head-l"><a class="button button-little bg-red" href="../student/login"><span class="icon-power-off"></span> 退出登录</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><img src="{{asset('static/bootstrap/images/tishi.png')}}"></a></div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>基本设置</h2>
  <ul style="display:block">
    <li><a href="lists" target="right"><span class="icon-caret-right"></span>学生名单</a></li>
    <li><a href="message" target="right"><span class="icon-caret-right"></span>消息管理</a></li>
     <li><a href="issue" target="right"><span class="icon-caret-right"></span>课题管理</a></li>
  </ul>
  <h2><span class="icon-pencil-square-o"></span>栏目管理</h2>
  <ul>
    <li><a href="update" target="right"><span class="icon-caret-right"></span>个人信息</a></li>
    <li><a href="edit" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
  </ul>  
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <li><a href="logo" target="right" class="icon-home"> 首页</a></li>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="logo" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
</html>