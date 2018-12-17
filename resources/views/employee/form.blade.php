<div class="form-group">
    {{ Form::label('image_path', 'Photo', ['class' => 'control-label']) }}
    {!! Form::file('image_path',  null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('surname', 'Surname', ['class' => 'control-label']) !!}
    {!! Form::text('surname', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('city', 'City', ['class' => 'control-label']) !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone', 'Phone', ['class' => 'control-label']) !!}
    {!! Form::text('phone',  null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('skype', 'Skype', ['class' => 'control-label']) !!}
    {!! Form::text('skype',  null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('birthdate', 'Birthdate', ['class' => 'control-label']) !!}
    {!! Form::date('birthdate', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('technology', 'Technology', ['class' => 'control-label']) !!}
    {!! Form::select('technology', ['L' => 'Some data'], null, ['class' => 'form-control', 'placeholder' => 'Choose technology...']) !!}
</div>
<div class="form-group">
    {!! Form::label('level', 'Skill Level', ['class' => 'control-label']) !!}
    {!! Form::select('level', ['L' => 'Some data'], null, ['class' => 'form-control', 'placeholder' => 'Choose level...']) !!}
</div>
<div class="form-group">
    {!! Form::label('experience', 'Experience', ['class' => 'control-label']) !!}
    {!! Form::number('experience',  null, ['class' => 'form-control']) !!}
</div>
{{--
<div class="form-group form-inline">
    {!! Form::label('roles', 'Account Type', ['class' => 'control-label']) !!}
    {!! Form::select('roles', isset($roles)?$roles:null, isset($user->role->role_id) ? $user->role->role_id : null, ['class' => 'form-control']) !!}

    {!! Form::label('departments', 'Assign department', ['class' => 'control-label']) !!}

    {!! Form::select('departments', isset($departments)?$departments:null, isset($user)? $user->department->first()->id : null, ['class' => 'form-control']) !!}
</div>
--}}
{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}