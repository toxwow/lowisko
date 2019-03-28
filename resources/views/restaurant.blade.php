@extends('layouts.default')
@section('pageTitle', 'Restauracja')

@section('content')
<div class="subpage">
    <div class="container intro">
        <div class="row">
            <div class="col-12">
                <div class="main-text-wrapper">
                    <div class="heading-wrapper">
                        <p>zdrowe, ekologiczne, ryby</p>
                        <h1>Ryby z pieca i nietylko</h1>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi asperiores autem, commodi consequuntur cupiditate dolor dolore ex exercitationem illum iste iusto magnam minima molestias numquam officia pariatur praesentium quibusdam repellat repudiandae sapiente sint voluptate!</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container menu">
        <div class="row">
            <div class="col-12">
                <menu-component></menu-component>
            </div>
        </div>
    </div>
    <div class="menu-download">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper-button-menu">
                        <button class="btn-secondary">Pobierz menu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@stop