@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h4>Create New User</h4>
                    <a href="{{ route('dashboard') }}">Back</a></div>
                <div class="panel-body text-center">
                    {!! Form::open(['route' => 'user.store', 'files'=>true, 'enctype' => 'multipart/form-data']) !!}
                    @include('user.form', ['submitButtonText' => ('Create User')])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
