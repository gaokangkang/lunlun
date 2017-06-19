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

    <style type="text/css">
        .all{
            margin-left: 30px;

        }
        .issue{
            margin-top: 30px;
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
                <li><a href="../index"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>论文</a></li>
                <li><a href="../teacher"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>教师</a></li>
                <li><a href="../message"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>消息</a></li>
                <li><a href="../setting"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>个人中心</a></li>
                <div id="small-dialog" class="mfp-hide">
                    <img src="images/g4.jpg" alt=""/>
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
        <div class="company contact-grid">
            <h3 class="clr1">{{$teacher_name}}</h3>




            <div class="all">

                @foreach($rul as $value)
                    <div class="issue">
                        <div class="name">
                            <a href="../sure/{{$value->issue_id}}" onclick="return del()"><h4>{{$value->issue_name}}：</h4></a>
                        </div>
                        <div class="jianjie">
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$value->issue_jianjie}}</p>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!---->
</body>
<script type="text/javascript">
    function del(){
        if(confirm("确定选择这个课题吗？")){
            return true;
        }else{
            return false;
        }
    }
</script>

</html>