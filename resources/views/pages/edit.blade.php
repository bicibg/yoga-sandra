@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            Update Page
        </div>
        <div class="card-body">
            @include('partials.error')
            <form action="{{route('pages.update',$page->slug)}}" method="POST" id="pageUpdateForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{$page->title}}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input id="content" type="hidden" name="content" value="{{$page->content}}">
                    <trix-editor input="content"></trix-editor>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update Page</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card card-default mt-5">
        <div class="card-header">
            <h1>Vorschau</h1>
        </div>
        <div class="card-body" id="preview">
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.css">
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            var content = "";
            setInterval(function(){
                if(content !== $("input#content[type=hidden]").val()){
                    content = $("input#content[type=hidden]").val();
                    $('#preview').html(content);
                }
            }, 1000);
        });
    </script>
@endsection
