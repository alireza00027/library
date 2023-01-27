@extends('layouts.master')

@section('style')
@endsection
@section('content')
    {{-- <a href="{{route('books.add')}}">create</a> --}}
    <section class="featured" id="featured">

        <h1 class="heading"> <span>لیست کتاب ها</span> </h1>

        <div class="featured-slider">

            <div class="row">
                @foreach ($books as $book)
                    <div class="col-md-4 col-xxl-3 mb-3">
                        <div class="swiper-slide box">
                            <div class="icons">
                                <a href="{{ route('books.download', ['book' => $book->id]) }}" class="fas fa-download"></a>
                                <a href="{{ route('books.show', ['book' => $book->id]) }}" class="fas fa-eye"></a>
                            </div>
                            <div class="image">
                                <img src="{{ asset($book->getImage()) }}" alt="">
                            </div>
                            <div class="content">
                                <h3>{{ $book->title }}</h3>
                                <p>نام نویسنده : {{ $book->writer }}</p>
                                <p>سال انتشار : {{ $book->release_date }}</p>
                                <a href="{{ route('books.reserve', ['book' => $book->id]) }}" class="BTN">رزرو</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 py-5">
                    {!! $books->withQueryString()->links() !!}
                </div>
            </div>
        </div>

    </section>
@endsection
@section('script')
@endsection
