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

   <div id="section">
   <h3 style=" text-align: center; margin-top: 1.5px;">국내여행지</h3>
    <div id="Trip_info">
      <table id="info">
          <tr>
            <td >
              <div id="seoul">
              <img src="pic/seoul.jpg" />
              <span class="seoulinfo">
                <a>서울의 중심,서울의 상징이자 서울의 가장 아름다운 모습을 한눈에 내려다 볼 수 있는 곳!</a>
              </span>
                <br/>서울 남산
              </div>
            </td>
            
            <td>
              <div id="seoul2">
              <img src="pic/seoul2.jpg" />
                <span class="seoul2info">
                  <a>월드컵 상암경기장 근처 한공원내에 자리잡은 캠핑장!</a>
                </span><br/>서울 난지캠핑장
              </div>
            </td>
          </tr>
        
          <tr>
            <td>
              <div id="kyeonggi">
              <img src="pic/kyeonggi.jpg" />
                <span class="kyeonggiinfo">
                  <a>문화예술인들이 문화예술에 관한 담론과 창작 활동을 하기 위해 이룬 공동체마을!</a>
                </span><br/>파주 헤이리마을
              </div>
            </td>
            
            <td>
              <div id="chungcheong">
              <img src="pic/chungcheong.jpg" />
                <span class="chungcheonginfo">
                  <a>네덜란드식 가든센터를 본떠 조성한 국내 최대 규모의 실내 온실 식물원!</a>
                </span><br/>아산 세계꽃식물원
              </div>
            </td>
         </tr>
        
        <tr>
          <td >
            <div id="kangwon">
              <img src="pic/kangwon.jpg" />
              <span class="kangwoninfo">
                <a>우리나라의 유일한 양 목장으로 다양한 체험이 가능하다!</a>
              </span>
              <br/>대관령 양떼목장
            </div>
          </td>

          <td>
            <div id="kyeongsang">
              <img src="pic/kyeongsang.jpg" />
              <span class="kyeongsanginfo">
                <a>경주시내에 있는 역사 유적지 학생들의 수학여행장소로 제격이다!</a>
              </span><br/>경주 불국사
            </div>
          </td>
        </tr>
        
       
          <tr>
            <td>
              <div id="jeonla">
              <img src="pic/jeonla.jpg" />
                <span class="jeonlainfo">
                  <a>한옥이 800여채나 밀집되어있고 한옥의 아름다움을 감상 할 수 있을 뿐만 아니라 다양한 먹을 거리가 많다!</a>
                </span><br/>전주 한옥마을
                </div>
          </td>
            <td>
              <div id="jeju">
                <img src="pic/jeju.jpg" />
                <span class="jejuinfo">
                  <a>신양해수욕장에서 2km에 걸쳐 바다를 향해 길게 뻗어있는 섭지코지!</a>
                </span><br/>제주 섭지코지
              </div>
            </td>
          </tr>
        
        <tr>
          <td >
            <div id="seoul">
              <img src="pic/seoul3.jpg" />
              <span class="seoulinfo">
                <a>경복궁의 남문이자 궁성의 정문인 광화문은 외국인여행객들이 가장 많이 찾는 서울의 장소이다!
                </a>
              </span>
              <br/>서울 광화문
            </div>
          </td>

          <td>
            <div id="jeju3">
              <img src="pic/jeju3.jpg"/>
              <span class="jeju3info">
                <a>폭 12m, 높이 22m에서 떨어져 수심 20m의 호를 이루는 천지연 폭포는 천연기념물 제 27호이다!</a>
              </span><br/>제주 천지연 폭포
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div id="kyeonggi">
              <img src="pic/kyeonggi2.jpg" />
              <span class="kyeonggiinfo">
                <a>동양 최대의 인공호수공원으로 울창한 숲과 꽃 박람회가 개최되는 최고의 휴식명소!</a>
              </span><br/>일산 호수공원
            </div>
          </td>

          <td>
            <div id="chungcheong">
              <img src="pic/chungcheong2.jpg" />
              <span class="chungcheonginfo">
                <a>청정갯벌의 머드를 이용한 다양한 즐길거리들이 마련되어있다!</a>
              </span><br/>보령 대천해수욕장 머드축제
            </div>
          </td>
        </tr>

        <tr>
          <td >
            <div id="kangwon">
              <img src="pic/kangwon2.jpg"/>
              <span class="kangwoninfo">
                <a>
                  드라마 겨울연가의 촬영장소로도 유명한 메타세콰이아 길이 이국적인 멋을 풍긴다!
                  </a>
              </span>
              <br/>남이섬
            </div>
          </td>

          <td>
            <div id="kyeongsang">
              <img src="pic/kyeongsang2.jpg" />
              <span class="kyeongsanginfo">
                <a>거제도 곳곳이 자연이 빚은 아름다움으로 가득하지만 이름보다 더욱 아름다운 바람의 언덕을 놓치지 말자!</a>
              </span><br/>거제 바람의 언덕
            </div>
          </td>
        </tr>


        <tr>
          <td>
            <div id="jeonla">
              <img src="pic/jeonla2.jpg"/>
              <span class="jeonlainfo">
                <a>곡성역에서 가정역까지 섬진강 물길을 따라 10㎞ 구간을 달리는 증기기관차가 있는 곳!</a>
              </span><br/>섬진강 기차마을 
            </div>
          </td>
          <td>
            <div id="jeju">
              <img src="pic/jeju2.jpg"/>
              <span class="jejuinfo">
                <a>아름다운 해안 절경,해녀,제주 전통 밭 구조와 돌담, 돌무덤 등이 남아 있는 가장 제주다운 모습을 선사한다!
                  </a>
              </span><br/>제주 우도
            </div>
          </td>
        </tr>

       

        
      </table>
   
  </div>
  </div>
  <div id="footer">

  </div>

</div>

</body>
</html>