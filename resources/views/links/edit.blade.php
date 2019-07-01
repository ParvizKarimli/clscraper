@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Edit Link</h1>
        {!! Form::open(['action' => ['LinksController@update', $link->id], 'method' => 'PUT']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $link->title, ['class' => 'form-control', 'required'])}}
            </div>
            <div class="form-group">
                {{Form::label('url', 'URL')}}
                {{Form::url('url', $link->url, ['class' => 'form-control', 'required'])}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
        <hr>
        <a class="btn btn-danger" href="" onclick="
            event.preventDefault();
            if(confirm('Delete link?')) {
                document.getElementById('link-{{$link->id}}').submit();
            }
        ">
            Delete Link
        </a>
        {!! Form::open(['action' => ['LinksController@destroy', $link->id],
        'method' => 'DELETE', 'id' => 'link-' . $link->id]) !!}
        {!! Form::close() !!}
    </div>
@endsection
