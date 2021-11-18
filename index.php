<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/rwdCommon.css">
    <script src="./js/jquery-1.12.4.min.js"></script>
    <script src="./js/jquery.mousewheel.min.js"></script>
    <script src="./js/prefixfree.min.js"></script>
    <script src="./js/isotope.pkgd.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <!-- <script src="./js/prefixfree.min.js"></script>  -->

    <script src="./js/skroll.js"></script>

    <title>Portfolio :: Twosome Place</title>
</head>
<body>

    <ul id="menuNow">
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
    </ul>
    <div class="goTop">
       <a> <i class="fas fa-angle-up"></i></a>
    </div>

    <div class="open">
        <span class="bar bar1"></span>
        <span class="bar bar2"></span>
        <span class="bar bar3"></span>
        <span class="blind">메뉴열기</span>
    </div>


    <div id="wrap">
        <!-- <div class="bgDot"></div> -->
        
        <?php include 'header.php' ?>

        <section id="section">
            <div class="sect1">
                <div class="slideOuter">
                    <div class="slideInner">
                        <div class="slide slide1"></div>
                        <div class="slide slide2"></div>
                        <div class="slide slide3"></div>
                    </div>
                </div>
            </div>

            <div class="sect2">
                <div class="row">
                    <h3>STORE</h3>
                    <div id="row1" class="cf">
                        <div class="colu sk1"><a href="javascript:;"><img src="./img/store1.png" alt=""><span>부산송정힐스점<i class="fas fa-arrow-circle-right"></i></span></a></div>
                        <div class="colu sk2"><a href="javascript:;"><img src="./img/store2.png" alt=""><span>앞산스카이타운점<i class="fas fa-arrow-circle-right"></i></span></a></div>
                        <div class="colu sk3"><a href="javascript:;"><img src="./img/store3.png" alt=""><span>왕산해수욕장점<i class="fas fa-arrow-circle-right"></i></span></a></div>
                    </div>
                    <div id="row2" class="cf">
                        <div class="colu sk4"><a href="javascript:;"><img src="./img/store4.png" alt=""><span>제주애월하귀점<i class="fas fa-arrow-circle-right"></i></span></a></div>
                        <div class="colu sk5"><a href="javascript:;"><img src="./img/store5.png" alt=""><span>춘천구봉산점<i class="fas fa-arrow-circle-right"></i></span></a></div>
                    </div> 
                </div>
            </div>

            <div class="sect3 row">
                <h3>MENU</h3>
                <div class="product">
                    <ul id="navi">
                        <li data-filter="*">ALL</li>
                        <li data-filter=".coffee">Coffee</li>
                        <li data-filter=".cake">Cake</li>
                        <li data-filter=".food">Food</li> 
                    </ul>
                    <ul class="grid">
                        <li class="item cake"><span><i class="fas fa-birthday-cake"></i></span><img src="./img/cake3.jpg" alt=""></li>            
                        <li class="item food"><span><i class="fas fa-bread-slice"></i></span><img src="./img/food5.jpg" alt=""></li>
                        <li class="item coffee"><span><i class="fas fa-mug-hot"></i></span><img src="./img/coffee1.jpg" alt=""></li>
                        <li class="item coffee"><span><i class="fas fa-mug-hot"></i></span><img src="./img/coffee4.jpg" alt=""></li>
                        <li class="item food"><span><i class="fas fa-bread-slice"></i></span><img src="./img/food3.jpg" alt=""></li>
                        <li class="item cake"><span><i class="fas fa-birthday-cake"></i></span><img src="./img/cake2.jpg" alt=""></li>
                        <li class="item food"><span><i class="fas fa-bread-slice"></i></span><img src="./img/food4.jpg" alt=""></li>
                        <li class="item cake"><span><i class="fas fa-birthday-cake"></i></span><img src="./img/cake4.jpg" alt=""></li>
                        <li class="item coffee"><span><i class="fas fa-mug-hot"></i></span><img src="./img/coffee2.jpg" alt=""></li>
                        <li class="item cake"><span><i class="fas fa-birthday-cake"></i></span><img src="./img/cake5.jpg" alt=""></li>
                        <li class="item food"><span><i class="fas fa-bread-slice"></i></span><img src="./img/food1.jpg" alt=""></li>
                        <li class="item coffee"><span><i class="fas fa-mug-hot"></i></span><img src="./img/coffee3.jpg" alt=""></li>
                        <li class="item food"><span><i class="fas fa-bread-slice"></i></span><img src="./img/food2.jpg" alt=""></li>
                        <li class="item cake"><span><i class="fas fa-birthday-cake"></i></span><img src="./img/cake1.jpg" alt=""></li>                        
                        <li class="item food"><span><i class="fas fa-bread-slice"></i></span><img src="./img/food6.jpg" alt=""></li>
                    </ul>
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

        <div class="introAni">
            <div class="introSubs">
                <div class="introSub1"><img src="./img/introImage-sub2.png" alt="인트로서브"></div>
                <div class="introSub2"><img src="./img/introImage-sub1.png" alt="인트로서브"></div>
            </div>
            <div class="introImg"><img src="./img/introImage.png" alt="인트로"></div>

        </div>
    </div>

    <div class="popup">
        <div>
            <p>
                본 페이지는 구직용 포트폴리오를 위해 제작되었습니다. 
            </p>
        </div>
        <div>
            <input type="checkbox">
            오늘 하루 그만 보기
            <a href="javascript:;">닫기</a>
        </div>
    </div>

    <script src="./js/common.js"></script>
    <script src="./js/index.js"></script>
</body>
</html>