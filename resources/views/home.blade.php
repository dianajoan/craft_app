@extends('layouts.master')
@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row banner">
            <div class="col-md-12">
                <h1 class="text-center margin-top-100 editContent">
                Learning DIY CRAFT
                </h1>
                <h3 class="text-center margin-top-100 editContent">Building Practical Applications</h3>
                <div class="text-center">
                <img src="{!! asset('img/craft.jpg') !!}" width="302" height="391" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

