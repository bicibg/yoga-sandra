@extends('layouts.app')

@section('background-image')
    @if($page->image)
        {{asset('storage/'.$page->image)}}
    @endif
@endsection
@section('content')
    {!! $page->content !!}
@endsection
