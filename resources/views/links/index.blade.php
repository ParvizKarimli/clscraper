@extends('layouts.app')

@section('content')
    <div class="row">
        <a href="/links/create" class="btn btn-default">Add Link</a>
        <h3>Links</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Title</th>
                <th>URL</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($links as $link)
                <tr>
                    <td>{{$link->title}}</td>
                    <td>
                        <a href="{{$link->url}}" target="_blank">
                            {{str_limit($link->url, 50)}}
                        </a>
                    </td>
                    <td>
                        <a href="/links/{{$link->id}}/edit" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$links->links()}}
    </div>
@endsection
