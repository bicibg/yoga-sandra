@extends('layouts.app')

@section('content')
    @include('partials.error')

    <div class="card card-default">
        <div class="card-header">Nachrichten</div>
        <div class="card-body">
            <table class="table">
                <thead>
                <th>Task</th>
                <th></th>
                </thead>
                <tbody>
                <tr>
                    <td>Clear Application Cache</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'clear-cache')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Perform Database Migrations</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'migrate')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Rollback Last Database Migration</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'rollback')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Create Database Backup</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'backup')}}">Execute</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
