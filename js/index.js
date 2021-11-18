$('.slideInner').slick({
    autoplay:true,
    autoplaySpeed:3000,
    dots:false,
    arrow:true,
    speed:2000,
    pauseOnHover:true,
    prevArrow : '<button><i class="fas fa-angle-left"></i></button>',
    nextArrow : '<button><i class="fas fa-angle-right"></i></button>'
})

$(window).on('load', function(){
    skroll.recalcPosition();

    $('.grid').isotope({
        filter:'*',
        layoutMode:'masonry', 
        itemSelector:'.item',
    })
})

$('#navi li').on('click', function(){
    var filterValue =  $(this).attr("data-filter")
    $('.grid').isotope({
        filter:filterValue,
        layoutMode:'masonry', 
        itemSelector:'.item'
    })
 })

var skroll = new Skroll()
.add(".sk1", {animation:"fadeInLeft", duration:1000, wait:500, repeat:true})
.add(".sk2", {animation:"fadeInDown", duration:1000, wait:600, repeat:true})
.add(".sk3", {animation:"fadeInRight", duration:1000, wait:800, repeat:true})
.add(".sk4", {animation:"fadeInUp", duration:1000, wait:900, repeat:true})
.add(".sk5", {animation:"fadeInUp", duration:1000, wait:1000, repeat:true})
.init()

$('#navi li').on('click', function(){
    if( $(this).hasClass('on') ){
        $(this).removeClass('on')
    } else {
        $(this).addClass('on').siblings().removeClass('on')
    }
})

$('.grid li').hover(function(){
    $(this).find('span').animate({
        opacity:1,
        left:'50%',
    }, 300);
}, function(){
    $(this).find('span').animate({
        opacity:0,
        left:'0%',
    }, 300);
})

var cookie = document.cookie
var cookieArray = cookie.split(';')
if ( cookie != "" && cookieArray[0] === "popupYN=Y" ){
            $('.popup').hide()
    } else {
            $('.popup').show()
        }

$('.popup a').on('click', function(){
    if( $(this).prev().prop('checked')){
        var d = new Date()
        d.setTime(d.getTime()+(24*60*60*1000))
        var expires = "expires="+d.toUTCString()
        document.cookie = "popupYN=Y;"+expires
    } else {
        document.cookie = "popupYN=N"
    }
        $('.popup').hide()
    })
            
$('.open').on('click', function(){
    if ($(this).hasClass('on')) {
        $(this).removeClass('on')
    } else {
        $(this).addClass('on')
    }
})