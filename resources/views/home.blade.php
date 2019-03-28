@extends('layouts.default')
@section('pageTitle', 'Home')

@section('content')
    @component('components.slider-home')@endcomponent

    <div class="section first">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="heading-wrapper">
                        <p>PIECZONE RYBY Z PIECA</p>
                        <h3>Smak ekologicznej ryby</h3>
                    </div>
                    <div class="description-wrapper">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at laoreet lectus. In hac habitasse platea dictumst. In auctor faucibus ex, in ullamcorper est facilisis id. Cras at eros in tortor placerat pulvinar in id metus. Sed varius odio diam, sed facilisis lectus porttitor dapibus. Nullam vel tempor sem. Nullam id consequat elit.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at laoreet lectus. In hac habitasse platea dictumst. In auctor faucibus ex, in ullamcorper est facilisis id. Cras at eros</p>
                    </div>
                    <a href="{{route('restaurant')}}"><button class="btn-primary outline mt-4">Zobacz menu</button></a>
                </div>
                <div class="col-12 col-md-4">
                </div>
            </div>
        </div>
    </div>

    <div class="section second">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 order-last order-md-first">
                    <div class="box-price-wrapper">
                        <div class="heading">
                            <p>Cennik</p>
                        </div>
                        <div class="icon-wrapper">
                            <img src="{{asset('img/icon-rod.png')}}" alt="">
                        </div>
                        <div class="content-wrapper">
                            <p class="title">WYMAGANE:</p>
                            <div class="line"></div>
                            <p class="item">POSIADANIE PODBIERAKA</p>
                            <div class="line"></div>
                            <p class="item">POSIADANIE MATY RYBACKIEJ</p>
                            <div class="line"></div>
                            <p class="price">PLN 30.00</p>
                        </div>
                        <div class="footer">
                            <div>
                                <p>Pon. - Pt. <span>7:00 - 19:00</span></p>
                            </div>
                            <div>
                                <p>Sob. - Nd. <span>9:00 - 19:00</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-first order-md-last">
                    <div class="heading-wrapper text-right">
                        <p>DLA NAJBARDZIEJ WYMAGAJĄCYCH</p>
                        <h3>Idealne miejsce dla wędkarzy</h3>
                        <div class="description-wrapper">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at laoreet lectus. In hac habitasse platea dictumst. In auctor faucibus ex, in ullamcorper est facilisis id. Cras at eros in tortor placerat pulvinar in id metus. Sed varius odio diam, sed facilisis lectus porttitor dapibus. Nullam vel tempor sem. Nullam id consequat elit.</p>
                        </div>
                        <a href="{{route('lowisko')}}"><button class="btn-primary outline mt-4">Dowiedz się więcej</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section three">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-wrapper">
                        <p>POZNAJ NAS</p>
                        <h3>Zobacz najpiękniesze ujęcia</h3>
                    </div>
                    @component('components.slider-gallery')@endcomponent
                </div>
            </div>
        </div>
    </div>
    <div class="section four">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-none d-md-block">

                    <div class="map-wrapper">
                        <div id="map"></div>
                        <div class="bg"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="heading-wrapper">
                        <p>MASZ PYTANIA?</p>
                        <h3>Skontaktuj się z nami</h3>
                    </div>
                    <div class="form-wrapper">
                        <form action="" class="form-group">
                            <input type="text" class="form-control my-4" placeholder="Imię">
                            <input type="text" class="form-control my-4" placeholder="Adres e-mail">
                            <textarea type="text" class="form-control my-4" rows="4" placeholder="Wiadomość"></textarea>
                            <button type="submit" class="btn btn-primary w-100">Wyślij wiadomość</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@push('script')
    <script src="{{asset('js/maps.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUa7FRpVZj2k4RKKm5BLSi9EUk4nN5xpI&callback=initMap" async defer></script>

@endpush
@stop
