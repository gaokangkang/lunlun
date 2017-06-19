<html>
<head></head>
<body>
<div id="applyFor" style="text-align: center; width: 500px; margin: 100px auto;">{{$message}},请返回<a href="{{$url}}" style="color: red">登录</a>页面</div>
</body>
<script type="text/javascript">
    $(function(){
        var url = "{{$url}}"
        var loginTime = parseInt($('.loginTime').text());
        var time = setInterval(function(){
            loginTime = loginTime-1;
            $('.loginTime').text(loginTime);
            if(loginTime==0){
                clearInterval(time);
                window.location.href=url;
            }
        },1000);
    })
</script>
</html>