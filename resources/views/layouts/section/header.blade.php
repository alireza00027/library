<div class="header-1">

    <a href="#" class="logo"> <i class="fas fa-book"></i> کتابخانه </a>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="جستجو کنید" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="icons">
        <div id="search-btn" class="fas fa-search"></div>
        @if (auth()->check())
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="fa fa-user" type="submit"></button>
                <a href="{{route('user.panel')}}" class="fas fa-user"></a>
            </form>

        @else
        <a href="{{route('login')}}" class="fas fa-user"></a> 
        @endif
    </div>

</div>

<div class="header-2">
    <nav class="navbar">
        <a href="#home">خانه</a>
        @foreach ($categories as $ca)
        <a href="{{route('books.list',['category'=>$ca->id])}}">{{$ca->title}}</a>
        @endforeach
        {{-- <a href="{{route('books.add')}}">افزودن کتاب</a> --}}
        {{-- <a href="#arrivals">جدیدها</a>
        <a href="#reviews">نظرات</a>
        <a href="#blogs">وبلاگ</a> --}}
    </nav>
</div>