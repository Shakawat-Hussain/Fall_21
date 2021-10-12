<?php include "control/results.php"; ?>

<!DOCTYPE html>
<html>
<body>
<h1>Registration form </h1>
<form action="" method="post">
First name: <input type="text" id="fname" name="fname"> <?php echo $validatename; ?>
<br>
Last name: <input type="text" id="lname"name="lname"> <?php echo $validatename; ?>
<br>
Age: <input type="text" name="age"> 
<br>
Destination: <input type="radio" id="jp" name="destination" value="junior">
             <label for="jp">Junior Programmer</label>
  
             <input type="radio" id="sp" name="destination" value="senior">
             <label for="sp">Senior Programmer</label>
  
             <input type="radio" id="pl" name="destination" value="leader">
             <label for="pl">Project Lead</label> <br>
  <?php echo $validateradio; ?><br>
Preferred Lanuage: <input type="checkbox" id="choice1" name="choice1" value="Java">Java
                   <input type="checkbox" id="choice2" name="choice2" value="PHP">PHP
                   <input type="checkbox" id="choice3" name="choice3" value="C++">C++
<br>
<?php echo $validatecheckbox; ?>

E-mail: <input type="text" name="email"> <?php echo $validateemail; ?><br>

Password: <input type="text" name="pwd"> <?php echo $validatepass; ?><br>




<?php echo $c1;?>

<?php echo $c2;?>

<?php echo $c3;?>
<br>



<input type="submit" value="SUBMIT">
<input type="reset" value="Reset">
</form>
</body>
</html>