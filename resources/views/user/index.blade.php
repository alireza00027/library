@extends('layouts.master')
@section('style')
    
@endsection

@section('content')
<section class="featured" id="featured">

    <h1 class="heading"> <span>اطلاعات شخصی</span> </h1>

    <div class="featured-slider">

        <div class="col-md-12">
            <form action="{{route('user.update',['user'=>auth()->user()->id])}}" method="POST" class="form-control">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="from-group">
                            <label for="name">نام کاربری :</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{auth()->user()->name}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="from-group">
                            <label for="email">ایمیل :</label>
                            <input type="text" id="email" class="form-control" value="{{auth()->user()->email}}" disabled>
                        </div>
                    </div>
                </div>
                <button class="BTN" type="submit">ویرایش</button>
            </form>
        </div>
    </div>

    

</section>

{{-- <section class="featured">

    <h1 class="heading"> <span>کتاب های من</span> </h1>

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

</section>   --}}

<section class="featured" id="featured">
    
    <h1 class="heading"> <span>کتاب های من</span> </h1>


    <div class="row">
        <a href="{{route('books.add')}}" class="btn btn-lg btn-info">افزودن کتاب</a>
    </div>

    <div class="featured-slider">

        <div class="row">
            @foreach ($myBooks as $book)
                <div class="col-md-4 col-xxl-3 mb-3">
                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="{{route('books.download',['book'=>$book->id])}}" class="fas fa-download"></a>
                            <a href="{{route('books.show',['book'=>$book->id])}}" class="fas fa-eye"></a>
                            <a href="{{route('books.edit',['book'=>$book->id])}}" class="fas fa-edit"></a>
                        </div>
                        <div class="image">
                            <img src="{{ asset($book->getImage()) }}" alt="">
                        </div>
                        <div class="content">
                            <h3>{{$book->title}}</h3>
                            <p>نام نویسنده : {{$book->writer}}</p>
                            <p>سال انتشار : {{$book->release_date}}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</section>
<section class="featured" id="featured">

    <h1 class="heading"> <span>کتاب های رزرو شده</span> </h1>

    <div class="featured-slider">

        <div class="row">
            @foreach ($myReserves as $reserve)
                <div class="col-md-4 col-xxl-3 mb-3">
                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="{{route('books.download',['book'=>$reserve->book->id])}}" class="fas fa-download"></a>
                            <a href="{{route('books.show',['book'=>$reserve->book->id])}}" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="{{ asset($reserve->book->getImage()) }}" alt="">
                        </div>
                        <div class="content">
                            <h3>{{$reserve->book->title}}</h3>
                            <p>نام نویسنده : {{$reserve->book->writer}}</p>
                            <p>سال انتشار : {{$reserve->book->release_date}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>
@endsection