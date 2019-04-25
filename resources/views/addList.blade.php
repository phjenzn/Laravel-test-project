@extends('layouts.app')

@section('title')
    <h1>Add to list</h1>
@endsection

@section('content')
    {{ Form::open(['url' => 'addList/submit']) }}
        <div class="form-group">
            {{ Form::label('Value', 'Value') }}
            {{ Form::text('Value', '', ['class' => 'form-control', 'placeholder' => 'Enter value']) }}
        </div>
        <div style="margin: 30px;">
            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
        </div>
    {{ Form::close() }}
@endsection