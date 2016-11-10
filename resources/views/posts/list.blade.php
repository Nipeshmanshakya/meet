@extends('layouts.admin')
@section('content')
    @if( Session::has('message'))
        {!! Session::get('message') !!}
    @endif
    <a href="{{ url('posts/create') }}" class="btn btn-success"><i class="fa fa-aw-fa-plus"></i> Add Post</a>
    <div class="row">
        <h1>My Posts</h1>
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Post</th>
            </tr>
            @foreach( $posts as $post )
            <tr>
                <th>{{ $post->id }}</th>
                <th>{{ $post->post }}</th>
            </tr>
            @endforeach
        </table>
    </div>
@stop