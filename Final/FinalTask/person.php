<?php

include('updatedb.php');
include('updatecheck.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Person details</title>


<script>
functiom validationForm() {
  var name = document.getElementByID("name").value;
  if(name== "" ) {
    alert (" Name  INVALID");
    return false;
  }
}
</script>
</head>
<body>
<script src="jsvalidation.js"></script>
  <div class>

    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
      <tr>
      <table align="center">
        <td>Enter ID to Search</td> 

        <td><input type="text" name="id"></td>
        <td><input style="text" type="submit" name="Search" value="Search"/>
        
        <br>
      </tr>
      <div>
        <br><br>
      </div>
  				

  					<tr>
             
  						<td>Name</td>
  						<td><input type="text" name="name" placeholder="Give your name"</td>
  					</tr>
            <tr>
  						<td>Address</td>
  						<td><input type="text" name="address" placeholder="Give your address" </td>
  					</tr>
  					<tr>
  						<td>Email</td>
  						<td><input type="text" name="email" placeholder="Give your email"</td>
  					</tr>

  					<tr>
  						<td>Password</td>
  						<td><input type="password" name="password" placeholder="Give your password"</td>
  					</tr>
            <tr>
  						<td>Telephone</td>
  						<td><input type="number" name="telephone" placeholder="Give your telephone" </td>
  					</tr>
  						<tr>
  							
                <tr>
                  <td> Superpowers </td>
                  <td><input type="text" name="super" placeholder="Give your Superpower Name"</td>
                </tr>
  						</tr>



              <tr>
                <td></td>
                <td><input style="text" type="submit" name="Save" value="Save"/>

                <input type="reset" value="Cancel"></td>
              </tr>
            </table>
          </form>
    </div>


    </body>
    </html>


    
