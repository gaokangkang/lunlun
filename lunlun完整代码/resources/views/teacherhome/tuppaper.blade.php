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
<form action="" method="post" class="definewidth m20" enctype="multipart/form-data">
    {{ csrf_field() }}
    <table class="table table-bordered table-hover m10" style="margin-left:10px;margin-top:3px;">
        <tr>
            <td width="10%" class="tableleft">论文名字</td>
            <td><input type="text" name="tpaper_name"/></td>
        </tr>
        <td class="tableleft">论文</td>
        <td class="tableleft" style="width: 196px; "><input name="tpaper_content"  type="file"/></td>
        </tr>
        <tr>
            <td class="tableleft"></td>
            <td>
                <button style="margin-left:5px;"type="submit" class="btn btn-primary" type="button"  >保存</button> &nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid" onclick="window.location.replace('../tlunwen/{{$paper_id}}')">返回</button>
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