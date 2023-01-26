@extends('layouts.master')

@section('content')
<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>کتاب بازی</h3>
            <p>شما در کتاب بازی میتوانید کتاب های خود که بصورت فایل هستند را با بقیه به اشتراک بگذارید و از کتاب های بقیه نیز استفاده کنید</p>
            <a href="{{route('books')}}" class="BTN">اکنون رزرو کنید</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="image/book-1.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-2.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-3.png" alt=""></a>
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>

<!-- home section ense  -->

<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>جدید ترین ها</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">
            @foreach ($latestBooks as $book)
                <div class="swiper-slide box">
                    <div class="icons">
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
                        <a href="{{route('books.reserve',['book'=>$book->id])}}" class="BTN">رزرو</a>
                    </div>
                </div>
            @endforeach
            

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->

<!-- arrivals section starts  -->

@foreach ($selectedCategories as $key=>$category)
<section class="arrivals" id="arrivals">

    <h1 class="heading"> <span>{{$key}}</span> </h1>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            @foreach ($category as $book)
                <a href="{{route('books.show',['book'=>$book->id])}}" class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset($book->getImage())}}" alt="">
                    </div>
                    <div class="content">
                        <h3>{{$book->title}}</h3>
                        <span class="text-danger">نام نویسنده:</span><span class="text-dark"> {{$book->writer}} </span>
                        <br>
                        <span class="text-danger">سال انتشار:</span><span class="text-dark"> {{$book->release_date}} </span>
                        {{-- <a href="{{route('books.show',['book'=>$book->id])}}" class="fas fa-eye"></a>
                        <a href="{{route('books.download',['book'=>$book->id])}}" class="fas fa-download"></a> --}}
                    </div>
                </a>
            @endforeach
        </div>

    </div>
</section>
@endforeach

<!-- arrivals section ends -->
    
@endsection

