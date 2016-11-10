@extends('layouts.admin')
@section('content')
    <a href="{{ url('posts/create') }}" class="btn btn-success"><i class="fa fa-aw-fa-plus"></i> Add Post</a>
    <div class="row">
        <form action="{{ url('posts') }}" method="post">
            {!! csrf_field() !!}
            <h1>Post</h1>
            <div class="form-group">
                <label for="">Post</label>
                <textarea type="text" class="form-control" name="post"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Post</button>
            </div>


        </form>

    </div>
@stop