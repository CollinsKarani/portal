 <?php
  require_once('../connect.php');
   if(isset($_POST['upload'])){
       $form = $_POST["Form"];
       $teacher = $_POST["Name"];
       $descri = $_POST["Description"];
       $file = rand(1000,100000)."_".$_FILES['file']['name'];
      //$file = $_FILES['file']['name'];
       $file_loc = $_FILES['file']['tmp_name'];
       $file_size = $_FILES['file']['size'];
       $new_size =$file_size/1024;
       $file_type = $_FILES['file']['type'];
       $folder = "uploads/";
      if(move_uploaded_file($file_loc,$folder.$file)){
        $sql = mysqli_query($conn,"INSERT INTO tblresource (Form,Name,Description,file,type,size) VALUES (
        '$form','$teacher','$descri','$file','$file_type','$new_size')");
        mysqli_query($conn,$sql);
        echo "<script>alert('File Successfully Uploaded!!!'); window.location='assignment.php'</script>";
      }
      else {

          echo "<script>alert('Sorry!!!important An error occurred while trying to upload'); window.location='form-assignment.php'</script>";
      }

      }

      ?>
