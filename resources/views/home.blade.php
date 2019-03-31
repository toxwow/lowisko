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
                        <p>
                            Ryba, którą serwujemy naszym klientom, pochodzi ze stawów, którymi sami jesteśmy właścicielami. Dzięki temu jesteśmy w stanie zagwarantować, iż nasza ryba  karmiona jest w sposób ekologiczny - przenicą, jęczmieniem czy żytem.
                        </p>
                        <p>
                            Wszystkie ryby pieczemu w piecu konwencyjnym, aby wydobyć z nich całą kwintesencje smaku. W naszej ofercie znajdą Państwo takie ryby jak: pstrąg, karp, jesiotr, szczupak i wiele innych.
                        </p>
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
                            <p>
                                Zbiorniki, które udostępniamy wędkarzom są staranie przygotowane. Groble są systemtycznie koszone tak, aby zagwarantować każdemu z was pełen komfort podczas łowienia. W zbiornikach znajduję się ponad 10 000 kg ryb różnego rodzaju gatunku: karpi, jesiotrów, karasi czy ryb drapieżnych, takich jak szczupaki.
                            </p>
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
    <div class="section four d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">

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
                        <form action="{{url('/')}}" method="post" class="form-group">
                            {{csrf_field()}}
                            <input type="text" required name="name" class="form-control my-4" placeholder="Imię">
                            <input type="email" required name="email" class="form-control my-4" placeholder="Adres e-mail">
                            <textarea type="text" required name="content" class="form-control my-4" rows="4" placeholder="Wiadomość"></textarea>
                            <button type="submit" class="btn btn-primary w-100">Wyślij wiadomość</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subpage d-block d-md-none">
        <div class="container number">
            <div class="row">
                <div class="col-12">
                    <div class="heading-wrapper">
                        <p>MASZ PYTANIA?</p>
                        <h3>Skontaktuj się z nami</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="wrapper-box">
                        <p class="desc">
                            <img src="{{asset('img/mail.png')}}" style="width: 20px;  margin-bottom: 2px; margin-right: 10px" alt="">
                            kontakt@łowiskogrodzisko.pl</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="wrapper-box">
                        <p class="desc">
                            <img src="{{asset('img/phone.png')}}" style="width: 20px; margin-bottom: 2px; margin-right: 10px" alt=""><a href="tel:+4866763216">+48 667 632 161</a></p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="wrapper-box">
                        <p class="desc">
                            <img src="{{asset('img/placeholder.png')}}" style="width: 20px;  margin-bottom: 2px; margin-right: 10px" alt="">ul. Zamkowa, Wręczyca Mała</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(session()->has('sucess'))
        <div class="modal fade bd-example-modal-lg" tabindex="99999" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Dziękujemy</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Twoja wiadomość została wysłana poprawnie. Wkrótce dostaniesz odpowiedź zwrotną.
                    </div>

                </div>
            </div>
        </div>
        </div>
    @endif


@push('script')
    <script src="{{asset('js/maps.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUa7FRpVZj2k4RKKm5BLSi9EUk4nN5xpI&callback=initMap" async defer></script>
    <script>
        $(document).ready(function() {
            $('.modal').modal('show');
        });
    </script>
@endpush
@stop
