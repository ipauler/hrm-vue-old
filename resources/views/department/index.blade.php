@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-15 col-md-offset-0.5">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h4>Departments</h4></div>
                    <div class="panel-body">
                        <table class="table table-hover " id="users-table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Headed By</th>
                                <th>Staff</th>
                            </tr>
                            @foreach ($departments as $department)
                                <tr>
                                    <td width="10%">{{$department->name}}</td>
                                    <td width="50%">{{$department->description}}</td>
                                    <td width="10%"><a href="{{ route('employees') }}/{{$department->headed_by->id}}" class="navbar-header">{{$department->headed_by->name}} {{$department->headed_by->surname}}</a></td>
                                    <td width="30%">
                                        {{--@foreach ($department->staff as $staff)--}}
                                            {{--<a href="{{ route('employees') }}/{{$staff->id}}" class="navbar-header">{{$staff->profile->name}}  {{$staff->profile->surname}}@if (!$loop->last),&nbsp;@endif</a>--}}
                                        {{--@endforeach--}}
                                    </td>
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
