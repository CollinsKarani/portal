<?php
 include_once ('inc/connect.php');
 //include_once ('inc/session.php');
//$stmt = $conn->prepare("SELECT * FROM tblfeestructure WHERE AdmissionNo=:uid");
//$stmt->execute(array(":uid"=>$_SESSION['user_session']));
//$stmt->execute();
//$rw=$stmt->fetch(PDO::FETCH_ASSOC);


//$stmt = $conn->prepare("SELECT * FROM tblupdate WHERE AdmNo=:uid");
//$stmt->execute(array(":uid"=>$_SESSION['user_session']));
//$update=$stmt->fetch(PDO::FETCH_ASSOC);

 $result = $conn ->prepare("SELECT * FROM tblmarkstable WHERE AdmNo=:uid AND ExamCode='ENDT' AND Term='1-2018'");
 $result ->execute(array(":uid"=>$_SESSION['user_session']));
$marks=$result->fetch(PDO::FETCH_ASSOC);
?>