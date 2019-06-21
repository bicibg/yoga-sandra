@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            Update Page
        </div>
        <div class="card-body">
            @include('partials.error')
            <form action="{{route('pages.update',$page->id)}}" method="POST" id="pageUpdateForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{$page->title}}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input id="content" type="hidden" name="page_content" value="{{$page->content}}">
                    <trix-editor input="content"></trix-editor>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update Page</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.css">
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.js"></script>
@endsection
