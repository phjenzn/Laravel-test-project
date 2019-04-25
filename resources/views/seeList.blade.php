@extends('layouts.app')

@section('title')
    <h1>All values</h1>
@endsection

@section('content')
    @if(count($values) > 1)
        @foreach($values as $value)
            <div class="">
                <p>{{$value->value}}</p>
                <small>Created: {{$value->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No values</p>
    @endif 
@endsection