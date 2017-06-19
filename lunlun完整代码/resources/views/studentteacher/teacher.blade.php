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
            height:100%;
            width: 100%;

        }
        .name-picture{
            width: 12.5%;
            margin-top: 30px;
            float: left;
        }
        .picture{
            padding-bottom: 20px;
            text-align: center;
        }
        .picture img{
            height:50px;
            width:50px;
            border-radius:50%;
        }
        .name{
            text-align: center;
            padding-bottom: 10px;
        }


	</style>


</head>
<body>
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
			 <h3 class="clr1">教师</h3>

             <div class="all">
				 @if($teacher_id != null)
					 @foreach($issue as $value1)
					     <p style="text-align: center; font-size: 35px; color: #737373; margin-top: inherit ">您选定的课题是：</p>
						 <h2 style="padding-left: 30px;padding-top: 20px">{{$value1->issue_name}}:</h2>
						 <p style=" font-size: 25px; color: #737373; margin-top: inherit;padding-left: 30px ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$value1->issue_jianjie}}</p>
					 @endforeach
				 @else
					 @foreach($rul as $value)
						 <div class="name-picture">
							 <div class="picture">
								 <img src="{{asset("uploads/$value->teacher_img")}}">
							 </div>
							 <div class="name">
								 <a href="issue/{{$value->teacher_id}}">{{$value->teacher_name}}</a>
							 </div>
						 </div>
					 @endforeach
				 @endif


			 </div>
		 </div>
	 </div>
</div>
<!---->
</body>

</html>