<!DOCTYPE html>
<html>
<head>
   <title>ȸ�� �˻� ���</title>
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
	   echo "userT ����!!!"."<br>";
	   echo "���� :".mysqli_error($con);
	   exit();
   } 
   
   echo "<h1> ȸ�� �˻� ��� </h1>";
   echo "<div class='table-responsive'>";
   echo "<TABLE border=1 id='tablePreview' class='table table-hover table-bordered'>";
   echo "<TR>";
   echo "<TH>���̵�</TH><TH>�̸�</TH><TH>����⵵</TH><TH>����</TH><TH>����</TH>";
   echo "<TH>��ȭ��ȣ</TH><TH>Ű</TH><TH>������</TH><TH>����</TH><TH>����</TH>";
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
	  echo "<TD>", "<a href='update.php?userID=", $row['userID'], "'>����</a></TD>";
	  echo "<TD>", "<a href='delete.php?userID=", $row['userID'], "'>����</a></TD>";
	  echo "</TR>";	  
   }   
   mysqli_close($con);
   echo "</TABLE>"; 
   echo "</div>";
   echo "<br> <a href='main.html'> <--�ʱ�ȭ��</a> ";
?>
</body>
</html>


