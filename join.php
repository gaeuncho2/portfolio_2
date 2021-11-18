<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/jquery-ui.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/join.css">
    <script src="./js/jquery-1.12.4.min.js"></script>
    <script src="./js/jquery-ui.min.js"></script>


    <script src="./js/skroll.js"></script>

    <title>Portfolio :: Twosome Place | JOIN</title>
</head>
<body>

    <div id="wrap">
        <!-- <div class="bgDot"></div> -->

        <?php include 'header.php' ?>

        <section id="joinPage" class="row">
            <div class="joinBox">
                <h3>JOIN</h3>
                <div class="joinWrap">
                    <form action="member_insert.php" method="post" name="appForm" class="appForm">
                        <fieldset>
                            <legend>상담문의 입력 양식</legend>
                            <p class="info_pilsoo pilsoo_item">필수입력</p>
                            <ul class="app_list">

                                <!-- 이름 -->
                                <li class="cf">
                                    <label for="name_lbl" class="tit_lbl pilsoo_item">이름</label>
                                    <div class="app_content"><input type="text" class="w100p" id="name_lbl" name="irum" placeholder="이름을 입력해주세요"/></div>
                                </li>
                                <!-- 이메일 -->
                                <li class="cf">
                                    <label for="email_lbl" class="tit_lbl pilsoo_item">이메일</label>
                                    <div class="app_content email_area cf">
                                        <input type="text" class="w160" id="email_lbl" title="이메일 주소" name="email_id" />
                                        <span class="ico_space">@</span>
                                        <input type="text" class="w160" title="이메일 제공업체 입력" name="email_domain" id="email_domain" disabled />										
                                        <div class="select_common">
                                            <select title="이메일 제공업체 목록" id="email_list" name="select_domain">
                                                <option value="title">::이메일선택::</option>
                                                <option value="self">직접입력</option>
                                                <option value="naver.com">naver.com</option>
                                                <option value="hanmail.net">hanmail.net</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <!-- 아이디 -->
                                <li class="cf">
                                    <label for="userid" class="tit_lbl pilsoo_item">아이디</label>
                                    <div class="app_content">
                                        <input type="text" id="userid" name="userid" placeholder="아이디를 입력하세요." class="w170">
                                        <a href="javascript:;" onclick="check_id()" class="idcheck">중복체크</a>
                                    </div>
                                </li>
                                <!-- 비밀번호 -->
                                <li class="cf">
                                    <label for="pwd_lbl" class="tit_lbl pilsoo_item">비밀번호</label>
                                    <div id="pwdarea" class="app_content"><input type="password" class="w100p" id="pwd_lbl" name="pwd" placeholder="비밀번호는 영문자, 숫자, 특수문자 3가지 이상 조합하고, 첫글자는 영어만 허용합니다."/></div>
                                </li>
                                <!-- 비밀번호 확인 -->
                                <li class="cf">
                                    <label for="pwd2_lbl" class="tit_lbl pilsoo_item">비밀번호 확인</label>
                                    <div class="app_content"><input type="password" class="w100p" id="pwd2_lbl" placeholder="비밀번호를 다시 한번 입력해주세요"/></div>
                                </li>
                                <!-- 연락처 -->
                                <li class="cf">
                                    <label for="phone_lbl" class="tit_lbl pilsoo_item">휴대전화</label>
                                    <div class="app_content"><input type="text" class="w100p" id="phone_lbl" name="phone" placeholder="휴대폰”-”없이 숫자만 입력하세요"/></div>
                                </li>
                                <!-- 생년월일 -->
                                <li class="cf">
                                    <label for="birthday" class="tit_lbl nopilsoo">생년월일</label>
                                    <div class="app_content"><input type="text" class="w160" id="birthday" name="birthday"></div>
                                </li>
                                <!-- 성별 -->
                                <li class="cf">
                                    <span class="tit_lbl nopilsoo">성별</span>
                                    <div class="app_content radio_area">
                                        <input type="radio" class="css-radio" id="mmm_lbl" name="gender" value="m"><label for="mmm_lbl">남</label>
                                        <input type="radio" class="css-radio" id="www_lbl" name="gender" value="w"><label for="www_lbl">여</label>
                                    </div>
                                </li>
                                <!-- 개인정보활용동의 -->
                                <li class="cf">
                                    <span class="tit_lbl nopilsoo">개인정보 활용동의</span>
                                    <div class="app_content checkbox_area">
                                        <input type="checkbox" class="css-checkbox" id="agree_lbl" name="agree" value="yes"><label for="agree_lbl">동의함</label>
                                    </div>
                                </li>
                                <!-- 메모 -->
                                <li class="cf">
                                    <label for="content_lbl" class="tit_lbl nopilsoo">한줄메모</label>
                                    <div class="app_content"><textarea id="content_lbl" class="w100p" name="memo" maxlength="10"></textarea>
                                    </div>
                                </li>

                            </ul>
                        </fieldset>

                        <!-- 가입버튼 -->
                        <div class="btn_a">
                            <button type="button" class="btn" onclick="chk_input()">JOIN</button>
                            <button type="reset" class="btn">CANCEL</button>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    

        <footer id="footer">
            <div class="footFirst">
                <div class="contact">
                    <h4>Address</h4>
                    <p>서울특별시 중구 을지로 170, 8층(을지로4가, 을지트윈타워)<br>투썸플레이스(주)</p>
                    <h4>Customer Center</h4>
                    <p>고객센터 : 1577-4410 팩스 : 02-2058-6777</p>
                </div>
                <div class="sns">
                    <h4><a href="https://www.instagram.com/official_atwosomeplace/" target="_blank">&#64;official_atwosomeplace</a></h4>
                    <ul class="snsList">
                        <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="javascript:;"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="law">
                <a>이용약관</a>
                <a><strong>개인정보처리방침</strong></a>
                <a>위치기반서비스 이용약관</a>
                <a>이메일 무단수집거부</a>
                <a>법적고지</a>
                <a>사업자정보확인</a>
            </div>
            <div class="info">
                <p>대표이사 : 이영상  개인정보보호책임자 : 장재호  사업자등록번호 : 404-86-01054<br>
                    통신판매업종신고증 : 제 2018-서울중구-0353호  대표이메일 : helpmaster@twosome.co.kr<br>
                    Copyright &copy; 2021 A TWOSOME PLACE Co., LTD. All Rights Reserved.</p>
            </div>
        </footer>

        <script src="./js/join.js"></script>
        <script>
        // 아이디 중복체크 함수
        function check_id(){
            var userid = document.appForm.userid.value
            if (userid){
                window.open('member_check_id.php?id='+userid, '', 'top=200, left=200, width=300, height=200, scrollbars=no, resizable=no');
                $('.idcheck').addClass('on');
            } else {
                alert('아이디를 입력해주세요.')
                $('#userid').focus().css({
                borderColor:'red'
            })
                return false
            }
            // document.querySelector('.idcheck').classList.add('on);
        }

        // 회원가입 폼에서 입력한 값들을 유효성 체크후 member_insert.php 에 전송하는 함수
        function chk_input() {
            $('.appForm input').css({
                borderColor:'#ccc'
            })
        let email = $('#email_lbl').val()
        let emailCheck = /^[a-zA-Z0-9]+$/
        // p.398~p.400 정규표현식 참고
        // ^ 첫 문자 일치, $ 끝 문자 일치
        // + 한번 이상 나옴
        if ( !emailCheck.test(email) ) {
            alert('특수문자는 포함하지 않으며, 한글자 이상 입력')
            $('#email_lbl').focus().css({
                borderColor:'red'
            })
            return false
        }
        var emailDomain = $('#email_domain').val()
        console.log(emailDomain)
        var emailDomainCheck = /^[a-zA-Z]+[\.][a-z]+([\.][a-z]+)*$/
        // ?= 조건확인후 처음으로 돌아감
        // . 임의의문자(숫자,문자,특수문자 포함한 모든 문자)
        // * 앞의 글자가 0번 이상 나옴
        if ( emailDomain ) { //이메일 도메인이 빈칸이 아니면 검증
            if ( !emailDomainCheck.test(emailDomain) ) {
            alert('정확한 도메인을 입력해주세요.')
            $('#email_domain').focus().css({
                borderColor:'red'
            })
            return false
            }
        } else {
            alert('도메인을 입력해주세요.')
            $('#email_domain').focus().css({
                borderColor:'red'
            })
            return false 
        }
        

        let nameLbl = $('#name_lbl').val()
        let nameLblCheck = /^[가-힣]+$/
        if ( !nameLblCheck.test(nameLbl) ) {
            alert('이름은 한글만 입력하세요.')
            $('#name_lbl').focus().css({
                borderColor:'red'
            })
            return false
        }

        // 아이디칸이 빈칸이면 경고창 띄우고, 전송안되게 하세요.
        let userid = $('#userid').val()
        if ( !userid ) {
            alert('아이디를 입력해주세요.')
            $('#userid').focus().css({
                borderColor:'red'
            })
            return false
        }

        let pwdLbl = $('#pwd_lbl').val()
        // 영문, 숫자, 특수문자 중 3가지 이상 조합. 첫글자는 영어만 허용
        let pwdLblCheck = /^(?=[a-zA-Z])(?=.*[^a-zA-Z0-9])(?=.*[0-9]).*$/
        // . 임의의문자(숫자,문자,특수문자 포함한 모든 문자)
        // * 앞의 글자가 0번 이상 나옴
        // [^ ] 대괄호 안의 ^는 not 
        if ( !pwdLblCheck.test(pwdLbl) ) {
            alert('비밀번호는 영문, 숫자, 특수문자 중 3가지 이상 조합. 첫글자는 영어만 허용')
            $('#pwd_lbl').focus().css({
                borderColor:'red'
            })
            return false
        }

        let pwd2Lbl = $('#pwd2_lbl').val()
        if ( !pwd2Lbl ) {
            alert('비밀번호확인을 입력해주세요.')
            $('#pwd2_lbl').focus().css({
                borderColor:'red'
            })
            return false
        } else {
            if ( pwdLbl!==pwd2Lbl ) {
                alert('비밀번호가 맞지 않습니다.')
                $('#pwd2_lbl').focus().css({
                    borderColor:'red'
                })
                return false
            }
        }

        let phoneLbl = $('#phone_lbl').val()
        if ( !phoneLbl ) {
            alert('전화번호를 입력해주세요.')
            $('#phone_lbl').focus().css({
                borderColor:'red'
            })
            return false
        }

        if ( !$('.idcheck').hasClass('on') ) {
            alert("아이디 중복체크를 눌러주세요.")
            return false;
        }
        // if ( !document.querySelector('.idcheck').classList.contains('on) ) {
        //     return false;
        // }

		document.appForm.submit();
	}

        </script>
        
    <script>
       $('#header').addClass('on')
   </script>
   </div>
</body>
</html>