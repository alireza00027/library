
<!DOCTYPE html>
<html dir="rtl" lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>کتابخانه</title>
    
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
        <!-- custom css file link  -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    @yield('style')
    
    </head>
<body>
    
<header class="header">
    @php
    use App\Models\Category;
        $categories=Category::all();
    @endphp

    @include('layouts.section.header',['categories'=>$categories])

</header>

<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="{{route('main')}}">خانه</a>
        <a href="{{route('books')}}">لیست کتاب ها</a>
    @foreach ($categories as $ca)
        <a href="{{route('books.list',['category'=>$ca->id])}}">{{$ca->title}}</a>
    @endforeach
    
    {{-- <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a> --}}
</nav>

@include('layouts.section.loginForm')
@include('layouts.section.errors')
    
@yield('content')


@include('layouts.section.footer')


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

@yield('script')

</body>
</html>