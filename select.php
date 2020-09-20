<!DOCTYPE html>
<html>
<head>
   <title>회원 검색 결과</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<?php
   $con=mysqli_connect("localhost", "newspaper321", "tlsanswl325!", "newspaper321") or die("MySQL ???? ???? !!");

   $sql ="SELECT * FROM userT";
 
   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   $count = mysqli_num_rows($ret);
   }
   else {
	   echo "userT 오류!!!"."<br>";
	   echo "에러 :".mysqli_error($con);
	   exit();
   } 
   
   echo "<h1> 회원 검색 결과 </h1>";
   echo "<div class='table-responsive'>";
   echo "<TABLE border=1 id='tablePreview' class='table table-hover table-bordered'>";
   echo "<TR>";
   echo "<TH>아이디</TH><TH>이름</TH><TH>출생년도</TH><TH>지역</TH><TH>국번</TH>";
   echo "<TH>전화번호</TH><TH>키</TH><TH>가입일</TH><TH>수정</TH><TH>삭제</TH>";
   echo "</TR>";
   
   while($row = mysqli_fetch_array($ret)) {
	  echo "<TR>";
	  echo "<TD>", $row['userID'], "</TD>";
	  echo "<TD>", $row['userName'], "</TD>";
	  echo "<TD>", $row['birthYear'], "</TD>";
	  echo "<TD>", $row['addr'], "</TD>";
	  echo "<TD>", $row['mobile1'], "</TD>";
	  echo "<TD>", $row['mobile2'], "</TD>";
	  echo "<TD>", $row['height'], "</TD>";
	  echo "<TD>", $row['mDate'], "</TD>";
	  echo "<TD>", "<a href='update.php?userID=", $row['userID'], "'>수정</a></TD>";
	  echo "<TD>", "<a href='delete.php?userID=", $row['userID'], "'>삭제</a></TD>";
	  echo "</TR>";	  
   }   
   mysqli_close($con);
   echo "</TABLE>"; 
   echo "</div>";
   echo "<br> <a href='main.html'> <--초기화면</a> ";
?>
</body>
</html>


