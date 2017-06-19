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
            height: 100%;
            width: 100%;
        }
        .background{
            padding-left: 10%;
            padding-top: 3%;
        }
        .cmpny{
            border-bottom: 1px dashed grey;
            border-left: 1px dashed grey;
            height:60px;
            line-height:10px;
        }
        .teacher{
            padding-top: 12px;
            padding-left: 10px;
        }
        .teacher p{
            padding-bottom: 10px;
        }
        .submit{
            float:right;
        }
        .comment{
            padding-left: 30px;
            padding-top: 20px;
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
            <h3 class="clr1">论文</h3>
            @foreach($paper as $value)
                    <div class="company_details">
                        <a href="../download/{{ $value->paper_id }}"><h4>{{ $value->paper_name }}</h4></a>
                        <p class="cmpny1">{{ $value->paper_time }}</p>
                    </div>
            @if($tpaper != null)
            @foreach($tpaper as $values)
                    <div class="background">
                        <div class="cmpny">
                            <div class="teacher">
                                <h4>老师回复论文:<a href="../tdownload/{{ $value->paper_id }}">{{ $values->tpaper_name }}</a></h4></br>
                                <p>{{ $values->tpaper_time }}</p>
                            </div>
                        </div>
                    </div>
             @endforeach
             @else
             
             @endif
             @endforeach
        </div>

          @if($comment!=null)
               @foreach($comment as $value)
                   <div class="comment">
                       <h3>{{$teacher_name}}</h3>
                       <p style="color: #9d9d9d">时间：{{ $value->paper_time }}</p>
                       <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $value->paper_comment }}
                       </p>
                   </div>



           @endforeach
          
           @endif

    </div>

    <!--
    <div class="skills">
        <h3 class="clr2">论文</h3>
        <div class="skill_info">
        <p>123</p>
        </div>
        <div class="skill_list">
            <div class="skill1">
                <h4>Software</h4>
                <ul>
                   <li>Photoshop</li>
                   <li>Flash</li>
                   <li>Dreemweeaver</li>
                   <li>In Design</li>
                </ul>
            </div>
            <div class="skill2">
                <h4>Languages</h4>
                <ul>
                   <li>HTML/CSS</li>
                   <li>ActionScript</li>
                   <li>PHP</li>
                   <li>Ruby on Rais</li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="education">
        <h3 class="clr3">Education</h3>
        <div class="education_details">
            <h4>University of Awesome<span>JANUARY 2004 - OCTOBER 2009  来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></span></h4>
            <h6>MAJOR PHD</h6>
            <p class="cmpny1">Nulla volutpat at est sed ultricies. In ac sem consequat, posuere nulla varius, molestie lorem. Duis quis nibh leo.
            Curabitur a quam eu mi convallis auctor nec id mauris. Nullam mattis turpis eu turpis tincidunt, et pellentesque leo imperdiet.
            Vivamus malesuada, sem laoreet dictum pulvinar, orci lectus rhoncus sapien, ut consectetur augue nibh in neque. In tincidunt sed enim et tincidunt.</p>
        </div>
        <div class="education_details">
            <h4>University of Techonology, Newyork <span>APRIL 2001 - SEPTEMBER 2003</span></h4>
            <h6>BACHELORS OF ARTS</h6>
            <p>Nulla volutpat at est sed ultricies. In ac sem consequat, posuere nulla varius, molestie lorem. Duis quis nibh leo.
            Curabitur a quam eu mi convallis auctor nec id mauris. Nullam mattis turpis eu turpis tincidunt, et pellentesque leo imperdiet.
            Vivamus malesuada, sem laoreet dictum pulvinar, orci lectus rhoncus sapien, ut consectetur augue nibh in neque. In tincidunt sed enim et tincidunt.</p>
        </div>
    </div>
    <div class="copywrite">
        <p>© 2015 Curriculum Vitae All Rights Reseverd </p>
    </div>-->
</div>
</div>
<!---->
</body>
</html>