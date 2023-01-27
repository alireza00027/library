@extends('layouts.master')

@section('style')
    
@endsection
@section('content')
<div class="container py-5 mt-5">
    <div class="row p-5 border shadow col-8 mx-auto">        
        <div class="col-md-3 mb-3 d-flex flex-column align-items-center py-5">
                <img src="{{asset($book->image)}}" alt="" class="w-100">  
                <div class="w-100">
                    <a href="{{route('books.reserve',['book'=>$book->id])}}" class="BTN w-100 text-center">رزرو</a>
                </div>                                  
        </div>
        <div class="col-md-9 mb-3">
            <div class="p-5 d-flex flex-column">
                <div class="d-flex pb-4">
                    <span style="min-width: 100px">عنوان کتاب :</span>
                    <span class="pe-5">{{$book->title}}</span>
                </div>                
                <div class="d-flex pb-4">
                    <span style="min-width: 100px">نویسنده:</span>
                    <span class="pe-5">{{$book->writer}}</span>
                </div>
                <div class="d-flex pb-4">
                    <span style="min-width: 100px">موضوع:</span>
                    <span class="pe-5">{{$book->categoryTitle}}</span>
                </div>
                <div class="d-flex pb-4">
                    <span style="min-width: 100px">سال انتشار:</span>
                    <span class="pe-5">{{$book->release_date}}</span>
                </div>
            </div>

        </div>
        {{-- <div class="col-md-3 mb-3 d-flex flex-column align-items-center py-5">
            @if ($reserve)
                <a href="{{route('books.download',['book'=>$book->id])}}" class="BTN">دانلود فایل</a>
            @else
                <a href="{{route('books.reserve',['book'=>$book->id])}}" class="BTN">رزرو</a>
            @endif
        </div> --}}
    </div>
</div>
    
@endsection
@section('script')
    
@endsection