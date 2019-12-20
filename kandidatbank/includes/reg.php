<?php
include_once ('includes/db_connect.php');
include_once ('includes/config.php');
 
$error_msg = "";






 
if (isset($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['email'], $_POST['p'])) {
    // Sanitize and validate the data passed in
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    
      $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    

  $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);

	

	
	
	
	
	
	
	
	
	
    
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">Ogiltig mailadress</p>';
    }
 
    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
    if (strlen($password) != 128) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Fel lösenordsformat.</p>';
    }
 
    // Username validity and password validity have been checked client side.
    // This should should be adequate as nobody gains any advantage from
    // breaking these rules.
    //
 
    $prep_stmt = "SELECT id FROM kandidater WHERE email = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
 
   // check existing email  
    if ($stmt) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
 
        if ($stmt->num_rows == 1) {
            // A user with this email address already exists
            $error_msg .= '<p class="error">Mailadress finns redan registrerad.</p>';
                        $stmt->close();
        }
    } else {
        $error_msg .= '<p class="error">Database error Line 39</p>';
                $stmt->close();
    }
 
    // check existing username
    $prep_stmt = "SELECT id FROM kandidater WHERE username = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
 
    if ($stmt) {
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
 
                if ($stmt->num_rows == 1) {
                        // A user with this username already exists
                        $error_msg .= '<p class="error">Användarnamn finns redan</p>';
                        $stmt->close();
                }
        } else {
                $error_msg .= '<p class="error">Database error line 55</p>';
                $stmt->close();
        }
 
    // TODO: 
    // We'll also have to account for the situation where the user doesn't have
    // rights to do registration, by checking what type of user is attempting to
    // perform the operation.
 
    if (empty($error_msg)) {
 
        // Create hashed password using the password_hash function.
        // This function salts it with a random salt and can be verified with
        // the password_verify function.
        $password = password_hash($password, PASSWORD_BCRYPT);
 
        // Insert the new user into the database 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO kandidater (username, email, password,firstname,lastname) VALUES (?, ?, ?,?,?)")) {
			
			
		
			

			
            $insert_stmt->bind_param('sssss', $username, $email, $password, $firstname, $lastname);
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location:error.php?err=Registration failure: INSERT');
            }
        }
        header('Location:login.php');
    }

}
?>

