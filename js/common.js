
$('html, body').stop().animate({
    scrollTop : 0
},1000)
$('#menuNow li').eq(0).addClass('on')
var cflag = false;

var sDist0 = $('.sect1').offset().top
var sDist1 = 800
var lastSect = 1900

$(window).on('scroll', function(){

    var sct = $(this).scrollTop()
    if ( sct >= 400 ) {
        $('#header').addClass('on')
    } else {
        $('#header').removeClass('on')
    }

    if ( sct >= sDist0 && sct < sDist1 && !cflag ){
        $('#menuNow li').eq(0).addClass('on').siblings().removeClass('on')
    } else if ( sct >= sDist1 && sct < lastSect && !cflag){
        $('#menuNow li').eq(1).addClass('on').siblings().removeClass('on')
    } else if ( sct >= lastSect && !cflag ){
        $('#menuNow li').eq(2).addClass('on').siblings().removeClass('on')
    }

})

$(window).on('load', function(){
    var i = 0;
    var timer = setInterval(intro, 20)

    function intro(){
        i++
        if ( i >= 100 ){
            clearInterval(timer)
            $('.introAni').animate({
                left:'-100%'
            }, 500, function(){
                $(this).hide()
            })
        }
    }
})

$('.depTit').on('click', function(){
    $('.depth1').slideToggle(500)
})

$('.depth1').on('mouseenter', function(){
    $('.depth2').toggleClass('on').animate({
        left:180
    },100)
})
$('.depth1').on('mouseleave', function(){
    $('.depth2').removeClass('on')
})


$('.goTop').on('click', function(e){
    e.preventDefault()
    $('html, body').stop().animate({
        scrollTop:0
    }, 500)
    return false
})