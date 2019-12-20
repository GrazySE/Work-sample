<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'Inloggad';
} else {
    $logged = 'Utloggad';
}
?>




<!DOCTYPE html>



<html lang="sv" >
<meta name="apple-mobile-web-app-capable" content="yes" charset="UTF-8">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">



<link rel="apple-touch-icon" href="apple-touch-icon.png" width="50px" height="50px">

<link rel="apple-touch-startup-image" href="apple-touch-icon.png">













        <link rel="stylesheet" href="styles/kandidat.css" />
 <script type="text/JavaScript" src="js/sha512.js"></script>
        <script type="text/JavaScript" src="js/forms.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




<header>

    <?php include("parts/header.php")?>
</header>







    <body>
       <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Fel användarnamn/lösenord!</p>';
        }
        ?>
        <form action="includes/process_login.php" method="post" name="login_form" class="formlog">
            <h1>Mail: </h1><input type="text" name="email" >
            <h1>Lösenord:</h1> <input type="password"
                             name="password"
                             id="password"/>
            <input type="button"
                   value="Login" id="button"
                   onclick="formhash(this.form, this.form.password);" />
        </form>

<?php
        if (login_check($mysqli) == true) {
                        echo '<p> ' . $logged . ' som ' . htmlentities($_SESSION['username']) . '.</p>';


        } else {
                        echo "<p class='logstatus'> $logged </p>";

                }
?>
    </body>


<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>




</html>


<style>

  header{

    position:fixed;
    z-index: 10;
	  width:100%;
top:0;
	  background-color: rgba(44, 125, 145, 0.3);
margin-left:-2%;
  }
  header img{

    width:5%;
    height:auto;
    z-index: 10;
margin-left:2%;
  }

  header h1{

  font-size:2vw;
    color:#2C7D91;
margin-left:5%;
        margin-top:-5%;
        z-index: 10;


  }
  
  
  
  header .logout{margin-left:80%;}
  
  
  
body{
margin-top:15%;


}




</style>
