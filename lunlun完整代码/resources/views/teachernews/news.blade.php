<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="{{asset('static/bootstrap/css/pintuer.css')}}">
<link rel="stylesheet" href="{{asset('static/bootstrap/css/admin.css')}}">
<script src="{{asset('static/bootstrap/js/jquery.js')}} "></script>
<script src="{{asset('static/bootstrap/js/pintuer.js')}} "></script>
  <style>
    body{
      height:auto;
      width: auto;
    }
    .div{
      height: 100%;
      width: 100%;
    }
    .student-style{
    padding-bottom: 5%;
      padding-top: 5%;
      height:10%;
      width:100%;
    }
    .student{
      float:left;
      text-align: center;
      width:10%;
    }
    .student1{
      width:90%;
    }
    .message-style{
      height:30%;
      padding-bottom: 5%;
    }
    .message{
      float:left;
      height:100%;
      width:10%;
      text-align: center;
    }
    .message1 textarea{
      height:200px;
      width:90%;
    }
    .sublit{
      text-align: center;
    }
  </style>
</head>
<body>
<div class="div">

    <form action="" method="post">
        {!!csrf_field()!!}
        <div class="student-style">
            <div class="student" >接收人:</div>
            <div class="student1"><input type="text" name="student_name" id="student_name">(全体同学：发送给全学院的同学；所有人：发送给选自己的同学；单个同学填所选同学的名字)
            </div></br>
            <div class="student" >消息名字:</div>
            <div class="student1"><input type="text" name="snews_name" id="snews_name"></div>
        </div>

        <div class="message-style">
            <div class="message">消息内容：</div>
            <div class="message1"><textarea name="snews_content"></textarea></div>
        </div>

        <div>
            <div class="sublit"><button type="submit">发送</button></div>
        </div>
    </form>



  </div>

</body></html>