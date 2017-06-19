
@foreach($rul as $value)
<h4>{{$value->tnews_name}}</h4>
<p>{{$value->tnews_content}}</p>
<p style="color:AAAAAA;font-size:14px">{{$value->tnews_time}}</p>
@endforeach
<a href="../message"><button>返回</button></a>  <a href="../delete/{{$value->tnews_id}}"><button>删除</button></a>