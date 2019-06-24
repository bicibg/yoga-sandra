@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            Update Page
        </div>
        <div class="card-body">
            @include('partials.error')
            <form action="{{route('pages.update',$page->slug)}}" method="POST" id="pageUpdateForm"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Titel</label>
                    <input type="text" {{!empty($page->template) ? 'readonly' : ''}} class="form-control" name="title"
                           id="title" value="{{$page->title}}">
                </div>
                @if($page->image)
                    <div class="form-group text-center">
                        <img src="{{asset('storage/'.$page->image)}}" alt="image" style="width:50%;">
                    </div>
                @endif

                <div class="form-group">
                    <label for="image">Hintergrundbild</label>
                    <input type="file" class="form-control" name="image" id="image" value="{{$page->image}}">
                </div>
                <div class="form-group">
                    @if(empty($page->template))
                        <label for="content">Inhalt</label>
                        <textarea name="content" id="content" cols="30" rows="30">{{$page->content}}</textarea>
                    @else
                        <input type="hidden" name="content" value="">
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Aktualisieren</button>
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
    <script src="https://cdn.tiny.cloud/1/j53xdzposqqlnom9q27xd3u13c3j6l9jgdofqj2vriz116w6/tinymce/5/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#content',
            plugins: 'print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount tinymcespellchecker a11ychecker imagetools textpattern help formatpainter permanentpen pageembed tinycomments mentions linkchecker',
            toolbar: 'formatselect | bold italic strikethrough forecolor backcolor permanentpen formatpainter | link image media pageembed | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | removeformat | addcomment',
            image_advtab: true,
            template_cdate_format: '[CDATE: %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[MDATE: %m/%d/%Y : %H:%M:%S]',
            image_caption: true,
            spellchecker_dialog: true,
            tinycomments_mode: 'embedded',
            content_style: '.mce-annotation { background: #fff0b7; } .tc-active-annotation {background: #ffe168; color: black; }'
        });
    </script>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            var content = "";
            setInterval(function () {
                if (content !== $("#content").val()) {
                    content = $("#content").val();
                    $('#preview').html(content);
                }
            }, 1000);
        });
    </script>
@endsection
