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
                    <td>Clear application Cache</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'clear-cache')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Clear compiled view Cache</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'clear-view')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Caches all configuration files into a single file</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'config-cache')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Caches all routes.<br>Warning: generate new route cache if routes have been modified</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'route-cache')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Perform Database Migrations</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'migrate')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Rollback Last Database Migration. <br>Warning: Make sure you know which migration was performed last. Otherwise this may result in a large data loss</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'rollback')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Seed the database. <br>Warning: seed only during the deployement. Re-seeding will cause duplicate data and possible errors</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'seed')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Create Database Backup</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'backup')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Start queue Worker. Warning: Queue worker will run until manually stopped</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'queue-work')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Restart queue worker gracefully</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'queue-restart')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Give me cookie</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'give-me-cookie')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Put the site into maintenance mode (503)<br>Warning: Site access will disabled for ALL visitors. Make sure to give yourself access before maintenance.</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'down')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Turn maintenance mode off</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'up')}}">Execute</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
