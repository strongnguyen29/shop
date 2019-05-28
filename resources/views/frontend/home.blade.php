
@extends('layouts.layoutsite')
@section('title', 'Trang chủ')

@section('content')
    @include('frontend.sidebar-slideshow')
    <section class="clearfix main-content my-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('frontend.sidebar-listcategory')
                </div>
                <div class="col-md-9">
                    <div class="row">
                        @for($i = 0; $i < 10; $i++)
                            <div class="col-md-4">
                                <div class="card" style="width: 100%;">
                                    <img src="{{asset('img/sanpham/giay.jpg')}}" class="card-img-top" alt="Giay {{$i}}">
                                    <div class="card-body">
                                        <h5 class="card-title">Giày thể thao nữ {{$i}}</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection