<?php
	session_start();
	require_once ('inc/connect.php');

	if(isset($_POST['btn-login']))
	{

		$user_number = trim($_POST['AdmNo']);
	   	$user_password = trim($_POST['password']);
		
	  // $password = md5($user_password);
		
		try
		{

			$stmt = $conn->prepare("SELECT * FROM tblstudent WHERE AdmNo=:number");
			$stmt->execute(array(":number"=>$user_number));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
			
			if($row['AdmNo']==$user_password){
				
				echo "ok"; // log in
				$_SESSION['user_session'] = $row['AdmNo'];
                
			}
			else{

				echo "<strong>Sorry!!</strong> &nbsp; Wrong Details Entered."; // wrong details
			}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>