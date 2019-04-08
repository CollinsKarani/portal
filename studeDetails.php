<?php
session_start();
include ('../connect.php');
include ('../session.php');
	        date_default_timezone_set('Africa/Nairobi');
			$d=new DateTime();
			$dat=$d->format('d/m/y  h:i:s a');

   $sql = "SELECT * FROM tblstudent WHERE AdmNo='$session_id'" ;
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                    $admno=$row['AdmNo'];
                    $fullname=$row['FullName'];
                    $form=$row['Form'];
                    $class=$row['Class'];
                    $dorm=$row['House'];
                    $kcpe=$row['PriSchMarks'];
            }
            }
            }
          $query = "SELECT * FROM tblterm" ;
                         if($result = mysqli_query($conn, $query)){
                          if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                        $term= $row['Description'];

                        }}}
    $marks = "SELECT * FROM tblmarks WHERE AdmNo='$session_id'";
    if($result = mysqli_query($conn, $marks)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                    $subject= $row['Subject'];
                    $mark=$row['Marks'];
                    $grade= $row['Grade'];
                    $point= $row['Points'];
                    $mean= $row['MeanMarks'];
                    $position= $row['ClassPosition'];
                    $formPo= $row['FormPosition'];
            }}}


?>