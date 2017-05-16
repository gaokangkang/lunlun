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
			 <h3 class="clr1">论文</h3>
				 <button type="button" onclick="window.location.replace('uppaper')" style="margin-left: 30px;">上传</button>

			 @if($rul==null)
				 <p style="text-align: center; font-size: 45px; color: #737373; margin-top: inherit ">您还未上传论文，请上传!</p>

			 @else

				 @foreach($rul as $value)
				 <div class="company_details">
				 <h4>{{$value->paper_name}}<span></span></h4>
				 <p class="cmpny1">{{$value->paper_time}}</p>
				 </div>
				 @endforeach

			 @endif

			 </div>
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