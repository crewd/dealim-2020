<?php

$con = mysqli_connect("localhost", "newspaper321", "tlsanswl325!", "newspaper321") or die("My SQL���۽���");

$userID = $_POST['userID'];
$userName = $_POST['userName'];
$birthYear = $_POST['birthYear'];
$addr = $_POST['addr'];
$mobile1 = $_POST['mobile1'];
$mobile2 = $_POST['userID'];
$height = $_POST['height'];
$mDate = date("Y-m-j");

$sql ="
INSERT INTO userTBL VALUES ('".$userID."', '".$userName."', '".$birthYear."', '".$addr."', '".$mobile1."', '".$mobile2."', '".$height."', '".$mDate."')
";
$ret = mysqli_query($con, sql);

echo "<h1> �ű� ȸ�� �Է� ��� </h1>";
if($ret){
    echo"������ �� ���������� �Էµ�.";

}
else{
    echo "������ �Է� ����!!!"."<br>";
    echo "���� ���� :".mysqli_error($con);
}
mysqli_close($con);
echo "<br> <a href='main.html'> <--�ʱ� ȭ�� </a>";
?>