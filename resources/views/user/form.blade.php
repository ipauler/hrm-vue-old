<div class="form-group">
    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
    {!! Form::password('password', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('repassword', 'Repeat Password', ['class' => 'control-label']) !!}
    {!! Form::password('repassword', null, ['class' => 'form-control']) !!}
</div>
{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}