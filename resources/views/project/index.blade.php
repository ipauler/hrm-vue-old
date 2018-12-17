@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-13 col-md-offset-0.5">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h4>Projects</h4></div>
                    <div class="panel-body">
                        <table class="table table-hover " id="users-table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Start Date</th>
                                <th>Deadline</th>
                                <th>Manager</th>
                                <th>Department</th>
                                <th>Stage</th>
                            </tr>
                            @foreach ($projects as $project)
                                <tr>
                                    <td width="10%">{{$project->name}}</td>
                                    <td width="30%">{{$project->description}}</td>
                                    <td>{{$project->started_from}}</td>
                                    <td>{{$project->deadline}}</td>
                                    <td><a href="{{ route('employees') }}/{{$project->manager->id}}" class="navbar-header">{{$project->manager->name}} {{$project->manager->surname}}</a></td>
                                    <td><a href="{{ route('departments') }}/{{$project->department->id}}" class="navbar-header">{{$project->department->name}}</a></td>
                                    <td>{{$project->stage->name}}</td>
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
