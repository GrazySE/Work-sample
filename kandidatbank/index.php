
<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';


sec_session_start();







?>

<!DOCTYPE html>



<html lang="sv" >
<meta name="apple-mobile-web-app-capable" content="yes" charset="UTF-8">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">



<link rel="apple-touch-icon" href="apple-touch-icon.png" width="50px" height="50px">

<link rel="apple-touch-startup-image" href="apple-touch-icon.png">








<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="styles/ifcstyle.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>






 <header>



    <?php include("parts/header.php")?>


    </header>




<body>
<?php if (login_check($mysqli) == true) : ?>





<?php
//delete if it stops working

include('includes/db_connect.php');

$result = mysqli_query($mysqli, "SELECT * FROM  kandidater where username= '{$_SESSION[ "username" ]}'" );





if ($result->num_rows > 0) {






    // output data of each row
    while($row = mysqli_fetch_array($result)){  //  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		echo "<div class='profilbild'>";

				echo "<img src='images/" . $row['target_file'] . "'";
		echo "</div>";


echo "<br>";
		echo "<div class='info'>";
				echo "<h3>Förnamn</h3><p>" . $row['firstname'] . "</p>";
				echo "<h3>Efternamn</h3><p>" . $row['lastname'] . "</p>";


echo "<h3>Mailadress</h3><p>" . $row['email'] . "</p>";
		echo "</div>";

		echo "<div class='profil'>";

echo "<h3>Presentation</h3><p>" . $row['presentation'] . "</p>";



echo "<h3>Yrkesområden</h3><p>" . $row['occupation'] . "</p>";

echo "<h3>Erfarenhet</h3><p>" . $row['experience'] . "</p>";

echo "<h3>Startdatum</h3><p>" . $row['expstart'] . "</p>";


echo "<h3>Utbildning</h3><p>" . $row['education'] . "</p>";

echo "<h3>Hobbys</h3><p>" . $row['hobby'] . "</p>";

echo "</div>";



	echo " <a href='edit_profile.php?id=" . $row['id'] . "' ><button class='button' >REDIGERA</button></a>";







	}

    }
?>



















<?php else : ?>
<br>
           <br>
           <br>
           <br>
            <p>
                <span class="error">Hoppsan.</span> Gå till <a href="login.php" class="log">inloggningssidan</a>.
            </p>
        <?php endif;
        ?>



</body>

<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>







</html>



<style>

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



body{
margin-top:15%;


}







	.profilbild img{
		width:150px;
		display: inline-block;
		padding-left:1em;
		margin-top:5%;
	}




	.info{
		margin-left:15%;
		margin-top:-15%;
		padding-left: 1em;
		line-height: 0.5;
	}

	 .info h3{

		font-size:1vw;


	}
.profil{
		display:inline-block;
		width:60%;
		padding-left: 1em;
		line-height: 0.5;
	}
	.button{

	margin-left:-30%;

	}

</style>
