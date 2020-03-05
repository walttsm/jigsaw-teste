@extends('_layouts.master')

@section('body')
<p>Total of {{$posts->count() }} posts</p>
<ul>
    @foreach ($posts as $post)
    <li><a href="/blog/{{$post->filename}}">{{$post->title}}</a></li>
    @endforeach
</ul>
@endsection