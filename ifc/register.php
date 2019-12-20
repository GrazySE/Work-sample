<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>IFCAPP Registrering</title>
        
        
        
        
        
        <script type="text/JavaScript" src="js/sha512.js"></script> 

<script type="text/JavaScript" src="js/forms.js"></script>
                        <link rel="stylesheet" href="styles/ifcstyle.css" />

    </head>
    
    
    
     <header>
   
   <img src="IFC.png" style="width:5%;height:auto">
    
    


    
    

    </header>
    
    
    
    <body>
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <h1>Registrera här</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <ul>
            <li>Användarnamn får bara innehålla siffror, bokstäver och understreck</li>
            <li>Ange fullständig mailadress</li>
            <li>Lösenord ska innehålla minst 6 tecken</li>
            <li>Lösenord ska innehålla minst:
                <ul>
                    <li>en versal (A..Z)</li>
                    <li>en gemen (a..z)</li>
                    <li>en siffra (0..9)</li>
                </ul>
            </li>
            <li>Ditt lösenord och lösenordsbekräftelse ska matcha varandra</li>
        </ul>
        <form action="register.php" 
                method="post" 
                name="registration_form" id="registration_form">
            Användarnamn: <input type='text' 
                name='username' 
                id='username' /><br>
            Mail: <input type="text" name="email" id="email" /><br>
            Lösenord: <input type="password"
                             name="password" 
                             id="password"/><br>
            Bekräfta lösenord: <input type="password" 
                                     name="confirmpwd" 
                                     id="confirmpwd" /><br>
            <input type="button" 
                   value="Registrera" 
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" /> 
        </form>
        <p>Tillbaka till <a href="http://ifcpraktik.hannahbanana.se/ifc/index.php">inloggningssida</a>.</p>
    </body>
</html>