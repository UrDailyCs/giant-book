@extends('layouts.main')

@section('container')
<div class="books">
    <div class="image">
        <img height=500px width= 200px class="book-image"  src="{{Storage::url('images/'.$book->image)}}" alt="">
    </div>

    <div class="book-desc">
        <p class="book-title">  Title: {{ $book->title }}</p>
        <p class="book-categories"> category :
            @foreach ($book->category as $category  )
                {{-- {{ $category->name }} --}}
                <a href="/category/{{ $category->id  }}"> {{ $category->name }}</a>
            @endforeach

        </p>
        <p>Publisher : <a href="/publisher/{{ $book->publisher->id  }}"> {{ $book->publisher->name }}</a>  </p>
        <p class="book-author">Author : {{ $book ->author }}</p>
        <p class="book-year">Year : {{ $book ->year }}</p>
        <p class="book-synopsis">Synopsis: <br> {{ $book ->synopsis }}</p>

    </div>
</div>
@endsection
