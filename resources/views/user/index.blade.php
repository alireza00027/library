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

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-1.png" alt="">
                </div>
                <div class="content">
                    <h3>کتاب برجسته</h3>
                    <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                    <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-2.png" alt="">
                </div>
                <div class="content">
                    <h3>کتاب برجسته</h3>
                    <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                    <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-3.png" alt="">
                </div>
                <div class="content">
                    <h3>کتاب برجسته</h3>
                    <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                    <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-4.png" alt="">
                </div>
                <div class="content">
                    <h3>کتاب برجسته</h3>
                    <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                    <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-5.png" alt="">
                </div>
                <div class="content">
                    <h3>کتاب برجسته</h3>
                    <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                    <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-6.png" alt="">
                </div>
                <div class="content">
                    <h3>کتاب برجسته</h3>
                    <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                    <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-7.png" alt="">
                </div>
                <div class="content">
                    <h3>کتاب برجسته</h3>
                    <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                    <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-8.png" alt="">
                </div>
                <div class="content">
                    <h3>کتاب برجسته</h3>
                    <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                    <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-9.png" alt="">
                </div>
                <div class="content">
                    <h3>کتاب برجسته</h3>
                    <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                    <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-10.png" alt="">
                </div>
                <div class="content">
                    <h3>کتاب برجسته</h3>
                    <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                    <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>
@endsection