<?php
   $con=mysqli_connect("localhost", "newspaper321", "tlsanswl325!", "newspaper321") or die("MySQL ���� ���� !!");
   
   $userID = $_POST["userID"];
     
   $sql ="DELETE FROM userT WHERE userID='".$userID."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> ȸ�� ���� ��� </h1>";
   if($ret) {
	   echo $userID." ȸ���� ���������� ������..";
   }
   else {
	   echo "������ ���� ����!!!"."<br>";
	   echo "���� ���� :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br><br> <a href='main.html'> <--�ʱ� ȭ��</a> ";
?>
