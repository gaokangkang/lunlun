
<a href="news"><button> 发送消息</button></a>
<h2 stype="font-weight:blod">未读消息</h2>
    @foreach($rul as $value)
    <a href="content/{{$value->tnews_id}}" style="color:red"><h4>{{$value->tnews_name}}</h4></a>
    <p style="color:AAAAAA;font-size:14px">{{$value->tnews_time}}</p>
        <a href="delete/{{$value->tnews_id}}"><button>删除</button></a>
        <hr style="height:1px;border:none;border-top:1px dashed #0066CC;" />
    @endforeach
<h2>已读消息</h2>
@foreach($rul1 as $value1)
    <a href="content/{{$value1->tnews_id}}"  style="color:444444"><h4>{{$value1->tnews_name}}</h4></a>
    <p style="color:AAAAAA;font-size:14px"">{{$value1->tnews_time}}</p>
    <a href="delete/{{$value1->tnews_id}}"><button>删除</button></a>
    <hr style="height:1px;border:none;border-top:1px dashed #0066CC;" />
    @endforeach