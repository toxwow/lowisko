@extends('layouts.default')
@section('pageTitle', ' O nas')

@section('content')
    <div class="about-subpage header-wrapper">
        <div class="wrapper-img">
            <div class="img"></div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                <h3 class="value-title">Nasze kluczowe wartości</h3>
            </div>
            <div class="col-12 col-md-4">
                <div class="wrapper-values">
                    <img src="{{asset('img/experience.svg')}}" alt="">
                    <p class="title">25 lat doświadczenia</p>
                    <p class="desc">Właściciel obiektu posiada 25 lat doświadczenia w branży rybackiej. Jest to gwarancja, iż obiekt każdego dnia jest profesjonalnie przygotwany do wędkowania, a ryby w zbiorniku są zdrowe i piękne </p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="wrapper-values">
                    <img src="{{asset('img/family.svg')}}" alt="">
                    <p class="title">Rodzinny biznes</p>
                    <p class="desc">Nasza miłość do ryb, przerodziła się w rodzinny biznes. Staramy się, aby pobyt na łowisku był jak najlepszy, a serwowane dania kreowały niepowtarzalne doznania smakowe.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="wrapper-values">
                    <img src="{{asset('img/eco.svg')}}" alt="" style="margin-bottom: 32px">
                    <p class="title">Ekologiczne produkty</p>
                    <p class="desc">Ryby, które serwujemy naszym klientom pochodzą z naszych własnych stawów. Ryba karmiona jest w sposób ekologiczny - przenicą, jęczmieniem czy żytem.</p>
                </div>
            </div>
        </div>
    </div>
@stop

