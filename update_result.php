<?php
   $con=mysqli_connect("localhost", "newspaper321", "tlsanswl325!", "newspaper321") or die("MySQL ���� ���� !!");

   $userID = $_POST["userID"];
   $userName = $_POST["userName"];
   $birthYear = $_POST["birthYear"];
   $addr = $_POST["addr"];
   $mobile1 = $_POST["mobile1"];
   $mobile2 = $_POST["mobile2"];
   $height = $_POST["height"];   
   $mDate = $_POST["mDate"]; 
   
   $sql ="UPDATE userT SET userName='".$userName."', birthYear=".$birthYear;
   $sql = $sql.", addr='".$addr."', mobile1='".$mobile1."',mobile2='".$mobile2;
   $sql = $sql."', height=".$height.", mDate='".$mDate."' WHERE userID='".$userID."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> ȸ�� ���� ���� ��� </h1>";
   if($ret) {
	   echo "�����Ͱ� ���������� ������.";
   }
   else {
	   echo "������ ���� ����!!!"."<br>";
	   echo "���� ���� :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br> <a href='main.html'> <--�ʱ� ȭ��</a> ";
?>
