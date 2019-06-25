@extends('layouts.app')

@section('content')
    @if(session()->has('maintenance_error'))
        <div class="alert alert-danger my-5">
            {{session()->get('maintenance_error')}}
        </div>
    @elseif(session()->has('maintenance_success'))
        <div class="alert alert-success my-5">
            {!! session()->get('maintenance_success') !!}
        </div>
    @endif

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
                    <td>Clear <b>application cache</b></td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'clear-cache')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Clear compiled <b>view Cache</b></td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'clear-view')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td><b>Caches all configuration files</b> into a single file</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'config-cache')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td><b>Caches all routes.</b><br>Warning: generate new route cache if routes have been modified</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'route-cache')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Create a database backup and <b>migrations</b></td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'migrate')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Create a database backup and <b>rollback</b> last migration. <br>Warning: Make sure you know which migration was performed last. Otherwise this may result in a large data loss</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'rollback')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Create a database backup and <b>seed</b>. <br>Warning: seed only during the deployement. Re-seeding will cause duplicate data and possible errors</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'seed')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Create a database <b>backup</b></td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'backup')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td><b>Start queue worker</b>. Warning: Queue worker will run until manually stopped</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'queue-work')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td><b>Restart queue worker</b> gracefully</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'queue-restart')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Give me <b>cookie</b></td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'give-me-cookie')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Put the site into <b>maintenance mode (503)</b><br>Warning: Site access will disabled for ALL visitors. Make sure to give yourself access before maintenance.</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'down')}}">Execute</a>
                    </td>
                </tr>
                <tr>
                    <td>Turn <b>maintenance mode off</b></td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{route('maintenance.action', 'up')}}">Execute</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
