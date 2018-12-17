@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h4>All Users</h4>
                    <a href="{{ route('dashboard') }}">Back</a>
                </div>
                <div class="panel-body">
                    <table class="table table-hover " id="users-table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td><a href="{{ route('users') }}/{{$user->id}}" class="navbar-header">{{$user->name}} {{$user->surname}}</a></td>
                                <td>{{$user->email}}</td>
                            </tr>
                        @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
