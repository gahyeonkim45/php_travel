<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Between Day</title>

  <link href="https://googledrive.com/host/0BxmAw3HA4YGCfkpJRUw0RGNraDFnVzRFdjhaQnRFQ3BzZ00tRFZobGlKcmprb1hiSUFvZkE/nanumbarunpenr.css" rel='stylesheet' type='text/css' />

  <link rel="stylesheet" type="text/css" href="StyleSheet1.css" />

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
  <ul id="category">
    <li>
      <a href="musical.php">뮤지컬</a>
    </li>
    <li>
      <a href="drama.php">연극</a>
    </li>
    <li>
      <a href="concert.php">콘서트</a>
    </li>
  </ul>


  <div id="section">
    <div id="caption">Musical</div>

    <div id="concert_info">
      <li>
        <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=64948">
          <img src="pic/phantom.gif" width="100px;" />
        </a>
      </br>
      팬텀</br>
      2015.04.28~2015.07.26</br>
      충무아트홀 대극장
    </li>
    <li>
      <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=76254">
        <img src="pic/spring.gif" width="100px;" />
      </a></br>
      봄날은 간다</br>
      2015.05.01.~2015.06.21</br>
      디큐브아트센터

    </li>

    <li>
      <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=75703">
        <img src="pic/urin.gif" width="100px;" />
      </a></br>
      유린타운</br>
      2015.05.17~2015.08.02</br>
      홍익대 대학로 아트센터


    </li>

    <li>
      <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=76852">
        <img src="pic/mrshow.gif" width="100px;" />
      </a></br>
      미스터 쇼</br>
      2015.05.29~2015.07.26</br>
      롯데카드아트센터 아트홀
    </li>

    <li>
      <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=74869">
        <img src="pic/cougar.gif" width="100px;" />
      </a></br>
      쿠거</br>
      2015.04.10~2015.07.26</br>
      충무아트홀 소극장 블루

    </li>

    <li>
      <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=74093">
        <img src="pic/nanta.gif" width="100px;" />
      </a></br>
      난타 - 대학로</br>
      2015.03.21~2015.06.14</br>
      대학로 티오엠 1관
    </li>

    <li>
      <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=75013">
        <img src="pic/duck.gif" width="100px;" />
      </a></br>
      덕혜옹주</br>
      2015.04.03~2015.06.28</br>
      대학로 SH 아트홀

    </li>

    <li>
      <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=73463">
        <img src="pic/door.gif" width="100px;" />
      </a></br>
      쓰루더도어</br>
      2015.03.31~2015.06.07</br>
      유니플렉스 1관(대극장)
    </li>

    <li>
      <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=78151">
        <img src="pic/lesmi.gif" width="100px;">
      </a></br>
      레미제라블 - 대구</br>
      2015.06.05~2015.06.06</br>
      대구 오페라하우스
    </li>
    <li>
      <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=77307">
        <img src="pic/gogh.gif" width="100px;">
      </a></br>
      빈센트 반 고흐</br>
      2015.06.06~2015.08.02</br>
      충무아트홀 중극장 블랙
    </li>
    <li>
      <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=75463">
        <img src="pic/dam.gif" width="100px;">
      </a></br>
      담배가게 아가씨</br>
      2015.04.01~2015.06.30</br>
      대학로 소리 아트홀 2관
    </li>
    <li>
      <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=20192">
        <img src="pic/drumcat.gif" width="100px;">
      </a></br>
      드럼캣 콘서트</br>
      2009.09.18~오픈런</br>
      명보아트홀 가온홀
    </li>
    <li>
      <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=23001">
        <img src="pic/mario.gif" width="100px;">
      </a></br>
      마리오네트</br>
      2011.05.05~2015.06.28</br>
      63아트홀
    </li>
    <li>
      <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=33961">
        <img src="pic/bibab.gif" width="100px;">
      </a></br>
      비밥</br>
      2012.03.20~오픈런</br>
      비밥 전용관
    </li>
    <li>
      <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=76801">
        <img src="pic/elisabeth.gif" width="100px;">
      </a></br>
      엘리자벳</br>
      2012.06.13~2015.09.06</br>
      블루스퀘어 삼성전자홀
    </li>
    <li>
      <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=76710">
        <img src="pic/chicago.gif" width="100px;">
      </a></br>
      시카고</br>
      2012.06.20~2015.08.08</br>
      국립극장 해오름극장
    </li>


  </div>



</div>

<div id="footer">

</div>
</div>

</body>
</html>