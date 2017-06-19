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
        .t2{
            height:13%;
            width:99%;
            overflow:auto;
            word-break:break-all;
        }
    </style>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 论文信息</strong></div>
    @foreach($paper as $value)
    <div class="body-content">
            <button class="button bg-main icon-check-square-o" type="submit" style="width:400px;height:100px">
                <a href="../download/{{ $value->paper_id }}">{{ $value->paper_name }}
                </a></button>
        @foreach($tpaper as $values)
            <div class="teacher-1">
                <button class="button1" type="submit" style="width:400px;height:100px;">
                    <a href="../tdownload/{{ $values->paper_id }}">{{ $values->tpaper_name }}
                    </a></button>
                @endforeach
                <div class="submit">
                    <a href="../tuppaper/{{ $value->paper_id }}"> <input type="submit" value="回复论文"></a>
                    <a href="../destory/{{ $value->paper_id }}" ><input type="submit" value="删除回复"></a>
                </div>
            </div>
            <hr>
    </div>

     <form action="../comment/{{ $value->paper_id }}" method="get">
            <div >
        <textarea name="comment" class="t2" cols="210" rows="10">
        </textarea>
                <button   class="button bg-main icon-check-square-o" type="submit" style="width:100px;height:50px;position: absolute; top:300px;right:14px;">
                    提交
                </button>
            </div>
        </form>
    @endforeach
        <br>
        <br>
        <br>
    @foreach($comment as $value)
        <hr style="color: #1E88C7">
        <div class="wenda-listcon clearfix">
            <div class="wendaslider">
                <h3 class="wendaquetitle">
                    <p>{{$session}}</p>
                    <div class="wendatitlecon">
                        <b>{{ $value->paper_comment }}
                        </b>
                    </div>
                </h3>

                <div class="replymegfooter clearfix">
                    <div class="wenda-time l">
                        <em>时间：{{ $value->paper_time }}</em> </div>
                </div>
            </div>
        </div>
    @endforeach


</div>
</body></html>