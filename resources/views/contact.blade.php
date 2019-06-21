@extends('layouts.app')

@section('background-image')@if($page->image){{asset('storage/'.$page->image)}}@endif

@endsection
@section('content')
    <div class="card card-default">
        <div class="card-header">
            Kontaktformular
        </div>
        <div class="card-body">
            <form action="{{route('pages.contact')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Kommentar</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Senden</button>
            </form>
        </div>
    </div>
@endsection
