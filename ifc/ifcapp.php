

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
   
   <img src="IFC.png">
    
    
	<a href = "https://ifcpraktik.hannahbanana.se/ifc/includes/logout.php"> <img src="https://ifcpraktik.hannahbanana.se/ifc/images/logout.png" style="width:3%; margin-top:-5%;margin-left:0; display:inline"></a>

    <title>IFC App</title>
    

    </header>



<body>

<?php if (login_check($mysqli) == true) : ?>



<?php

include('connect.php');

$result = mysqli_query($link, "SELECT * FROM  clients2");



?>

	

<form action="upload.php" enctype="multipart/form-data" method="POST"> 


   
		 <h1>namn </h1>
        <input type="text" 
               name="Name"id="Name">
	<h1> mail</h1>
        <input type="email"  name="Mail"id=Mail>
	<h1>födelsedatum</h1>
        <input type="date" 
               name="Birthdate"id="Birthdate">
	
               <br>
              
	<h1>profilbild</h1> 
		    <input type="file" style="border:0" name="fileToUpload" id="fileToUpload">


        <br>

        <input type="submit"
              
               value="SPARA" id="subbutton">
               
               
             
</form>
<div class="tablescroll">





<?php
$sql = "SELECT id, Birthdate, Name, Mail,image FROM clients2 WHERE Birthdate>1899-12-31";
$result = $link->query($sql);
		


if ($result->num_rows > 0) {
	



echo "<table><tr><th style='width:35%'>klientens namn</th><th style='width:45%'>mail</th><th></th> <th style='width:15%'></th> </tr>";
	
	
    // output data of each row
    while($row = mysqli_fetch_array($result)){  

    
		echo "<td style='height:5%'>" . $row['Name'] . "</td>";
				echo "<td style='height:5%'>" . $row['Mail'] . "</td>";
						



	echo"<td class='text-center' ><a href='#' id='" . $row['id'] . "' class='delete'><button class='deletikovski'>TA BORT</button></a>";
	
	echo " <td class='text-center'><a href='edit.php?id=" . $row['id'] . "' ><button class='w3-btn w3-round' >REDIGERA</button></a>";
		
		
	echo " <a href='clientView.php?id=".$row['id'] ." ".md5($row['id']) . "' target='_blank'> <button class='w3-btn w3-round' >MER INFO </button> </a> </td> ";

	echo "</tr>";
	
	}
	
    }
?>



</table>

</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- AJAX delete script -->

    <script type="text/javascript">

    $(document).ready(function(){

        $(".delete").click(function(){

            var element = $(this);
            var userid = element.attr("id");


            var info = 'id=' + userid;
            // alert(info);

            if(confirm("Är du säker på att du vill radera infon?")){

                $.ajax({

                      url: 'deleteuser.php',
                      type: 'post',
                      data: info, 
                      success: function(){
                        
                      }
                  });

                  $(this).parent().parent().fadeOut(500, function(){

                    $(this).remove();
                  });

            }

            return false;

        });

    });


    </script>











<?php else : ?>
<br>
           <br>
           <br>
           <br>
            <p>
                <span class="error">Hoppsan.</span> Gå till <a href="index.php" class="log">inloggningssidan</a>.
            </p>
        <?php endif; ?>



</body>




<footer>


    <p >Powered by <a href="http://www.hannahbanana.se"  target="_blank"> Hannah Banana Studios </a></p>
</footer>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>







</html>


