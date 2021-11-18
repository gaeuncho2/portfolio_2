// var tabMenuLi = $('.tabmenu li')
// var contentDiv = $('.contents > div')

for (let i=0; i<2; i++){
    $('.tabmenu li').eq(i).on('click', function(){
        for (let j=0; j<2; j++){
            $('.tabmenu li').eq(j).removeClass('active')
            $('.contents > div').eq(j).removeClass('active')
        }
        $('.tabmenu li').eq(i).addClass('active')
        $('.contents > div').eq(i).addClass('active')
    })
}

// var tabMenuLi = document.querySelectorAll('.tabmenu li')
// var contentDiv = document.querySelectorAll('.contents > div')

// for (let i=0; i<2; i++){
//     tabMenuLi[i].addEventListener('click',function(){
//         for (let j=0; j<2; j++){
//             tabMenuLi[j].classList.remove('active')
//             contentDiv[j].classList.remove('active')
//         }
//         tabMenuLi[i].classList.add('active')
//         contentDiv[i].classList.add('active')
//     })
// }