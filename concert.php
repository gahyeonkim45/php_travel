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
         <div id="caption">Concert</div>
            <div id="concert_info">
                <li>
                    <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=76885">
                        <img src="pic/nell.gif" width="100px;" />
                    </a>
                    </br>
                    넬 콘서트</br>
                    2015.05.22~2015.06.07</br>
                    이화여자대학교 삼성홀
                </li>
                <li>
                    <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=77704">
                        <img src="pic/ong.gif" width="100px;" />
                    </a></br>
                    옹알스 쇼</br>
                    2015.06.02.~2015.06.14</br>
                    예술의전당 자유소극장

                </li>

                <li>
                    <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=74987">
                        <img src="pic/family.gif" width="100px;" />
                    </a></br>
                    나몰라패밀리 핫쇼2</br>
                    2015.03.27~오픈런</br>
                    대학로 굿씨어터

                </li>

                <li>
                    <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=29786">
                        <img src="pic/bin.gif" width="100px;" />
                    </a></br>
                    윤형빈 쇼 - 부산</br>
                    2011.11.05~2015.06.28</br>
                    윤형빈 소극장
                </li>

                <li>
                    <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=53971">
                        <img src="pic/game.gif" width="100px;" />
                    </a></br>
                    루키즈 게임</br>
                    2011.01.29~오픈런</br>
                    홍대 DGBD
                </li>

                <li>
                    <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=58364">
                        <img src="pic/kpop.gif" width="100px;" />
                    </a></br>
                    K-POP 홀로그램 콘서트</br>
                    2014.01.18~오픈런</br>
                    Klive(롯데피트인 동대문점 9층)
                </li>

                <li>
                    <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=72574">
                        <img src="pic/wowpop.gif" width="100px;" />
                    </a></br>
                    WAPOP(와팝)</br>
                    2015.01.15~2015.12.31</br>
                    어린이대공원내 와팝홀

                </li>

                <li>
                    <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=72853">
                        <img src="pic/mens.gif" width="100px;" />
                    </a></br>
                    철없는 세남자의 이야기</br>
                    2015.02.20~2015.06.26</br>
                    떼아뜨르 분도
                </li>

                <li>
                    <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=74503">
                        <img src="pic/muse.gif" width="100px;">
                    </a></br>
                    2015 뮤즈 인시티 페스티벌</br>
                    2015.06.06</br>
                    올림픽공원 88잔디마당
                </li>
                <li>
                    <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=76851">
                        <img src="pic/yoonha.gif" width="100px;">
                    </a></br>
                    윤하 소극장 콘서트</br>
                    2015.05.28~2015.06.07</br>
                    성수아트홀
                </li>
                <li>
                    <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=77770">
                        <img src="pic/epiton.gif" width="100px;">
                    </a></br>
                    에피톤 프로젝트 콘서트</br>
                    2015.06.19~2015.07.12</br>
                    성수아트홀
                </li>
                <li>
                    <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=78284">
                        <img src="pic/cm.gif" width="100px;">
                    </a></br>
                    10cm 콘서트</br>
                    2015.07.03~2015.07.05</br>
                    블루스퀘어 삼성카드홀
                </li>
                <li>
                    <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=76497">
                        <img src="pic/moon.gif" width="100px;">
                    </a></br>
                    옥상달빛&텐시러브 콘서트</br>
                    2015.07.03~2015.07.03</br>
                    의정부예술의전당 대극장
                </li>
                <li>
                    <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=78397">
                        <img src="pic/horan.gif" width="100px;">
                    </a></br>
                    호란콘서트</br>
                    2015.07.03</br>
                    벨로주
                </li>
                <li>
                    <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=78517">
                        <img src="pic/epikhigh.gif" width="100px;">
                    </a></br>
                    에픽하이 콘서트</br>
                    2015.07.31~2015.08.09</br>
                    서강대학교 메리홀
                </li>

                <li>
                    <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=75778">
                        <img src="pic/incheon.gif" width="100px;">
                    </a></br>
                    2015 인천 펜타포트 락 페스티벌</br>
                    2015.08.07~2015.08.09</br>
                    인천 송도국제도시 달빛축제공원
                </li>
            </div>



        </div>

        <div id="footer">

        </div>
    </div>

</body>
</html>