<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>  
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>
  <style>
    body{
      height:auto;
    }
    .all{
      height:100%;
      width:100%;
    }
    .name-picture{
     float: left;
     padding-left:50px;
    }
    .picture{
    padding-bottom: 20px;
      text-align: center;
    }
    .picture img{
      height:80px;
      width:80px;
      border-radius:50%;
    }
    .name{
      text-align: center;
      padding-bottom: 10px;
    }
  </style>
</head>
<body>
<div class="all">

 @for($k=0;$k<$i;$k++)
  <div class="name-picture">
    <div class="picture">
      <img src="{{asset("uploads/$array1[$k]")}}">
    </div>
    <div class="name">
      <a href="lunwen/{{ $array[$k] }}">{{$array[$k] }}</a>
    </div>
  </div>
      @endfor

</div>
</body></html>