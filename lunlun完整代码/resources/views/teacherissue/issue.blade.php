
<a href="upissue"><button>添加课题</button></a>
@if($rul!=null)
    @foreach($rul as $value)
        <a href="student/{{$value->issue_id}}" style="color:111111;font-size:20px"><h4>{{$value->issue_name}}</h4></a>
        <p>{{$value->issue_jianjie}}</p>
    @endforeach
@else
    <p>还没有确定课题，请上传课题！</p>
@endif
