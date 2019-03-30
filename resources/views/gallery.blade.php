@extends('layouts.default')
@section('pageTitle', ' Galeria')

@section('content')

    <div class="gallery">
        <a href="{{asset('img/slider/1.png')}}"><img src="{{asset('img/slick/1.png')}}" alt="" title=""/></a>
        <div class="clear"></div>


        <a href="{{asset('img/slider/1.png')}}"><img src="{{asset('img/slick/1.png')}}" alt="" title=""/></a>
        <div class="clear"></div>

        <a href="{{asset('img/slider/1.png')}}"><img src="{{asset('img/slick/1.png')}}" alt="" title=""/></a>

        <div class="clear"></div>

    </div>
@stop

@push('script')
    <script>
        var $gallery = $('.gallery a').simpleLightbox();

    </script>
@endpush