<?php


include_once('connect.php');
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]) ;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));









 $Name=$_POST['Name']; 
 $Mail=$_POST['Mail']; 
 $Birthdate=$_POST['Birthdate']; 
 $pic=($_FILES['fileToUpload']['name']); 
$Height=$_POST['Height']; 
 $Weight=$_POST['Weight']; 







// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	
	
	




	
	
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists

if (file_exists($target_file)) {
	

echo "<h1 style='color:rgba(87,163,130,1);'>Filen finns redan, välj en sparad bild i Ipad istället för att ta en ny som alltid uppladas som 'image.jpg'</h1><br>";
	        $uploadOk = 0;

}











// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<h1 style='color:rgba(87,163,130,1);'>Försök igen.</h1>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		mysqli_query($link, "insert into clients2 (Name, Mail, Birthdate, Height,Weight, target_file)values('$Name','$Mail','$Birthdate','$Height','$Weight','$pic')");
		header('Location:ifcapp.php');
		
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>