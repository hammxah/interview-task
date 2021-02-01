@extends('layouts.app')

@section('title', 'Add Book')
@section('create_active', 'active')


@section('content')

    <div class="row">
        <div class="col-lg-6">
            <h2 class="font-weight-bold">Add new book</h2>
        </div>
    </div>
    <div>
        <form action="{{ route('store_book') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title </label>
                <input type="text" class="form-control" id="title"  name="title" required>
            </div>
            <div class="form-group">
                <label for="author">Author </label>
                <input type="text" class="form-control" id="author" name="author" required>
            </div>
            <div class="form-group">
                <label for="iban">IBAN </label>
                <input type="number" class="form-control" id="iban" name="iban" required>
            </div>

            <button type="submit" class="btn btn-primary">Add new book</button>
        </form>

    </div>
@endsection
