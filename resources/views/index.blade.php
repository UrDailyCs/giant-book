@extends('layouts.main')
@section('container')
<section class="indexTitle">
<h1 >Books list</h1>
</section>
<div class="books">
        @foreach ($books as $book )
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
@endsection
