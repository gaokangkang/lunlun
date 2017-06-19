<!DOCTYPE HTML>
<html>
<head>
    <title>Curriculum Vitae a Personal Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
    <link href="{{asset('static/bootstrap/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary JavaScript plugins) -->
    <script src="{{asset('static/bootstrap/js/jquery.min.js')}}"></script>
    <!-- Custom Theme files -->
    <link href="{{asset('static/bootstrap/css/dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('static/bootstrap/css/style.css')}}" rel='stylesheet' type='text/css' />

    <!-- Custom Theme files -->
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Curriculum Vitae Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <!-- start menu -->

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
<!-- header -->
@include('studenthome/header');
<!---->
<link href="{{asset('static/bootstrap/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all"/>
<script src="{{asset('static/bootstrap/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
<!---//pop-up-box---->
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="content">
        <div class="details_header">
            <ul>
                <li><a href="index"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>论文</a></li>
                <li><a href="teacher"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>教师</a></li>
                <li><a href="message"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>消息</a></li>
                <li><a href="setting"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>个人中心</a></li>
                <div id="small-dialog" class="mfp-hide">
                    <img src="{{asset('static/bootstrap/images/g4.jpg')}}" alt=""/>
                </div>
                <script>
                    $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });

                    });
                </script>
            </ul>
        </div>
        <div class="company">
            <h3 class="clr1">发送消息</h3>
            <div class="company_details">
                {{--<form action="" method="post">--}}
                    {{--{!!csrf_field()!!}--}}
                    {{--<div class="student-style">--}}
                        {{--<div class="student" >接收人:</div>--}}
                        {{--<div class="student1">{{$teacher_name}}--}}
                        {{--</div></br>--}}
                        {{--<div class="student" >消息名字:</div>--}}
                        {{--<div class="student1"><input type="text" name="tnews_name"></div>--}}
                    {{--</div>--}}

                    {{--<div class="message-style">--}}
                        {{--<div class="message">消息内容：</div>--}}
                        {{--<div class="message1"><textarea name="tnews_content"></textarea></div>--}}
                    {{--</div>--}}

                    {{--<div>--}}
                        {{--<div class="sublit"><button type="submit">发送</button></div>--}}
                    {{--</div>--}}
                {{--</form>--}}
                <form action="" method="post" class="definewidth m20" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <table class="table table-bordered table-hover m10" style="margin-left:10px;margin-top:3px;">

                        <tr>
                            <td width="10%" class="tableleft">接收人：</td>
                            <td>{{$teacher_name}}</td>
                        </tr>
                        <td class="tableleft">消息名字：</td>
                        <td class="tableleft" style="width: 196px; "><input type="text" name="tnews_name"></td>
                        </tr>
                        <tr>
                            <td width="10%" class="tableleft">消息内容：</td>
                            <td><textarea rows="5" cols="100" name="tnews_content"></textarea></td>
                        </tr>
                        <tr>
                            <td class="tableleft"></td>
                            <td>
                                <button style="margin-left:5px;"type="submit" class="btn btn-primary" type="button"  >发送</button> &nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid" onclick="window.location.replace('message')">返回</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

    </div>

</div>
</div>
<!---->
</body>
</html>