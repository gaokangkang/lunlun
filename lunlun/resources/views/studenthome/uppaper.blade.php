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

</head>
<body>
<!-- header -->
<div class="col-sm-3 col-md-2 sidebar">

    <div class="sidebar_top">
        <h1>lunlun</h1>
        {{--<img src="{{asset('static/bootstrap/images/logo1.png')}}" alt=""/>--}}
        <img src="{{asset('static/bootstrap/images/avt.png')}}" alt=""/>
    </div>
    <div class="details">
        <h3>用户名</h3>
        <p>+00 234 56 789</p>
        <h3>邮箱</h3>
        <p><a href="mailto@example.com">mail@example.com</a></p>
        <address>
            <h3>消息</h3>
            <span></span>
        </address>

    </div>
    <div class="clearfix"></div>
</div>
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
            <h3 class="clr1">上传论文</h3>
            <div class="up" style="margin-left: 25px;margin-top: inherit">

                <form action="" method="post" class="definewidth m20" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <table class="table table-bordered table-hover m10" style="margin-left:10px;margin-top:3px;">

                        <tr>
                            <td width="10%" class="tableleft">论文名字</td>
                            <td><input type="text" name="paper_name"/></td>
                        </tr>
                            <td class="tableleft">论文</td>
                            <td class="tableleft" style="width: 196px; "><input name="paper_content"  type="file"/></td>
                        </tr>
                        <tr>
                            <td class="tableleft"></td>
                            <td>
                                <button style="margin-left:5px;"type="submit" class="btn btn-primary" type="button"  >保存</button> &nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid" onclick="window.location.replace('index')">返回</button>
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