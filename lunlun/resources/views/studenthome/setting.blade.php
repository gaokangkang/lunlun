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
    <!--上传头像-->
    <style>
        .file {
            position: relative;
            display: inline-block;
            background: #D0EEFF;
            border: 1px solid #99D3F5;
            border-radius: 4px;
            padding: 4px 12px;
            overflow: hidden;
            color: #1E88C7;
            text-decoration: none;
            text-indent: 0;
            line-height: 20px;
        }
        .file input {
            position: absolute;
            font-size: 100px;
            right: 0;
            top: 0;
            opacity: 0;
        }
        .file:hover {
            background: #AADFFD;
            border-color: #78C3F3;
            color: #004974;
            text-decoration: none;
        }
        .input_control{
            width:230px;


        }
        input[type="text"],#btn1,#btn2{
            box-sizing: border-box;

            font-size:1.4em;
            height:1.4em;
            border-radius:4px;
            border:1px solid #c8cccf;
            color:#6a6f77;
            -web-kit-appearance:none;
            -moz-appearance: none;
            display:block;
            outline:0;
            padding:0 1em;
            text-decoration:none;

        }
        input[type="text"]:focus{
            border:1px solid #ff7496;
        }
    </style>

</head>
<body>
<!-- header -->
<div class="col-sm-3 col-md-2 sidebar">

    <div class="sidebar_top">
        <h1>lunlun</h1>
        {{--<img src="{{asset('static/bootstrap/images/logo1.png')}}" alt=""/>--}}
        <img src={{asset('static/bootstrap/images/g4.jpg')}} alt=""/>
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
                    <img src={{asset('static/bootstrap/images/g4.jpg')}} />
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
            <h3 class="clr1">头像</h3>

            <p>
                <br />
                &nbsp;&nbsp;&nbsp;&nbsp;<img src={{asset('static/bootstrap/images/g4.jpg')}} />

            <FORM>
                <br />&nbsp;&nbsp;&nbsp;
                <A  class="file">
                    选择头像
                    <INPUT type="file"  />
                </A>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <A class="file">上传
                    <input type="submit" />
                </A>
            </FORM>

            </p>

        </div>

        <div class="skills">
            <h3 class="clr2">密码</h3>

            <p>
                <br />


            <form>
                <span style="float:left">旧密码：&nbsp;&nbsp;&nbsp;&nbsp;</span> <input type="text" name="oldpwd" value="" class="input_control"/>
                <br/>
                <span style="float:left">新密码：&nbsp;&nbsp;&nbsp;&nbsp;</span> <input type="text" name="pwd" value="" class="input_control"/>
                <br/>
                <span style="float:left">确认密码：</span> <input type="text" name="repwd" value="" class="input_control"/>
                <br/>
                &nbsp;&nbsp;<input type="submit" class="input_control" style="width:150px;color:#1E88C7;" value="确认修改"/>
            </form>
            </p>
        </div>
        <div class="education">
            <h3 class="clr3">基本资料</h3>
            <p><br/>
            <form>
                <span style="float:left">用户名： &nbsp;&nbsp;&nbsp;</span> <input type="text" name="username" value="liushilong" class="input_control"/>
                <br/>
                <span style="float:left">邮箱：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <input type="text" name="email" value="11111@qq.com" class="input_control"/>
                <br/>

                &nbsp;&nbsp;<input type="submit" class="input_control" style="width:150px;color:#1E88C7;" value="确认修改"/>

            </form></p>
        </div>
        <div class="copywrite">
            <p>© 2015 Curriculum Vitae All Rights Reseverd </p>
        </div>
    </div>
</div>
<!---->
</body>
<script>
    $(".a-upload").on("change","input[type='file']",function(){
        var filePath=$(this).val();
        if(filePath.indexOf("jpg")!=-1 || filePath.indexOf("png")!=-1){
            $(".fileerrorTip").html("").hide();
            var arr=filePath.split('\\');
            var fileName=arr[arr.length-1];
            $(".showFileName").html(fileName);
        }else{
            $(".showFileName").html("");
            $(".fileerrorTip").html("您未上传文件，或者您上传文件类型有误！").show();
            return false
        }
    })

</script>
</html>