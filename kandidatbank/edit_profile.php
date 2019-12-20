<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';


sec_session_start();






?>

<?php if (login_check($mysqli) == true) : ?>














<?php
	include_once('db_connect.php');

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]) ;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


//$query = "SELECT * from kandidater where username= '{$_SESSION[ "username" ]}'"; 






 $photo=($_FILES['fileToUpload']['name']); 



 $id=$_REQUEST['id'];
$query = "SELECT * from kandidater where id='".$id."'";
$result = mysqli_query($mysqli, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);









?>


<!DOCTYPE html>



<html lang="sv" >






<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




 <header>

<?php include ('parts/header.php');
?>



    <title>Min profil</title>



    </header>

    <body>




     <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.6/tinymce.min.js"></script>

<script src=" https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.6/plugins/link/plugin.js"> </script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.6/plugins/link/plugin.min.js">

</script>














<?php

$status = "";
if(isset($_POST['submit'])  )
{

	
	
	
$id=$_REQUEST['id'];

	$presentation =$_REQUEST['presentation'];
  $occupation =$_REQUEST['occupation'];
  $experience =$_REQUEST['experience'];
  $education =$_REQUEST['education'];
  $hobby =$_REQUEST['hobby'];
	 $photo=($_FILES['fileToUpload']['name']); 

	$expstart=$_REQUEST['expstart'];
			
		
$username=$_REQUEST[ "username" ];	

	
$update="update kandidater set presentation='".$presentation."', occupation='".$occupation."', experience='".$experience."', expstart='".$expstart."', education='".$education."', hobby='".$hobby."' where username= '{$_SESSION[ "username" ]}'";
	
	
	
	
	

mysqli_query($mysqli, $update);
header("Location:index.php?username='{$_SESSION[ "username" ]}'");
	


}
	
	
	
	
	
	
	
	
	
	
	
	
	
if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){

	
	
	
	
	

	
			
		
$username=$_REQUEST[ "username" ];	

	
$update="update kandidater set presentation='".$presentation."', occupation='".$occupation."', experience='".$experience."', expstart='".$expstart."', education='".$education."', hobby='".$hobby."', target_file='".$photo."' where username= '{$_SESSION[ "username" ]}'";
	
	
	
	
	

mysqli_query($mysqli, $update);
header("Location:index.php?username='{$_SESSION[ "username" ]}'");
	


}

?>

<form name="form" id="form" class="form3" method="post" enctype="multipart/form-data" >
<input type="hidden" name="new" value="1" />
<input name="username" type="hidden" value="<?php echo $row['username'];?>" />


<h1>Profilbild</h1><img src="images/<?php echo $row['target_file'];?>" > 


	

<h1>Presentation</h1><textarea name="presentation"  form="form"> <?php echo $row['presentation'];?> </textarea>




<h1>Yrkesområden</h1>

<select name="occupation">
   <option value="Administration/kontor">Administration/Kontor</option>
   <option value="Försäljning">Försäljning</option>
   <option value="Industri, produktion & verkstad">Industri, produktion & verkstad</option>
   <option value="Kundtjänst, service & handel">Kundtjänst, service & handel</option>
   <option value="Lager, logistik & transport">Lager, logistik & transport</option>
   <option value="IT/Data">IT/Data</option>
   <option value="Media, kommunikation & marknad">Media, kommunikation & marknad</option> 
   <option value="Sjukvård & hälsa">Sjukvård & hälsa</option> 
   <option value="Teknik">Teknik</option> 
   <option value="Ekonomi, finans, lön">Ekonomi, finans, lön</option> 
   <option value="HR">HR</option>


   <option value="<?php echo $row['occupation'];?>" selected ><?php echo $row['occupation'];?></option>


  </select>
  <br><br>






  <div class="exp">

<h1>Erfarenhet</h1><textarea name="experience" form="form"><?php echo $row['experience'];?> </textarea>
<h3>Startdatum</h3><input type="date"form="form" name="expstart" value="<?php echo $row['expstart'];?>"><?php echo $row['expstart'];?>

</div>

<h1>Utbildning</h1><textarea name="education" form="form"><?php echo $row['education'];?> </textarea>
<h1>Hobbys</h1><textarea name="hobby" form="form"><?php echo $row['hobby'];?> </textarea>


<h1>profilbild</h1> 
		    <input type="file" style="border:0" name="fileToUpload" id="fileToUpload">


<input name="submit" type="submit" value="Uppdatera" id="button" />


</form>






<br /><br /><br /><br />


		
		
		
		
		
		
		
		
	








<?php else : ?>
<br><br>
            <p>
                <span class="error">Hoppsan.</span> Gå till <a href="index.php">inloggningssidan</a>.
            </p>
        <?php endif; ?>






</body>
</html>

<style>
	.form3{margin-top:25%;}
.form3 img{
		
		width:150px;
		
		
	}
	
	
	

header{

    position:fixed;
    z-index: 10;
    padding: 2em;
top:0;
	  background-color:aliceblue;
	  width:100%;
	  height:10%;
  }
  header img{

    width:12%;
    height:auto;
    z-index: 10;
padding:1em;
	  margin-top: -2%;
  }




  header h1{

  font-size:1vw;
    color:#0078ab;
margin-left:10%;
        margin-top:-10%;
        z-index: 10;

}

header .logout{ float:right;}
.exp h1{


}
.exp h3{

font-size:1vw;
display:inline-block;


}

	
</style>
