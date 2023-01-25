@extends('layouts.master')
@section('style')
    
@endsection

@section('content')
<section class="featured">

    <h1 class="heading"> <span>کتاب های من</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">
            @foreach ($myBooks as $book)
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="{{route('books.edit',['book'=>$book->id])}}" class="fas fa-edit"></a>
                        <a href="{{route('books.show',['book'=>$book->id])}}" class="fas fa-eye"></a>
                        <a href="{{route('books.download',['book'=>$book->id])}}" class="fas fa-download"></a>
                    </div>
                    <div class="image">
                        <img src="{{asset($book->image)}}" alt="">
                    </div>
                    <div class="content">
                        <h4>{{$book->title}}</h4>
                        <p>{{$book->writer}}</p>
                        <p>{{$book->release_date}}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>  

<section class="featured">

    <h1 class="heading"> <span>کتاب های رزرو شده ی من</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            @foreach ($myReserves as $reserve)
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="{{route('books.show',['book'=>$reserve->book_id])}}" class="fas fa-eye"></a>
                        <a href="{{route('books.download',['book'=>$reserve->book_id])}}" class="fas fa-download"></a>
                    </div>
                    <div class="image">
                        <img src="{{asset($reserve->bookImg)}}" alt="">
                    </div>
                    <div class="content">
                        <h4>{{$reserve->book->title}}</h4>
                        <p>{{$reserve->book->writer}}</p>
                        <p>{{$reserve->book->release_date}}</p>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>
@endsection