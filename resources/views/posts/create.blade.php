@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => ['PostsController@store'], 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('Title', 'Title') }}
        {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter Title']) }}
    </div>
    {{-- <div class="form-group">
    {{Form::label('name', 'Name')}}
    {{Form::text('name', '', ['class' => 'form-control','placeholder' =>'Enter your Name'])}}
  </div> --}}
    <div class="form-group">
        {{ Form::label('content', 'Content') }}
        {{ Form::textarea('content', '', ['class' => 'form-control', 'placeholder' => 'Enter Content']) }}
    </div>
    <div class="form-group">
        {{ Form::submit('Create Post', ['class' => 'btn btn-dark btn-block']) }}
    </div>
    {!! Form::close() !!}
@endsection
