@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">Nachrichten</div>
        <div class="card-body">
            <table class="table">
                <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Kommentar</th>
                </thead>
                <tbody>
                @forelse($messages as $msg)
                    <tr>
                        <td>
                            {{$msg->name}}
                        </td>
                        <td>
                            {{$msg->email}}
                        </td>
                        <td>
                            {{$msg->message}}
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="3">Keine Nachrichten</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
