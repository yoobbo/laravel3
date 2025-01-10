@extends("layout")
@section("content")
    <h3>about</h3>
    @foreach($data as $key => $value)
    {{$key. "=" .$value}}
    @endforeach
@endsection