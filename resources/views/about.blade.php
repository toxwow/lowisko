@extends('layouts.default')
@section('pageTitle', ' O nas')

@section('content')
    <div class="about-subpage header-wrapper">
        <div class="wrapper-img">
            <div class="img"></div>
        </div>
        <div class="wrapper-text">
            <p class="title">O nas</p>
            <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur earum eius, esse exercitationem ipsum, laborum maiores neque nisi obcaecati pariatur provident quia quod sapiente soluta, tempora tenetur unde voluptate.</p>
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
                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab at eligendi totam veniam! Architecto assumenda, consequuntur culpa eius facilis possimus sequi. Laborum.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="wrapper-values">
                    <img src="{{asset('img/family.svg')}}" alt="">
                    <p class="title">Rodzinny biznes</p>
                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab at eligendi totam veniam! Architecto assumenda, consequuntur culpa eius facilis possimus sequi. Laborum.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="wrapper-values">
                    <img src="{{asset('img/eco.svg')}}" alt="" style="margin-bottom: 32px">
                    <p class="title">Ekologiczne produkty</p>
                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab at eligendi totam veniam! Architecto assumenda, consequuntur culpa eius facilis possimus sequi. Laborum.</p>
                </div>
            </div>
        </div>
    </div>
@stop

