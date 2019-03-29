@extends('layouts.default')
@section('pageTitle', 'Łowisko')

@section('content')
    <div class="subpage">
        <div class="container intro">
            <div class="row">
                <div class="col-12">
                    <div class="main-text-wrapper">
                        <div class="heading-wrapper">
                            <p>profesjonalne</p>
                            <h1>Łowisko komercyjne</h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi asperiores autem, commodi consequuntur cupiditate dolor dolore ex exercitationem illum iste iusto magnam minima molestias numquam officia pariatur praesentium quibusdam repellat repudiandae sapiente sint voluptate!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container number">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="wrapper-box">
                        <p class="value">11.00ha</p>
                        <p class="desc">wielkość obiektu</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="wrapper-box">
                        <p class="value">27 000kg</p>
                        <p class="desc">ryb w stawie</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="wrapper-box">
                        <p class="value">52</p>
                        <p class="desc">dostępnych stanowisk</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="price-list-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="rules-wrapper">
                            <p class="title"> PLN <span>30.00</span> od wędki </p>
                            <ul>
                                <li><b>bez ograniczeń</b> czasowych</li>
                                <li>możliwość <b>wypuszczenia</b> złowionych ryb</li>
                                <li><b>bezpłatna toaleta</b> na terenie łowiska</li>
                                <li>możliwość <b>wynajęcia maty rybackiej i podbieraka</b></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="time-wrapper">
                            <p class="title"> Godziny otwarcia </p>
                            <ul>
                                <li>
                                    Poniedziałek - Piątek
                                    <span class="amount">8:00 - 18:00</span>
                                </li>
                                <li>
                                    Sobota - Niedziela
                                    <span class="amount">9:00 - 19:00</span>
                                </li>
                            </ul>
                            <div class="wrapper-rules-button">
                                <a href="">Zobacz regulamin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-staw-desc">
            <div class="container">
                <lake-component></lake-component>
            </div>
        </div>




    </div>

@stop