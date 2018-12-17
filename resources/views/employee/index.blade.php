@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-13 col-md-offset-0.5">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h4>All Employees</h4>
                        <a href="{{ route('dashboard') }}">Back</a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover " id="users-table">
                            <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Skype</th>
                                <th>City</th>
                                <th>Birthdate</th>
                                <th>Technology</th>
                                <th>Skill Level</th>
                                <th>Experience</th>
                                <th>Salary</th>
                                <th>Department</th>
                                <th>Start Working</th>
                                <th>Comments</th>
                            </tr>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td><a href="{{ route('employees') }}/{{$employee->id}}" class="navbar-header">{{$employee->profile->name}} {{$employee->profile->surname}}</a></td>
                                    <td>{{$employee->profile->contacts->email}}</td>
                                    <td>{{$employee->profile->contacts->phone or 'None'}}</td>
                                    <td>{{$employee->profile->contacts->skype or 'None'}}</td>
                                    <td>{{$employee->profile->city->name or 'None'}}</td>
                                    <td>{{$employee->profile->birthdate or 'None'}}</td>
                                    <td>{{$employee->profile->technology->name or 'None'}}</td>
                                    <td>{{$employee->profile->level->name or 'None'}}</td>
                                    <td>{{$employee->profile->experience or 'None'}} years</td>
                                    <td>{{$employee->salary->last or 'None'}}</td>
                                    <td><a href="{{ route('departments') }}/{{$employee->department->id}}" class="navbar-header">{{$employee->department->name or 'None'}}</a></td>
                                    <td>{{$employee->startdate or 'None'}}</td>
                                    <td>{{$employee->comments or 'None'}}</td>
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
