@extends('layouts.admin')

@section('content')

    <div class="row col-lg-12">
        <div class="row col-lg-4">
            <img src="{{ url('filter/demo') }}" alt="">
        </div>
        <div class="row col-lg-4">
            <img src="{{ url('filter/red') }}" alt="">
        </div>
        <div class="row col-lg-4">
            <img src="{{ url('filter/rotated') }}" alt="">
        </div>

    </div>

@stop