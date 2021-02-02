@extends('layouts.app')

@section('title', 'Home')
@section('home_active', 'active')

@section('content')

    <h2 class="font-weight-bold">Search</h2>
    <div class="main">

        <div class="form-group has-feedback has-search">
            <span class="glyphicon glyphicon-search form-control-feedback"></span>
{{--            <form action="{{ route('search') }}" method="post">--}}
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="text" id="search" class="form-control" placeholder="Search" name="search">
{{--            </form>--}}
        </div>
        @include('layouts.search_result')
    </div>

@endsection
