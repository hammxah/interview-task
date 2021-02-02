@extends('layouts.app')

@section('title', 'All Books')
@section('index_active', 'active')

@section('content')

    <div class="row">
        <div class="col-lg-6">
            <h2 class="font-weight-bold">Books</h2>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-3">
{{--            <form action="{{ route('search') }}" method="post">--}}
{{--                <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--                <input type="text" class="form-control" style="margin-top: 10px;" placeholder="Search here" name="search" id="search">--}}
{{--            </form>--}}
        </div>
    </div>
    <div>
        <table class="table table-responsive table-striped">
            <thead>
            <th>Title</th>
            <th>Author</th>
            <th>IBAN</th>
            </thead>
            <tbody>
            @if (isset($books) && ($books->count() > 0))
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->iban }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3">No book record found.</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection
