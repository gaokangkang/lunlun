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
        /*body{
            height:auto;
        }
        .all{
            height:100%;
            width:100%;
        }*/
        .name-picture{
            float: left;
        }
        .picture{
            padding-bottom: 20px;
            text-align: center;
        }
        .picture img{
            height:40%;
            width:40%;
            border-radius:50%;
        }
        .name{
            text-align: center;
            padding-bottom: 10px;
        }
        .d2{
            padding-top:150px;
            padding-left: 5px; 
        }
    </style>
</head>
<body>
<div class="all">
    @foreach($issue as $value)
    <h4>({{$value->issue_name}}课题最多允许人数为{{$value->issue_total}})</h4>
    @endforeach

    @if($array == null && $array1 == null)
            <p style="text-align: center; font-size: 35px; color: #737373; margin-top: inherit ">还没有学生选此课题！</p>
    @else
        @if($array1 != null)

        <div>
        <h3>未通过审核：</h3>
            @if($count>=$total)
                @for($l = 0; $l < $j; $l++)
                    <div class="name-picture">
                        <div class="picture">
                            <img src='{{asset("uploads/$array3[$l]")}}'>
                        </div>
                        <div class="name">
                            <a href="../add/{{$array1[$l]}}{{$issue_id}}" onclick="return del()">{{ $array1[$l] }}</a>
                        </div>
                        <div><a href="../back/{{$array1[$l]}}{{$issue_id}}">退回</a></div>
                    </div>

                @endfor
            @else
                @for($l = 0; $l < $j; $l++)
                    <div class="name-picture">
                        <div class="picture">
                            <img src='{{asset("uploads/$array3[$l]")}}'>
                        </div>
                        <div class="name">
                            <a href="../add/{{$array1[$l]}}{{$issue_id}}" onclick="return del()">{{ $array1[$l] }}</a>
                        </div>
                    </div>
                @endfor
            @endif


        </div>

        @endif

        @if($array != null)

    <div class="d2">
        <h3>已通过审核：</h3>
        @for($k = 0; $k < $i; $k++)
            <div class="name-picture">
                <div class="picture">
                    <img src='{{asset("uploads/$array2[$k]")}}'>
                </div>
                <div class="name">
                    <a href="../lunwen/{{ $array[$k] }}">{{ $array[$k] }}</a>
                </div>
            </div>
        @endfor
    </div>
            @endif
     @endif
</div>
</body>
<script type="text/javascript">
    function del(){
        if(confirm("确定通过审核吗？")){
            return true;
        }else{
            return false;
        }
    }
</script>
</html>