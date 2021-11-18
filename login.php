<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/login.css">
    <script src="./js/jquery-1.12.4.min.js"></script>
    <script src="./js/jquery.mousewheel.min.js"></script>
    <script src="./js/skroll.js"></script>

    <title>Portfolio :: Twosome Place | LOGIN</title>
</head>
<body>

    <div id="wrap">
        <!-- <div class="bgDot"></div> -->

        <?php include 'header.php' ?>

        <section id="loginPage" class="row">
            <div class="loginBox">
                <h3>LOGIN</h3>
                <div class="loginWrap">
                    <div class="loginForm">
                        <form action="login_ok.php" method="post" class="loginForm" name="loginForm">
                            <fieldset>
                                <legend>LOGIN</legend>
                                <p>
                                    <label for="userid">ID</label>
                                    <input type="text" name="userid" id="userid">
                                </p>
                                <p>
                                    <label for="pwd">PW</label>
                                    <input type="password" name="pwd" id="pwd">
                                </p>
                            </fieldset>
                            <button type="submit">
                                <span>Login</span>
                                <span>Enjoy!</span>
                            </button>
                        </form>

                    <ul class="login_list">
                        <li class="kakao"><a href="javascript:;"><strong>카카오톡</strong> 로그인</a></li>
                        <li class="naver"><a href="javascript:;"><strong>네이버</strong> 로그인</a></li>
                        <li class="facebook"><a href="javascript:;"><strong>페이스북</strong> 로그인</a></li>
				    </ul>
                    
                    </div>
                    
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

   </div>

   <script>
       $('#header').addClass('on')
   </script>
</body>
</html>