@extends('layouts.main')

@section('container')

<div class="publisher">
    <div class="publisher-detail">
    <p>Name :{{ $publisher->name }}</p>
    <p>Address: {{ $publisher->address }}</p>
    <p>Phone Number: {{ $publisher->phone }}</p>
    <p>Email: {{ $publisher->email }}</p>

    <div class="image">
        {{-- <img class="book-image"  src="{{Storage::url('images/'.$publisher->image)}}" alt=""> --}}
    </div>



    </div>

    <div class="books">

        @foreach ($publisher->book as $book )
        <div class="book">
        <div class="image">
            <img class="book-image"  src="{{Storage::url('images/'.$book->image)}}" alt="">
        </div>

        <div class="book-desc">
            <p class="book-title"> {{ $book->title }}</p>
            <p>by</p>
            <p class="book-author">{{ $book ->author }}</p>
            <button class="btn"><a href="/bookdetail/{{ $book->id }}">Detail</a> </button>
        </div>
    </div>
        @endforeach
    </div>

</div>

@endsection
