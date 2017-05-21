<!DOCTYPE html>
<html>
<head>
  <title>Between Day</title>
  <meta charset="UTF-8">
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

    <div id="section">
      <div class="login-card">
        <h1>Log-in</h1>
        <br/>
        <form name="login_form" method="post" action="login_ck.php">
          <input type="text" name="user_id" placeholder="UserID">
          <input type="password" name="user_pass" placeholder="Password">
          <input type="submit" name="login" class="login login-submit" value="login">
        </form>
      </div>
    </div>

    <div id="footer">

    </div>


  </body>
  </html>