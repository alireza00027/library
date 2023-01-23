@extends('layouts.master')

@section('style')
    
@endsection
@section('content')
<div class="container py-5 mt-5">
    <form action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row p-5 border shadow">
            <div class="col-md-3 border shadow mb-3 flex-column justify-content-around py-5">
                    <img src="{{asset('image/book-3.png')}}" alt="" class="w-100">
                    <label for="file-upload" class="w-100">
                        <input name="img" type="file" id="file-upload" />
                        <span class="BTN w-100 text-center">آپلود عکس</span>
                    </label>                       
            </div>
            <div class="col-md-6 border shadow mb-3">
                <div class="p-5">
                    <div class=" d-flex pb-4 mb-5 mt-5">
                        <label class="pb-2">دسته بندی</label>
                        <select name="category_id" class="form-select" aria-label="Default select example">
                            <option value="">انتخاب دسته بندی</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="d-flex pb-4 mb-5 mt-5">
                        <span>عنوان کتاب</span>
                        <input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="عنوان کتاب">
                    </div>                
                    <div class="d-flex pb-4 mb-5 mt-5">
                        <span>نام نویسنده:</span>
                        <input type="text" name="writer" class="form-control" value="{{old('writer')}}" placeholder="نام نویسنده">
                    </div>
                    <div class="d-flex pb-4 mb-5 mt-5">
                        <span>سال انتشار:</span>
                        <input type="text" name="release_date" class="form-control" value="{{old('release_date')}}" placeholder="سال انتشار">
                    </div>
                </div>
    
            </div>
            <div class="col-md-3 border shadow mb-3 d-flex flex-column py-5">
                    <img src="{{asset('image/book-3.png')}}" alt="" class="w-100">
                    <label for="file-upload1" class="w-100">
                        <input name="book_file" type="file" id="file-upload1" />
                        <span class="BTN w-100 text-center">آپلود فایل کتاب</span>
                    </label>                       
            </div>
        </div>
        <div class="row">
            <button class="btn btn-success btn-lg w-100 text-center" type="submit">ایجاد</button>
        </div>
    </form>
</div>
@endsection
@section('script')
    
@endsection
