
var activeStep = 0;
var wrapperSlider = $('.wrapper-slider');
var wrapperSteps = $('.wrapper-steps');

function changeToSlider(number){
    $(".wrapper-steps div").removeClass('active');
    $( ".wrapper-steps div:nth-child("+ (number+1) + ")" ).addClass('active');
    $('.wrapper-slider').removeClass('animate');
    setTimeout(
        function()
        {
            $('.wrapper-slider').addClass('animate');
            $('.wrapper-slider').css('background-image', 'url(img/slider/'+arrayImg[number]+')').fadeIn();
        }, 200);
}


function slider(type, i) {
    $(".wrapper-steps div").removeClass('active');

    $( ".wrapper-steps div:nth-child("+ (activeStep+1) + ")" ).addClass('active');
    if(type === 'next'){
        $('.wrapper-slider').removeClass('animate');
        setTimeout(
            function()
            {
                $('.wrapper-slider').addClass('animate');
                $('.wrapper-slider').css('background-image', 'url(img/slider/'+arrayImg[i]+')').fadeIn();
            }, 200);
    }
    else if(type === 'prev'){
        $('.wrapper-slider').removeClass('animate');
        setTimeout(
            function()
            {
                $('.wrapper-slider').addClass('animate');
                $('.wrapper-slider').css('background-image', 'url(img/slider/'+arrayImg[i]+')').fadeIn();
            }, 200);

    }
}

var arrayImg = ['1.png', '2.png', '3.png'];
var arrayDesc = ['Jesiotr pieczony', 'Rosół z ryby', 'Pstrąg'];

for (var i = 0; i < arrayDesc.length; i++){
    if(i===0){
        $('.wrapper-steps').append('<div class="active">' + arrayDesc[i] +'</div>');
    }
    else{
        $('.wrapper-steps').append('<div>' + arrayDesc[i] +'</div>');
    }

}

$('.wrapper-steps div').click(function(){
    var ty = $(this).index();
    activeStep = ty;
    changeToSlider(ty);

})




var arrayImgLenght = arrayImg.length;

$('.wrapper-slider').css('background-image', 'url(img/slider/'+arrayImg[activeStep]+')');


var width = $("#sec-heading").width();
$('#about').css( "width", width );

$( window ).resize(function() {
    var width = $("#sec-heading").width();
    $('#about').css( "width", width );
});


$('.right').click(function () {
    activeStep = activeStep+1;
    if(activeStep < arrayImgLenght){
        slider('next' , activeStep);
    }
    else{
        activeStep = 0;
        slider('next' , activeStep);
    }
})

$('.left').click(function () {
    activeStep = activeStep-1;
    if(activeStep < 0){
        activeStep = arrayImgLenght-1;
        slider('prev', activeStep);
    }
    else{
        slider('next' , activeStep);
    }

})



var x = setInterval(function(){
    activeStep = activeStep+1;
    if(activeStep < arrayImgLenght){
        slider('next' , activeStep);
    }
    else{
        activeStep = 0;
        slider('next' , activeStep);
    }
}, 5000);

wrapperSteps.hover(function(ev){
    clearInterval(x);
}, function(ev){
    x = setInterval(function(){
        activeStep = activeStep+1;
        if(activeStep < arrayImgLenght){
            slider('next' , activeStep);
        }
        else{
            activeStep = 0;
            slider('next' , activeStep);
        }
    }, 5000);
});

wrapperSlider.hover(function(ev){
    clearInterval(x);
}, function(ev){
    x = setInterval(function(){
        activeStep = activeStep+1;
        if(activeStep < arrayImgLenght){
            slider('next' , activeStep);
        }
        else{
            activeStep = 0;
            slider('next' , activeStep);
        }
    }, 5000);
});