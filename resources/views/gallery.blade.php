@extends('layouts.default')
@section('pageTitle', ' Galeria')

@section('content')
    <div class="subpage">
        <div class="container intro">
            <div class="row">
                <div class="col-12">
                    <div class="main-text-wrapper">
                        <div class="heading-wrapper">
                            <p>miejsce pełne natury</p>
                            <h1>Galeria</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-5">
            <div class="row gallery">
                <div class="col-6 col-md-4 my-2 gallery-item">
                    <a href="{{asset('img/gallery/lowisko-1.jpg')}}">
                        <div class="item" style="background-image: url({{asset('img/gallery/lowisko-1.jpg')}})">
                            <div class="zoom" style="line-height: 250px; text-align: center">
                                <img src="{{asset('img/search-icon.png')}}" style="width: 30px; height: 30px;" alt="">
                            </div>
                        </div>
                    </a>

                    <div class="clear"></div>
                </div>
                <div class="col-6 col-md-4 my-2 gallery-item">
                    <a href="{{asset('img/gallery/lowisko-2.jpg')}}">
                        <div class="item" style="background-image: url({{asset('img/gallery/lowisko-2.jpg')}})">
                            <div class="zoom" style="line-height: 250px; text-align: center">
                                <img src="{{asset('img/search-icon.png')}}" style="width: 30px; height: 30px;" alt="">
                            </div>
                        </div>
                    </a>
                    <div class="clear"></div>
                </div>
                <div class="col-6 col-md-4 my-2 gallery-item">
                    <a href="{{asset('img/gallery/lowisko-3.jpg')}}">
                        <div class="item" style="background-image: url({{asset('img/gallery/lowisko-3.jpg')}})">
                            <div class="zoom" style="line-height: 250px; text-align: center">
                                <img src="{{asset('img/search-icon.png')}}" style="width: 30px; height: 30px;" alt="">
                            </div>
                        </div>
                    </a>
                    <div class="clear"></div>
                </div>
                <div class="col-6 col-md-4 my-2 gallery-item">
                    <a href="{{asset('img/gallery/lowisko-4.jpg')}}">
                        <div class="item" style="background-image: url({{asset('img/gallery/lowisko-4.jpg')}})">
                            <div class="zoom" style="line-height: 250px; text-align: center">
                                <img src="{{asset('img/search-icon.png')}}" style="width: 30px; height: 30px;" alt="">
                            </div>
                        </div>
                    </a>
                    <div class="clear"></div>
                </div>
                <div class="col-6 col-md-4 my-2 gallery-item">
                    <a href="{{asset('img/gallery/lowisko-5.jpg')}}">
                        <div class="item" style="background-image: url({{asset('img/gallery/lowisko-5.jpg')}})">
                            <div class="zoom" style="line-height: 250px; text-align: center">
                                <img src="{{asset('img/search-icon.png')}}" style="width: 30px; height: 30px;" alt="">
                            </div>
                        </div>
                    </a>
                    <div class="clear"></div>
                </div>
                <div class="col-6 col-md-4 my-2 gallery-item">
                    <a href="{{asset('img/gallery/lowisko-6.jpg')}}">
                        <div class="item" style="background-image: url({{asset('img/gallery/lowisko-6.jpg')}})">
                            <div class="zoom" style="line-height: 250px; text-align: center">
                                <img src="{{asset('img/search-icon.png')}}" style="width: 30px; height: 30px;" alt="">
                            </div>
                        </div>
                    </a>
                    <div class="clear"></div>
                </div>


            </div>
        </div>
    </div>
@stop

@push('script')
    <script>
        var $gallery = $('.gallery a').simpleLightbox();

    </script>
@endpush