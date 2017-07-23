$(document).ready(function() {

    var windowWidth = $('#step1').width();
    var slideCount = $('.slide').length;

    $('button#next').on('click', function() {
        var slideActive = $('.slide.active');
        var nextSlide = slideActive.next('.slide');

        slideActive.addClass('active').animate({
            'right' : windowWidth
        },500);

        if($('.slide').index(nextSlide) === -1){
            nextSlide = $('.slide').eq(0);
        }

        nextSlide.addClass('pre-active');

        setTimeout(function(){
            slideActive.css({'right':'0px'});
            nextSlide.removeClass('pre-active');
            slideActive.removeClass('active');
            nextSlide.addClass('active');
        },510);

    });

    $('button#prev').on('click', function() {
        var slideActive = $('.slide.active');
        var prevSlide = slideActive.prev('.slide');

        slideActive.addClass('active').animate({
            'left' : windowWidth
        },500);

        if($('.slide').index(prevSlide) === -1){
            prevSlide = $('.slide').eq(slideCount - 1);
        }

        prevSlide.addClass('pre-active');

        setTimeout(function(){
            slideActive.css({'left':'0px'});
            prevSlide.removeClass('pre-active');
            slideActive.removeClass('active');
            prevSlide.addClass('active');
        },510);

    });



});