<?php
session_start(); 
require_once("dbconfig.php"); 

/* 페이징 시작 */ 
//페이지 get 변수가 있다면 받아오고, 없다면 1페이지를 보여준다. 
if(isset($_GET['page'])) { 
  $page = $_GET['page']; 
} else { 
  $page = 1; 
} 

/* 검색 시작 */ 

if(isset($_GET['searchColumn'])) { 
  $searchColumn = $_GET['searchColumn']; 
  $subString .= '&amp;searchColumn=' . $searchColumn; 
} 
if(isset($_GET['searchText'])) { 
  $searchText = $_GET['searchText']; 
  $subString .= '&amp;searchText=' . $searchText; 
} 

if(isset($searchColumn) && isset($searchText)) { 
  $searchSql = ' where ' . $searchColumn . ' like "%' . $searchText . '%"'; 
} else { 
  $searchSql = ''; 
} 

/* 검색 끝 */ 

$sql = 'select count(*) as cnt from board_trip' . $searchSql; 
$result = $db->query($sql); 
$row = $result->fetch_assoc(); 

$allPost = $row['cnt']; //전체 게시글의 수 

if(empty($allPost)) { 
  $emptyData = '<tr><td class="textCenter" colspan="5">글이 존재하지 않습니다.</td></tr>'; 
} else { 

$onePage = 15; // 한 페이지에 보여줄 게시글의 수. 
$allPage = ceil($allPost / $onePage); //전체 페이지의 수 

if($page < 1 && $page > $allPage) { 
  ?> 
  <script> 
  alert("존재하지 않는 페이지입니다."); 
  history.back(); 
  </script> 
  <?php 
  exit; 
} 

$oneSection = 10; //한번에 보여줄 총 페이지 개수(1 ~ 10, 11 ~ 20 ...) 
$currentSection = ceil($page / $oneSection); //현재 섹션 
$allSection = ceil($allPage / $oneSection); //전체 섹션의 수 

$firstPage = ($currentSection * $oneSection) - ($oneSection - 1); //현재 섹션의 처음 페이지

if($currentSection == $allSection) { 
$lastPage = $allPage; //현재 섹션이 마지막 섹션이라면 $allPage가 마지막 페이지가 된다. 
} else { 
$lastPage = $currentSection * $oneSection; //현재 섹션의 마지막 페이지 
} 

$prevPage = (($currentSection - 1) * $oneSection); //이전 페이지, 11~20일 때 이전을 누르면 10 페이지로 이동. 
$nextPage = (($currentSection + 1) * $oneSection) - ($oneSection - 1); //다음 페이지, 11~20일 때 다음을 누르면 21 페이지로 이동. 

$paging = '<ul>'; // 페이징을 저장할 변수 

//첫 페이지가 아니라면 처음 버튼을 생성 
if($page != 1) { 
  $paging .= '<li class="page page_start"><a href="AfterTrip.php?page=1' . $subString . '">처음</a></li>'; 
} 
//첫 섹션이 아니라면 이전 버튼을 생성 
if($currentSection != 1) { 
  $paging .= '<li class="page page_prev"><a href="AfterTrip.php?page=' . $prevPage . $subString . '">이전</a></li>'; 
} 

for($i = $firstPage; $i <= $lastPage; $i++) { 
  if($i == $page) { 
    $paging .= '<li class="page current">' . $i . '</li>'; 
  } else { 
    $paging .= '<li class="page"><a href="AfterTrip.php?page=' . $i . $subString . '">' . $i . '</a></li>'; 
  } 
} 

//마지막 섹션이 아니라면 다음 버튼을 생성 
if($currentSection != $allSection) { 
  $paging .= '<li class="page page_next"><a href="AfterTrip.php?page=' . $nextPage . $subString . '">다음</a></li>'; 
} 

//마지막 페이지가 아니라면 끝 버튼을 생성 
if($page != $allPage) { 
  $paging .= '<li class="page page_end"><a href="AfterTrip.php?page=' . $allPage . $subString . '">끝</a></li>'; 
} 
$paging .= '</ul>'; 

/* 페이징 끝 */ 


$currentLimit = ($onePage * $page) - $onePage; //몇 번째의 글부터 가져오는지 
$sqlLimit = ' limit ' . $currentLimit . ', ' . $onePage; //limit sql 구문 

$sql = 'select * from board_trip' . $searchSql . ' order by b_no desc' . $sqlLimit; //원하는 개수만큼 가져온다. (0번째부터 20번째까지 
  $result = $db->query($sql); 
} 
?> 

