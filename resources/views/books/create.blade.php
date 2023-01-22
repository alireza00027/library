@extends('layouts.master')

@section('style')
    
@endsection
@section('content')
<div class="container py-5 mt-5">
    <div class="row p-5 border shadow">
        <div class="col-md-3 border shadow mb-3 flex-column justify-content-around py-5">
                <img src="{{asset('image/book-3.png')}}" alt="" class="w-100">
                <label for="file-upload" class="w-100">
                    <input type="file" id="file-upload" style="display: none"/>
                    <span class="BTN w-100 text-center">آپلود عکس</span>
                </label>                       
        </div>
        <div class="col-md-6 border shadow mb-3">
            <div class="p-5">
                <div class="pb-4">
                    <label class="pb-2">دسته بندی</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>انتخاب دسته بندی</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>
                <div class="d-flex pb-4">
                    <span>عنوان کتاب</span>
                    <span>368539</span>
                </div>                
                <div class="d-flex pb-4">
                    <span>نویسنده:</span>
                    <span>شهرام دلشاد امیرحسین الهیاری</span>
                </div>
                <div class="d-flex pb-4">
                    <span>موضوع:</span>
                    <span>ادبیات عربی ترجمه شده به فارسی</span>
                </div>
                <div class="d-flex pb-4">
                    <span>زبان:</span>
                    <span>فارسی</span>
                </div>
                <div class="d-flex pb-4">
                    <span>سال انتشار:</span>
                    <span>1401</span>
                </div>
                <div class="d-flex pb-4">
                    <span>جلد:</span>
                    <span>1401</span>
                </div>
                <div class="d-flex pb-4">
                    <span>تعداد صفحه:</span>
                    <span>1401</span>
                </div>
                <div class="d-flex pb-4">
                    <span>شماره چاپ:</span>
                    <span>1</span>
                </div>
            </div>

        </div>
        <div class="col-md-3 border shadow mb-3 d-flex flex-column py-5">
                <img src="{{asset('image/book-3.png')}}" alt="" class="w-100">
                <label for="file-upload" class="w-100">
                    <input type="file" id="file-upload" style="display: none"/>
                    <span class="BTN w-100 text-center">آپلود فایل کتاب</span>
                </label>                       
        </div>
    </div>
</div>
@endsection
@section('script')
    
@endsection
