@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h4>Dashboard</h4></div>
                <ul class="nav text-center">
                    <li class="nav-element {{ Menu::active('users') }}">
                        <a href="{{ route('users') }}">Users</a>
                    </li>
                    <li class="nav-element {{ Menu::active('employees') }}">
                        <a href="{{ route('employees') }}">Employees</a>
                    </li>
                    <li class="nav-element {{ Menu::active('candidates') }}">
                        <a href="{{ route('candidates') }}">Candidates</a>
                    </li>
                    <li class="nav-element {{ Menu::active('departments') }}">
                        <a href="{{ route('departments') }}">Departments</a>
                    </li>
                    <li class="nav-element {{ Menu::active('projects') }}">
                        <a href="{{ route('projects') }}">Projects</a>
                    </li>
                    {{--
                    <li class="nav-element {{ Menu::active('roles') }}">
                        <a href="{{ route('roles') }}">Roles.vue</a>
                    </li>
                    --}}
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
