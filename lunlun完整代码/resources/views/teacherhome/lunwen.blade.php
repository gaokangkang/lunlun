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
    <script src="{{asset('static/bootstrap/js/jquery.js')}} "></script>
    <script src="{{asset('static/bootstrap/js/pintuer.js')}} "></script>
    <style>
        .teacher-1{
            float:right;
        }
        .button bg-main icon-check-square-o{
            float:left;
        }
        .submit{
            float:right;
            padding-left: 50px;
        }
        .button1{
            color: #6a6f77;
        }
    </style>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 论文信息</strong></div>
    <div class="body-content">
        @foreach($rul as $value)
            <button class="button bg-main icon-check-square-o" type="submit" style="width:400px;height:100px">
                <a href="../tlunwen/{{ $value->paper_id }}">{{ $value->paper_name }}
                </a></button>
            </div>
            <hr>
        @endforeach


    </div>
</div>
</body></html>