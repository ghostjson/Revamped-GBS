$('#main-banner-carousel').carousel({
    interval: false
})

$('.carousel-control-next').click(function(){
    $('#main-banner-carousel').carousel('next')
})

$('.carousel-control-prev').click(function(){
    $('#main-banner-carousel').carousel('prev')
})

$(document).ready(function(){
    $('#main-banner-carousel').carousel(1)
})
