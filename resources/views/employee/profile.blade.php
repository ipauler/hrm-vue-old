@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-0.5">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h4>Profile page of {{$employee->profile->name}} {{$employee->profile->surname}}</h4>
                    <a href="{{ route('employees') }}">Back</a>
                </div>
                <div class="panel-body">
                    <table class="table table-hover " id="users-table">
                        <thead>
                            <tr>
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
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$employee->profile->contacts->email}}</td>
                                <td>{{$employee->profile->contacts->phone or 'None'}}</td>
                                <td>{{$employee->profile->contacts->skype or 'None'}}</td>
                                <td>{{$employee->city->name or 'None'}}</td>
                                <td>{{$employee->profile->birthdate or 'None'}}</td>
                                <td>{{$employee->profile->technology->name or 'None'}}</td>
                                <td>{{$employee->profile->level->name or 'None'}}</td>
                                <td>{{$employee->profile->experience or 0}} years</td>
                                <td>None</td>
                                {{--<td>{{$employee->salary or 'None'}}</td>--}}
                                <td>{{$employee->startdate or 'None'}}</td>
                                <td>{{$employee->department->name or 'None'}}</td>
                                <td>{{$employee->comments or 'None'}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
