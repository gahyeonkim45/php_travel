<?php
session_start();
require_once("dbconfig.php");
$bno = $_GET['bno'];
if(!empty($bNo) && empty($_COOKIE['board_free_' . $bNo])) {
	$sql = 'update board_free set b_hit = b_hit + 1 where b_no = ' . $bNo;
	$result = $db->query($sql); 
	if(empty($result)) {
		?>
		<script>
		alert('오류가 발생했습니다.');
		history.back();
		</script>
		<?php 
	} else {
		setcookie('board_free' . $bNo, TRUE, time() + (60 * 60 * 24), '/');
	}
}
$sql = 'select b_title, b_content, b_date, b_hit, b_id from board_free where b_no = ' . $bno;
$result = $db->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head> 
	<title>Between Day</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<link href="https://googledrive.com/host/0BxmAw3HA4YGCfkpJRUw0RGNraDFnVzRFdjhaQnRFQ3BzZ00tRFZobGlKcmprb1hiSUFvZkE/nanumbarunpenr.css" rel='stylesheet' type='text/css'/> 
	<link rel="stylesheet" type="text/css" href="concert.css" /> 

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
    <article class="boardArticle2">
     <h3>View</h3>
     <div id="boardView">
      <h3 id="boardTitle"><?php echo $row['b_title']?></h3>
      <div id="boardInfo">
       <span id="boardID">작성자: <?php echo $row['b_id']?></span>
       <span id="boardDate">작성일: <?php echo $row['b_date']?></span>
       <span id="boardHit">조회: <?php echo $row['b_hit']?></span>
     </div>
     <div class="btnSet">
       <a href="write.php?bno=<?php echo $bno?>">수정</a>
       <a href="AfterConcert.php">목록</a>
     </div>
     <div id="boardContent"><?php echo $row['b_content']?></div>
   </div>
 </article>
</body>
</html>