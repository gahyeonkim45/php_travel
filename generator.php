<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Between Day</title>
  <link href="https://googledrive.com/host/0BxmAw3HA4YGCfkpJRUw0RGNraDFnVzRFdjhaQnRFQ3BzZ00tRFZobGlKcmprb1hiSUFvZkE/nanumbarunpenr.css" rel='stylesheet' type='text/css'/>
  <script src="ouical.js"></script>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="ouical_generator.css">
  
  <title>OuiCal - Calendar Embed Code Generator</title>
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
          <a href="generator.html"> 모의일정</a>
        </li>
      </ul>
    </div>
    <?php } ?>
    
    
    
    <div id="wrapper">
      <h2>Enter your event details</h2>

      <form id="calendar-generator">
        <label for="event-title">Title:</label>
        <input type="text" name="event-title" id="event-title">

        <label for="start-time">Start Time:</label>
        <input type="datetime-local" name="start-time" id="start-time">

        <label for="end-time">End Time:</label>
        <input type="datetime-local" name="end-time" id="end-time">

        <label for="event-address">Address:</label>
        <input type="text" name="event-address" id="event-address">

        <label for="event-description"></label>
        <textarea name="textarea" rows="10" cols="50" placeholder="Description" id="event-description"></textarea>

        

        <input type="submit" value="Generate Calendar" />
      </form>

      <h2>Your result will appear below</h2>

      <div id="live-example"></div>

    </div>
    
    <script src="ouical_generator.js"></script>
    
    
    
    

    <div id="footer">

    </div>
    

  </body>
  </html>