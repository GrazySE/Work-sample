<?php
include_once 'includes/reg.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <header>

        <title> Registrering</title>





        <script type="text/JavaScript" src="js/sha512.js"></script>

<script type="text/JavaScript" src="js/forms.js"></script>
                        <link rel="stylesheet" href="styles/ifcstyle.css" />








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
<table>
        <form action="register.php"
                method="post"
                name="registration_form" id="registration_form" enctype="multipart/form-data">




                            <tr> <td> Förnamn:</td><td> <input type='text'
                name='firstname'
                id='firstname' /></td></tr>


                            <tr> <td> Efternamn:</td><td> <input type='text'
                name='lastname'
                id='lastname' /></td></tr>

            <tr> <td> Användarnamn:</td><td> <input type='text'
                name='username'
                id='username' /></td></tr>
             <tr> <td> Mail: </td><td> <input type="text" name="email" id="email" /> </td></tr>



              <tr> <td> Lösenord: </td><td>  <input type="password"
                             name="password"
                             id="password"/> </td></tr>
              <tr> <td> Bekräfta lösenord: </td><td> <input type="password"
                                     name="confirmpwd"
                                     id="confirmpwd" /> </td></tr>






  <tr> <td> <input type="button"
                   value="Registrera"
                   onclick="return regformhash(this.form,

                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd, this.form.firstname, this.form.lastname);" />  </td></tr>

        </form>
        </table>

<div class="login">
  <h1> Redan registrerad? Logga in  <a href="login.php">här</a> </h1>

</div>


    </body>
</html>
