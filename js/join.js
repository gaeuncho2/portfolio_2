$('input[type=radio] + label, input[type=checkbox] + label').attr({
    tabindex:'0'
})


// 이메일리스트 선택 이벤트
// 선택옵션의 value가 'title'도 아니고 'self'도 아닌 경우에는 
// #email_domain 입력상자에 그 value 값을 써라.
$('#email_list').on('change', function(){
    let opt = $(this).find('option:selected').val()
    // console.log(opt)
    if ( opt !== 'title' && opt !== 'self') {
        document.querySelector('#email_domain').value = opt;
        $('#email_domain').css({
            backgroundColor:'#f2f2f2'
        }).attr({ disabled:true })

    } else if (opt==='self') {
        $('#email_domain').val('').css({
            backgroundColor:'#fff'
        }).attr({ disabled:false })
    } else {
        $('#email_domain').val('').css({
            backgroundColor:'#f2f2f2'
        }).attr({ disabled:true })
    }
})

$('#content_lbl').on('keydown', function(){
    let maxlen = 10
    let currentText = $(this).val().length
    // console.log(currentText)
    let remainText = maxlen - currentText
    $('.appForm .remain span').text(remainText)
})

// 생년월일 칸에 datepicker 연결하기
$.datepicker.setDefaults({
    dateFormat: 'yy-mm-dd',
    prevText: '이전 달',
    nextText: '다음 달',
    monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
    monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
    dayNames: ['일', '월', '화', '수', '목', '금', '토'],
    dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
    dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
    showMonthAfterYear: true,
    yearSuffix: '년'
})
$('#birthday').datepicker({
    dateFormat:'yy-mm-dd',
    changeMonth:true,
    changeYear:true,
    yearRange:'1950:2020'
})


// $('#pwdarea .pwdhint').on('click', function(){
//     $(this).css({
//         top:'-14px',
//         transform:'translateY(0%)',
//         color:'blue',
//         padding:'0 0 0 10px'
//     })
//     $(this).prev().focus().css({
//         borderLeft:'none',
//         borderRight:'none',
//         borderTop:'none',
//         outline:'none',
//         borderBottomColor:'blue'
//     })
// })


// $('#pwdarea input').on('blur', function(){
//     let txtLen = $(this).val().length
//     if (!txtLen) {
//         $(this).next().css({
//             top:'50%',
//             transform:'translateY(-50%)',
//             color:'#f00',
//             padding:'15px 0 15px 10px'
//         })
//     } 
// })

