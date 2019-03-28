@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>
    <style>
        .slick-container{
            position: relative;
            z-index: 1;
            margin: 50px 0;
        }
        .arrow-wrapper{
            position: absolute;
            top: 0;
            z-index: -1;
            bottom: 0;
            width: 100%;
            height: 100%;
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: space-between;
        }
        .arrow-wrapper .prev{
            margin-left: -50px;
            z-index: 3;
        }
        .arrow-wrapper .prev img{
            transform: rotate(180deg);
        }
        .arrow-wrapper .next{
            margin-right: -50px;
            z-index: 3;
        }

        .arrow-wrapper  img{
            width: 20px;
        }

        .slick-dots li.slick-active button:before {
            opacity: 1;
            color: #80CE3B;
        }

        .slick-dots li button:hover:before, .slick-dots li button:focus:before {
            opacity: 1;
            color: rgba(128, 206, 59, 0.76);
        }

        .slick-dots li button:before {
            font-size: 10px;
        }
        .slick-center  {
            transition: transform 1s ease-in-out;
            transform: scale(1.2);
        }

        .slick-active {
            padding: 20px 0;
        }

        .slick-slide {
            margin: 10px;
            padding: 20px 0;
        }

        .slick-slide:not(.slick-center) {
            transition: opacity 1s ease-in-out;
            opacity: 0.4;
        }
    </style>
@endpush
<div class="slick-container">
    <div class="slick-wrapper text-center">
        <div style="padding: 0 15px">
            <img src="{{asset('img/slick/1.png')}}" alt="" style="width: 100%; height: 100%">
        </div>
        <div style="padding: 0 15px">
            <img src="{{asset('img/slick/2.png')}}" alt="" style="width: 100%; height: 100%">
        </div>
        <div style="padding: 0 15px">
            <img src="{{asset('img/slick/3.png')}}" alt="" style="width: 100%; height: 100%">
        </div>
        <div style="padding: 0 15px">
            <img src="{{asset('img/slick/4.png')}}" alt="" style="width: 100%; height: 100%">
        </div>
    </div>

    <div class="arrow-wrapper">
        <div class="prev">
            <img src="{{asset('img/right-arrow-black.svg')}}" alt="">
        </div>
        <div class="next">
            <img src="{{asset('img/right-arrow-black.svg')}}" alt="">
        </div>
    </div>

</div>


@push('script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.slick-wrapper').slick({
                infinite: true,
                focusOnSelect: true,
                draggable: true,
                centerMode: true,
                slidesToShow: 3,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true,
                            prevArrow: $('.prev'),
                            nextArrow: $('.next'),
                        }
                    },
                    {
                        breakpoint: 825,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            dots: true,
                            variableWidth: false,
                            adaptiveHeight: false,
                            centerMode: false,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            dots: true,
                            slidesToScroll: 1,
                            variableWidth: false,
                            adaptiveHeight: false,
                            centerMode: false,
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        });
    </script>
@endpush