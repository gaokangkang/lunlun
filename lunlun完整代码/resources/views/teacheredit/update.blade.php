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
    hr{
      height:1px;
      border:none;
      border-top:1px dashed #0066CC;
    }

  </style>
</head>
<body>
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">
      @foreach($teacher as $update )
      <table border="solid">
        <div class="label" style="padding-top: 3% ">
          <font class="box" size="4px" >姓名:{{ $update->teacher_name }}</font>
        </div>
        <hr>
        <div class="label">
          <font size="4px" >学院:{{ $update->teacher_college }}</font>
        </div>
        <hr>
        <div class="field">
          <div class="tips"></div>
        </div>
        <div class="label">
          <font size="4px" >头像:<br/><img src={{asset("uploads/$update->teacher_img")}}  alt=""/ ></font>
        </div>
        <hr>
        <div class="field">
        </div>

        <div class="label">
          <font size="4px" >注册邮箱:<br/>{{ $update->teacher_email }}</font>
        </div>
        <hr>
        <div class="field">

          <div class="tips"></div>
        </div>

        <div class="label">
          <font size="4px" >个人简介:<br/>{{ $update->teacher_jianjie }}</font>
        </div>
        <hr>

        <div class="field">
          @endforeach

          <div class="tips"></div>
        </div>
      </table>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <a  href="add"  class="button bg-main icon-check-square-o" type="submit"> 修改</a>
        </div>
      </div>
    </form>
  </div>
</div>

</body></html>