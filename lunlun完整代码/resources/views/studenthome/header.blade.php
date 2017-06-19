<!-- header -->
<div class="col-sm-3 col-md-2 sidebar">
    @foreach($student as $value)
    <div class="sidebar_top">
        <h1>lunlun</h1>
        {{--<img src="{{asset('static/bootstrap/images/logo1.png')}}" alt=""/>--}}

            <img src={{asset("uploads/$value->student_img")}} alt=""/>

    </div>
    <div class="details">
        <h3>用户名</h3>
            <p style=" ">{{ $value->student_name}}</p>
        <h3>邮箱</h3>
        <p><a href="mailto@example.com">{{$value->student_email}}</a></p>
        <address>
            <h3><button type="button" onclick="window.location.replace('../student/login')" style="color: #2e3436">退出</button> </h3>
            <span></span>
        </address>

    </div>
    @endforeach
    <div class="clearfix"></div>
</div>