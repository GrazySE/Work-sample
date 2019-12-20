
 <?php
session_start();
require_once('config.php');
if(isset($_POST) & !empty($_POST)){
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
	$result = mysqli_query($db, $sql);
	$count = mysqli_num_rows($result);
	if($count == 1){
		$_SESSION['username'] = $username;
	}else{
		$fmsg = "Fel lösenord/användarnamn";
	}
}
if(isset($_SESSION['username'])){
	    $smsg= "Välkommen";
	header('Location:index.php');

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Inloggning</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	   <link rel="stylesheet" href="styles/ifcstyle.css">


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

</head>
<body>
<div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Logga in</h2>
        <div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">@</span>
		  <input type="text" name="username" class="form-control" placeholder="Användarnamn" required>
		</div>
        <label for="inputPassword" class="sr-only">Lösenord</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Lösenord" required>
        <button type="submit">Logga in</button>
		  <button class='w3-btn w3-round'><a href="register.php">Registrera</button></a>
      </form>
</div>
</body>
</html>