<!DOCTYPE html>
<html>
<head>
  <title>Between Day</title>

  <link href="https://googledrive.com/host/0BxmAw3HA4YGCfkpJRUw0RGNraDFnVzRFdjhaQnRFQ3BzZ00tRFZobGlKcmprb1hiSUFvZkE/nanumbarunpenr.css" rel='stylesheet' type='text/css'/>
  <link rel="stylesheet" type="text/css" href="StyleSheet3.css" />
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
      <table id="board"> 
        <caption>여행후기</caption> 
        <colgroup> 
        <col> 
        <col width="620"></col> 
        <col width="110"></col> 
        <col width="100"></col> 
        <col width="80"></col> 
      </col> 
    </colgroup> 

    <tr> 
      <th scope="col">번호</th> 
      <th scope="col">제목</th> 
      <th scope="col">글쓴이</th> 
      <th scope="col">날짜</th> 
      <th scope="col">조회수</th> 
    </tr> 

    <tbody> 
      <?php 
      if(isset($emptyData)) { 
        echo $emptyData; 
      } else { 
        while($row = $result->fetch_assoc()) 
        { 
          $datetime = explode(' ', $row['b_date']); 
          $date = $datetime[0]; 
          $time = $datetime[1]; 
          if($date == Date('Y-m-d')) 
            $row['b_date'] = $time; 
          else 
            $row['b_date'] = $date; 
          ?> 
          <tr> 
            <td id="no"><?php echo $row['b_no']?></td> 
            <td class="class"> 
              <a href="trip_view.php?bno=<?php echo $row['b_no']?>"><?php echo $row['b_title']?></a> 
              <td id="name"><?php echo $row['b_id']?></td> 
              <td id="date"><?php echo $row['b_date']?></td> 
              <td id="hit"><?php echo $row['b_hit']?></td> 
            </tr> 
            <?php 
          } 
        } 
        ?> 
      </tbody> 
    </table> 
    <?php if (isset($_SESSION['is_logged'])) { ?>
    <div class="btnSet" style="position: absolute;right: 7px;bottom: -16px;"> 
      <button><a href="trip_write.php" class="btnWrite_btn" style="text-decoration:none;">글쓰기</a> </button>
    </div> 
    <div class="paging" style="position: absolute;left: 22px;bottom: -32px;"> 
      <?php echo $paging ?> 
    </div> 
    <div class="searchBox" style="position: absolute;right: 67px;bottom: -16px;"> 
      <form action="AfterTrip.php" method="get"> 
        <select name="searchColumn"> 
          <option <?php echo $searchColumn=='b_title'?'selected="selected"':null?> value="b_title">제목</option> 
          <option <?php echo $searchColumn=='b_content'?'selected="selected"':null?> value="b_content">내용</option> 
          <option <?php echo $searchColumn=='b_id'?'selected="selected"':null?> value="b_id">작성자</option> 
        </select> 
        <input type="text" name="searchText" value="<?php echo isset($searchText)?$searchText:null?>"> 
        <button type="submit">검색</button> 
      </form> 
    </div>  <?php } else { ?>
    <div class="paging" style="position: absolute;left: 22px;bottom: -32px;"> 
      <?php echo $paging ?> 
    </div> 
    <div class="searchBox" style="position: absolute;right: 67px;bottom: -16px;"> 
      <form action="AfterTrip.php" method="get"> 
        <select name="searchColumn"> 
          <option <?php echo $searchColumn=='b_title'?'selected="selected"':null?> value="b_title">제목</option> 
          <option <?php echo $searchColumn=='b_content'?'selected="selected"':null?> value="b_content">내용</option> 
          <option <?php echo $searchColumn=='b_id'?'selected="selected"':null?> value="b_id">작성자</option> 
        </select> 
        <input type="text" name="searchText" value="<?php echo isset($searchText)?$searchText:null?>"> 
        <button type="submit">검색</button> 
      </form> 
    </div>  <?php } ?>
  </div> 
  


</body>
</html>