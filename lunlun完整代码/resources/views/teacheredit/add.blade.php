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
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改信息</strong></div>
  <div class="body-content">
    <div method="post" class="form-x" action="">
      <div class="form-group">
        <div class="label">
          <label>姓名：</label>
        </div>
        <div class="field">
          @if(Session::get('teacher_name'))
            <p style=" ">{{ session::get('teacher_name')}}</p>
          @endif
          <div class="tips"></div>
        </div>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <div class="label">
            <label>头像：</label>
          </div>
          <div class="field">
            <input type="file" class="button bg-blue margin-left" id="image1" name="images" >
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>注册邮箱：</label>
          </div>
          <div class="field">
            <input type="text" name="youxiang" value="" class="input w50">
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>个人简介：</label>
          </div>
          <div class="field">
            <textarea name="content" class="input" style="height:200px; border:1px solid #ddd;"></textarea>
            <div class="tips"></div>
          </div>
        </div>

        <div class="form-group">
          <div class="label">
            <label></label>
          </div>
          <div class="field">
            <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
            &nbsp;&nbsp;&nbsp;<a href="update"> 返回</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</body></html>