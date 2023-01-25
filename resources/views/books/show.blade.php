@extends('layouts.master')

@section('style')
    
@endsection
@section('content')
<div class="container py-5 mt-5">
    <div class="row p-5 border shadow">
        <div class="col-md-3 border shadow mb-3 d-flex align-items-center py-5">
                <img src="{{asset($book->image)}}" alt="" class="w-100">                                    
        </div>
        <div class="col-md-6 border shadow mb-3">
            <div class="p-5">
                <div class="d-flex pb-4">
                    <span>عنوان کتاب</span>
                    <span>{{$book->title}}</span>
                </div>                
                <div class="d-flex pb-4">
                    <span>نویسنده:</span>
                    <span>{{$book->writer}}</span>
                </div>
                <div class="d-flex pb-4">
                    <span>موضوع:</span>
                    <span>{{$book->categoryTitle}}</span>
                </div>
                <div class="d-flex pb-4">
                    <span>سال انتشار:</span>
                    <span>{{$book->release_date}}</span>
                </div>
            </div>

        </div>
        <div class="col-md-3 border shadow mb-3 d-flex flex-column align-items-center py-5">
            @if ($reserve)
                <a href="{{route('books.download',['book'=>$book->id])}}" class="BTN">دانلود فایل</a>
            @else
                <a href="{{route('books.reserve',['book'=>$book->id])}}" class="BTN">رزرو</a>
            @endif
        </div>
    </div>
</div>
    
@endsection
@section('script')
    
@endsection