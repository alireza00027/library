@extends('layouts.master')

@section('style')
@endsection
@section('content')
    {{-- <a href="{{route('books.add')}}">create</a> --}}
    <section class="featured" id="featured">

        <h1 class="heading"> <span>کتابهای برجسته</span> </h1>

        <div class="featured-slider">

            <div class="row">
                <div class="col-md-4 col-xxl-3 mb-3">
                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="{{ asset('image/book-1.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>کتاب برجسته</h3>
                            <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                            <a href="#" class="BTN">اضافه کردن به سبد خرید</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xxl-3 mb-3">
                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="{{ asset('image/book-1.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>کتاب برجسته</h3>
                            <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                            <a href="#" class="BTN">اضافه کردن به سبد خرید</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xxl-3 mb-3">
                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="{{ asset('image/book-1.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>کتاب برجسته</h3>
                            <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                            <a href="#" class="BTN">اضافه کردن به سبد خرید</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xxl-3 mb-3">
                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="{{ asset('image/book-1.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>کتاب برجسته</h3>
                            <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                            <a href="#" class="BTN">اضافه کردن به سبد خرید</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xxl-3 mb-3">
                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="{{ asset('image/book-1.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>کتاب برجسته</h3>
                            <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                            <a href="#" class="BTN">اضافه کردن به سبد خرید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@section('script')
@endsection
