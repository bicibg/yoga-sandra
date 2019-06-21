@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">Pages</div>
        <div class="card-body">
            @include('partials.error')
            <table class="table">
                <thead>
                <th>Titel</th>
                <th>Link</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr>
                        <td>
                            {{$page->title}}
                        </td>
                        <td>
                            /{{$page->slug}}
                        </td>
                        <td>
                            <a href="{{route('pages.edit',$page->slug)}}" class="btn btn-info btn-sm">Bearbeiten</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
