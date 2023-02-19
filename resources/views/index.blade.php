{{--<a>i blade</a>--}}

{{--<a>{{$title}}</a>--}}

{{--<a>{{$name}}</a>--}}

{{--<a>{{date('Y-m-d',$time)}}</a>--}}

{{--@if(1 == 2)--}}
{{--    @foreach($list as $val)--}}
{{--        <a>{{$val->name}}</a>--}}
{{--    @endforeach--}}
{{--@else--}}
{{--    <a>没进入循环</a>--}}
{{--@endif--}}

{{--<a>{{$list}}</a>--}}

@foreach($list as $val)
    <a>{{$val->name}}</a>
@endforeach
