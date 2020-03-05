@extends('_layouts.master')

@section('body')
<h1>{{$page->title}}</h1>
<p>Created at {{date($page->date)}} by {{$page->author}}</p>

@yield('postBody')
@endsection