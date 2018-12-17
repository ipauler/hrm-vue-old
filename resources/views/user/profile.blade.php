@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-0.5">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h4>Profile page of user {{$user->name}}</h4>
                    <a href="{{ route('users') }}">Back</a>
                </div>
                <div class="panel-body">
                    <table class="table table-hover " id="users-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Token</th>
                                <th>Created</th>
                                <th>Last Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->remember_token}}</td>
                                <td>{{$user->created_at or 'None'}}</td>
                                <td>{{$user->updated_at or 'None'}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
