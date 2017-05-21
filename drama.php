<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Between Day</title>

  <link href="https://googledrive.com/host/0BxmAw3HA4YGCfkpJRUw0RGNraDFnVzRFdjhaQnRFQ3BzZ00tRFZobGlKcmprb1hiSUFvZkE/nanumbarunpenr.css" rel='stylesheet' type='text/css'/>

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
    <div id="caption">연극</div>
    <div id="concert_info">
      <li>
        <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=37036">
          <img src="pic/jakup.gif" width="100px;"/>
        </a>
        <br/>
        작업의 정석
        <br/>
        2012/06/29 ~ 오픈런<br/>
        대학로 연극 순위아트홀 1관
      </li>
      
      <li>
        <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=15408">
          <img src="pic/cat.gif" width="100px;" />
        </a><br/>
        옥탑방 고양이<br/>
        2010/04/06 ~ 오픈런 <br/>
        대학로 틴틴홀

      </li>

      <li>
        <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=74636">
          <img src="pic/liar.gif" width="100px;" />
        </a><br/>
        라이어<br/>
        2015/03/16 ~ 2015/06/30<br/>
        해피씨어터

      </li>
      
      <li>
        <a href="http://www.playdb.co.kr/playdb/playdbDetail.asp?sReqPlayno=74962">
          <img src="pic/hiki.gif" width="100px;" />
        </a><br/>
        히키코모리 밖으로 나왔어 <br/>
        2015/05/26 ~ 2015/06/20  <br/>
        두산아트센터 Space111

      </li>

      <li>
        <a href="http://www.playdb.co.kr/playdb/playdbDetail.asp?sReqPlayno=74194">
          <img src="pic/butterfly.gif" width="100px;" />
        </a><br/>
        M.Butterfly  <br/>
        2015/05/26 ~ 2015/06/20  <br/>
        두산아트센터 연강홀

      </li>

      <li>
        <a href="http://www.playdb.co.kr/playdb/playdbDetail.asp?sReqPlayno=76616">
          <img src="pic/grandfather.gif" width="100px;" />
        </a><br/>
        연애의 목적<br/>
        2015.05.05 ~ 2015.08.02<br/>
        예그린씨어터
      </li>

      <li>
        <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=76858">
          <img src="pic/mobeom.gif" width="100px;" />
        </a><br/>
        모범생<br/>
        2015/05/08 ~ 2015/08/02 <br/>
        대학로 자유극장
      </li>

      <li>
        <a href="http://www.playdb.co.kr/playdb/PlaydbDetail.asp?sReqPlayNo=77754">
          <img src="pic/frozen.gif" width="100px;" />
        </a><br/>
        프로즌<br/>
        2015/06/09 ~ 2015/07/05 <br/>
        아르코예술극장 소극장
      </li>

      <li>
        <a href="http://www.playdb.co.kr/playdb/playdbDetail.asp?sReqPlayno=73293">
          <img src="pic/yeonaemok.gif" width="100px;" />
        </a><br/>
        나와 할아버지 <br/>
        2015.02.12 ~ 2015.06.28<br/>
        A아트홀(구.신연아트홀)
      </li>

      <li>
        <a href="http://www.playdb.co.kr/playdb/playdbDetail.asp?sReqPlayno=73293">
          <img src="pic/gnal.gif" width="100px;" />
        </a><br/>
        그날의 시선 <br/>
        2015/05/15 ~ 2015/06/14 <br/>
        유니플렉스 3관
      </li>

      <li>
        <a href="http://www.playdb.co.kr/playdb/playdbDetail.asp?sReqPlayno=72914">
          <img src="pic/power.gif" width="100px;" />
        </a><br/>
        더 파워<br/>
        2015/06/05 ~ 2015/06/21 <br/>
        명동예술극장
      </li>

      <li>
        <a href="http://www.playdb.co.kr/playdb/playdbDetail.asp?sReqPlayno=76144">
          <img src="pic/hyde.gif" width="100px;" />
        </a><br/>
        술과 눈물과 지킬앤하이드<br/>
        2015/05/01 ~ 2015/07/05  <br/>
        동숭아트센터 동숭홀
      </li>

      <li>
        <a href="http://www.playdb.co.kr/playdb/playdbDetail.asp?sReqPlayno=12800">
          <img src="pic/story.gif" width="100px;" />
        </a><br/>
        죽여주는 이야기 <br/>
        22009/10/01 ~ 오픈런 <br/>
        대학로 삼형제극장
      </li>

      <li>
        <a href="http://www.playdb.co.kr/playdb/playdbDetail.asp?sReqPlayno=67172">
          <img src="pic/day.gif" width="100px;" />
        </a><br/>
        극적인 하룻밤 <br/>
        2014/09/26 ~ 2015/06/30 <br/>
        바탕골 소극장
      </li>

      <li>
        <a href="http://www.playdb.co.kr/playdb/playdbDetail.asp?sReqPlayno=72882">
          <img src="pic/heomul.gif" width="100px;" />
        </a><br/>
        허물<br/>
        2015/06/02 ~ 2015/06/14 <br/>
        소극장 판
      </li>

      <li>
        <a href="http://www.playdb.co.kr/playdb/playdbDetail.asp?sReqPlayno=75583">
          <img src="pic/doduk.gif" width="100px;" />
        </a><br/>
        늘근도둑 이야기<br/>
        2015/04/08 ~ 오픈런 <br/>
        코엑스 아트홀
      </li>



    </div>

  </div>

  <div id="footer">

  </div>
</div>

</body>
</html>