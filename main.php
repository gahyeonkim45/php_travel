<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Between Day</title>

  <link href="https://googledrive.com/host/0BxmAw3HA4YGCfkpJRUw0RGNraDFnVzRFdjhaQnRFQ3BzZ00tRFZobGlKcmprb1hiSUFvZkE/nanumbarunpenr.css" rel='stylesheet' type='text/css'/>
  <link rel="stylesheet" type="text/css" href="Stylesheet.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/modernizr.custom.04022.js"></script>
</head>
<body>
  <div id="all">
    <div id="header">
      Between Day
    </div>

    <?php if (isset($_SESSION['is_logged'])) { ?>
    <div id="navi">
      <ul>
        <li>
          <a href="main.php">홈</a>
        </li>
        <li>
          <a href="join.php"> 회원가입</a>
        </li>
        <li>
          <a href="logout.php">로그아웃</a>
        </li>
        <li>
          <a href="#"> 공연정보</a>
          <ul>
            <li>
              <a href="concert.php"> 공연</a>
            </li>
            <li>
              <a href="AfterConcert.php"> 공연후기 </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#"> 여행정보 </a>
          <ul>
            <li>
              <a href="TripPlace.php"> 관광지</a>
            </li>
           
            <li>
              <a href="AfterTrip.php"> 여행후기 </a>
            </li>

          </ul>
        </li>
        <li>
          <a href="generator.php"> 모의일정</a>
        </li>
      </ul>
    </div>
    <?php } else { ?>
    <div id="navi">
      <ul>
        <li>
          <a href="main.php">홈</a>
        </li>
        <li>
          <a href="join.php"> 회원가입</a>
        </li>
        <li>
          <a href="login.php">로그인</a>
        </li>
        <li>
          <a href="#"> 공연정보</a>
          <ul>
            <li>
              <a href="concert.php"> 공연</a>
            </li>
            <li>
              <a href="AfterConcert.php"> 공연후기 </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#"> 여행정보 </a>
          <ul>
            <li>
              <a href="TripPlace.php"> 관광지</a>
            </li>
            
            <li>
              <a href="AfterTrip.php"> 여행후기 </a>
            </li>

          </ul>
        </li>
        <li>
          <a href="generator.php"> 모의일정</a>
        </li>
      </ul>
    </div>
    <?php } ?>

    <div id="section">

      <div class="sp-slideshow">

        <input id="button-1" type="radio" name="radio-set" class="sp-selector-1" checked="checked" />
        <label for="button-1" class="button-label-1"></label>

        <input id="button-2" type="radio" name="radio-set" class="sp-selector-2" />
        <label for="button-2" class="button-label-2"></label>

        <input id="button-3" type="radio" name="radio-set" class="sp-selector-3" />
        <label for="button-3" class="button-label-3"></label>

        <input id="button-4" type="radio" name="radio-set" class="sp-selector-4" />
        <label for="button-4" class="button-label-4"></label>

        <input id="button-5" type="radio" name="radio-set" class="sp-selector-5" />
        <label for="button-5" class="button-label-5"></label>

        <label for="button-1" class="sp-arrow sp-a1"></label>
        <label for="button-2" class="sp-arrow sp-a2"></label>
        <label for="button-3" class="sp-arrow sp-a3"></label>
        <label for="button-4" class="sp-arrow sp-a4"></label>
        <label for="button-5" class="sp-arrow sp-a5"></label>

        <div class="sp-content">
          <div class="sp-parallax-bg"></div>
          <ul class="sp-slider clearfix">
            <li>
              <img src="pic/seoul.jpg" alt="image01" />
            </li>
            <li>
              <img src="pic/jeju.jpg" alt="image02" />
            </li>
            <li>
              <img src="pic/팬텀.jpg" alt="image03" />
            </li>
            <li>
              <img src="pic/dam.gif" alt="image04" />
            </li>
            <li>
              <img src="pic/kangwon.jpg" alt="image05" />
            </li>
          </ul>
        </div>
      </div>

    </div>

    <div id="footer">

    </div>
  </div>

</body>
</html>