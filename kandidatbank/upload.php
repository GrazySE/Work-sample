<?php


include_once('includes/db_connect.php');
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]) ;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


$status = "";
if(isset($_POST['submit2']) || isset($_POST['new2'])&&$_POST['new2']==1  )
{

	
	
	
$id=$_REQUEST['id'];
$username=$_REQUEST['username'];

	
	
 $photo=($_FILES['fileToUpload']['name']); 







    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ;


	


$update="update kandidater set target_file='".$photo."' where username= '{$_SESSION[ "username" ]}'";
	
	
mysqli_query($mysqli, $update);
header("Location:index.php?username='{$_SESSION[ "username" ]}'");
	


    }

?>
