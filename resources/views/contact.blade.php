@extends('layouts.default')
@section('pageTitle', ' Kontakt')

@section('content')
    <div class="subpage">
        <div class="container intro">
            <div class="row">
                <div class="col-12">
                    <div class="main-text-wrapper">
                        <div class="heading-wrapper">
                            <p>masz pytania?</p>
                            <h1>Skontaktuj się z nami</h1>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container number">
            <div class="row">
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

                    </div>
                    <div class="form-wrapper">
                        <form action="{{url('/kontakt')}}" method="post" class="form-group">
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
@stop

@push('script')
    <script src="{{asset('js/maps.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUa7FRpVZj2k4RKKm5BLSi9EUk4nN5xpI&callback=initMap" async defer></script>
    <script>
        $(document).ready(function() {
            $('.modal').modal('show');
        });
    </script>
@endpush
