@extends('layouts.main')

@section('container')

<div class="publisher">
    <div class="publisher-detail">
      <p>Name :{{ $category->name }}</p>
    </div>

    <div class="books">

        @foreach ($category->book as $book )
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
