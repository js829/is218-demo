<?php include ('view/header.php'); ?> 


<?php
//Gets the form submitted data

$register = $_GET['register'];

if($register == 1 && !empty($_POST)) // Checks if the form is empty
{


$username = $_POST['username'];

$password = $_POST['password'];

$fname = $_POST['fname'];

$lname = $_POST['lname'];

$birthday = $_POST['birthday'];

$num = $_POST['num'];

$gender = $_POST['gender'];


}

?>

<br/>
   <div style="float:right; "> <a class="btn" href="index.php" > <i class="icon-home icon-black"></i> Home </a>  </div>
   <br/>
<?php


 if(!$success) { 
 ?>
<form action="register.php?register=1" method="post" name="myForm" onsubmit="return(validate());">
  <fieldset>

    <legend>Sign Up Form</legend>
    <label>Username:</label>
    <input name="username" type="text" placeholder="Please enter your email address">
  <br/>
  <label>Password: </label>
    <input name="password" type="password" placeholder="enter desired password">
  <br/>
  <label>First Name:</label>
    <input name="fname" type="text" placeholder="enter your first name">
  <br/>
  <label>Last Name:</label>
    <input name="lname" type="text" placeholder="enter your last name">
  <br/>
  <label>Birthday </label>
    <input name="birthday" type="text" placeholder="mm/dd/yyyy">
  <br/>
   <label>Phone Number </label>
    <input name="num" type="text" placeholder="enter your phone number">
  <br/>
  <label>Gender </label>
    <select name="gender">
  <option>Male</option>
  <option>Female</option>
</select>
   
   

  <br/>
    <button type="submit" class="btn">Signup</button>
  </fieldset>
</form>
<?php } ?>



<?php include ('view/footer.php'); ?> 