@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-0.5">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h4>Profile page of {{$candidate->name}} {{$candidate->surname}}</h4>
                    <a href="{{ route('candidates') }}">Back</a>
                </div>
                <div class="panel-body">
                    <table class="table table-hover " id="users-table">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Phone</th>
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
                                <td>{{$candidate->email}}</td>
                                <td>{{$candidate->phone or 'None'}}</td>
                                <td>{{$candidate->city or 'None'}}</td>
                                <td>{{$candidate->birthdate or 'None'}}</td>
                                <td>{{$candidate->technology or 'None'}}</td>
                                <td>{{$candidate->level or 'None'}}</td>
                                <td>{{$candidate->experience or 'None'}}</td>
                                <td>{{$candidate->expected_salary or 'None'}}</td>
                                <td>{{$candidate->startdate or 'None'}}</td>
                                <td>{{$candidate->department or 'None'}}</td>
                                <td>{{$candidate->comments or 'None'}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
