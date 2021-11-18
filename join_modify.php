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

        <?php
        $con = mysqli_connect("localhost", "chopeanut", "axc1841341!", "twosome");
        $sql = "select * from member where userid ='$userid'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        $oldirum = $row["irum"];
        $oldid = $row["userid"];
        $num = $row["num"];

    ?>

        <section id="joinPage" class="row">
            <div class="joinBox">
                <h3>Modify</h3>
                <div class="joinWrap">
                    <form action="member_insert.php" method="post" name="appForm" class="appForm">
                        <fieldset>
                            <legend>상담문의 입력 양식</legend>
                            <p class="info_pilsoo pilsoo_item">필수입력</p>
                            <ul class="app_list">
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
                                <li class="cf">
                                    <label for="name_lbl" class="tit_lbl pilsoo_item">이름</label>
                                    <div class="app_content"><input type="text" class="w100p" id="name_lbl" name="irum" placeholder="이름을 입력해주세요" value="<?=$oldirum?>"/></div>
                                </li>
                                <li class="cf">
                                    <label for="userid" class="tit_lbl pilsoo_item">아이디</label>
                                    <div class="app_content">
                                        <input type="text" id="userid" name="userid" placeholder="아이디를 입력하세요." class="w170" value="<?=$oldid?>">
                                        <a href="javascript:;" onclick="check_id()" class="idcheck">중복체크</a>
                                    </div>
                                </li>
                                <li class="cf">
                                    <label for="pwd_lbl" class="tit_lbl pilsoo_item">비밀번호</label>
                                    <div id="pwdarea" class="app_content"><input type="password" class="w100p" id="pwd_lbl" name="pwd" placeholder="비밀번호는 영문자, 숫자, 특수문자 3가지 이상 조합하고, 첫글자는 영어만 허용합니다."/></div>
                                </li>
                                <li class="cf">
                                    <label for="pwd2_lbl" class="tit_lbl pilsoo_item">비밀번호 확인</label>
                                    <div class="app_content"><input type="password" class="w100p" id="pwd2_lbl" placeholder="비밀번호를 다시 한번 입력해주세요"/></div>
                                </li>
                                <li class="cf">
                                    <label for="phone_lbl" class="tit_lbl pilsoo_item">연락처</label>
                                    <div class="app_content"><input type="text" class="w100p" id="phone_lbl" name="phone" placeholder="휴대폰”-”없이 숫자만 입력하세요"/></div>
                                </li>
                                <li class="cf">
                                    <label for="birthday" class="tit_lbl nopilsoo">생년월일</label>
                                    <div class="app_content"><input type="text" class="w160" id="birthday" name="birthday"></div>
                                </li>
                                <li class="cf">
                                    <span class="tit_lbl nopilsoo">성별</span>
                                    <div class="app_content radio_area">
                                        <input type="radio" class="css-radio" id="mmm_lbl" name="gender" value="m"><label for="mmm_lbl">남</label>
                                        <input type="radio" class="css-radio" id="www_lbl" name="gender" value="w"><label for="www_lbl">여</label>
                                    </div>
                                </li>
                                <li class="cf">
                                    <span class="tit_lbl nopilsoo">개인정보 활용동의</span>
                                    <div class="app_content checkbox_area">
                                        <input type="checkbox" class="css-checkbox" id="agree_lbl" name="agree" value="yes"><label for="agree_lbl">동의함</label>
                                    </div>
                                </li>
                                <li class="cf">
                                    <label for="content_lbl" class="tit_lbl nopilsoo">한줄메모</label>
                                    <div class="app_content"><textarea id="content_lbl" class="w100p" placeholder="간단한 상담 요청 사항을 남겨주시면 보다 상세한 상담이 가능합니다.&#13;&#10;전화 상담 희망시 기재 부탁드립니다." name="memo" maxlength="10"></textarea>
                                    <p class="remain">남은글자 : <span>10</span>글자</p>	
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                        <div class="btn_a">
                        <button type="submit" class="btn" onclick="chk_input()">JOIN</button>
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

        <script src="./js/common.js"></script>
        <script src="./js/join.js"></script>
        <script>
            $('#header').addClass('on')
        </script>
   </div>
</body>
</html>