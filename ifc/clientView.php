
<?php
	include_once('connect.php');



 $id=$_REQUEST['id'];
$query = "SELECT * from clients2 where id='".$id."'"; 
$result = mysqli_query($link, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);








?>


<!DOCTYPE html>



<html lang="sv" >
<meta name="apple-mobile-web-app-capable" content="yes" charset="UTF-8">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">



<link rel="apple-touch-icon" href="apple-touch-icon.png" width="50px" height="50px">

<link rel="apple-touch-startup-image" href="apple-touch-icon.png">









<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://ifcpraktik.hannahbanana.se/ifc/styles/ifcstyle.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
   


 <header style="position:absolute">
 
 
    
 
	<a href="https://www.ifcskurup.se/" target="_blank"> <img src="IFC.png">  </a>
<div class="youtubelink">

    	
    	    	
    	    	    	    	<a href="https://www.youtube.com/channel/UCSjKMnXseeRtkrvaYT1xzkA" target="_blank" class="youtubelink">Övningsbank </a>
</div>

    <title>IFC App</title>
    
	

    </header>

    <body>
    
    
    
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.6/tinymce.min.js"></script>

<script src=" https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.6/plugins/link/plugin.js"> </script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.6/plugins/link/plugin.min.js">

</script>

	
	
	


    
  
  
  
    




<?php
	

	
$id=$_REQUEST['id'];
$Birthdate = date("Y-m-d H:i:s");
	$Birthdate =$_REQUEST['Birthdate'];

$Name =$_REQUEST['Name'];
$Mail =$_REQUEST['Mail'];
	

	$plan1 =$_REQUEST['plan1'];

		$plan2 =$_REQUEST['plan2'];
		$plan3 =$_REQUEST['plan3'];
	$memo =$_REQUEST['memo'];
		$stats =$_REQUEST['stats'];
	



	

?>


	

	

<form name="form" id="form" class="form3" method="post" > 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />


 		<div class="editimage">
  		<img src="https://ifcpraktik.hannahbanana.se/ifc/images/<?php echo $row['target_file'];?>";>
</div>

<h1>födelsedatum</h1><p><?php echo $row['Birthdate'];?></p>

<h1>namn</h1><p><?php echo $row['Name'];?></p>

<h1>mail</h1><p><?php echo $row['Mail'];?></p>

<br>
<br>





</form>
	



	    <div class="scrollis" style="overflow-y:visible"  >


<div class="tab">
    <button class="tablinks" onclick="openPlan(event, 'Plan A')">Plan A</button>
    <button class="tablinks" onclick="openPlan(event, 'Plan B')">Plan B</button>
    <button class="tablinks" onclick="openPlan(event, 'Plan C')">Plan C</button>
    <button class="tablinks" onclick="openPlan(event, 'Memo')">Anteckningar</button>
    <button class="tablinks" onclick="openPlan(event, 'Stats')">Stats</button>


    <div id="Plan A" class="tabcontent">
        <textarea name="plan1" form="form" contenteditable="false"><?php echo $row['plan1'];?> </textarea>

    </div>

    <div id="Plan B" class="tabcontent">
        <textarea name="plan2" form="form" contenteditable="false"><?php echo $row['plan2'];?></textarea>

    </div>

    <div id="Plan C" class="tabcontent">
        <textarea name="plan3" form="form" contenteditable="false"><?php echo $row['plan3'];?></textarea>

    </div>

    <div id="Memo" class="tabcontent">
        <textarea name="memo" form="form" contenteditable="false" ><?php echo $row['memo'];?></textarea>

    </div>


    <div id="Stats" class="tabcontent">
        <textarea name="stats" form="form" contenteditable="false"><?php echo $row['stats'];?></textarea>

	
</div>



	</div>
		
		
	</div>
		
		
		





<br /><br /><br /><br />










</body>
</html>








	








<script>

    function openPlan(evt, planName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(planName).style.display = "inline-block";
        evt.currentTarget.className += " active";
    }
</script>






<footer>


    <p >Powered by <a href="http://www.hannahbanana.se" target="_blank"> Hannah Banana Studios </a></p>
    
</footer>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>







