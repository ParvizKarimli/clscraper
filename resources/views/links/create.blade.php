@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Add Link</h1>
        {!! Form::open(['action' => 'LinksController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'required'])}}
            </div>
            <div class="form-group">
                {{Form::label('url', 'URL')}}
                {{Form::url('url', '', ['class' => 'form-control', 'required'])}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection
