<!DOCTYPE html>
<html>
<body>
<h1>Registration form </h1>
<form action="process.php" method="post">
First name: <input type="text" id="fname" name="fname"> 
<br><br>
Last name: <input type="text" id="lname"name="lname"> 
<br><br>
      Age: <input type="text" name="age"> 
<br><br>
Destination: <input type="radio" id="jp" name="destination" value="junior">
             <label for="jp">Junior Programmer</label>
  
             <input type="radio" id="sp" name="destination" value="senior">
             <label for="sp">Senior Programmer</label>
  
             <input type="radio" id="pl" name="destination" value="leader">
             <label for="pl">Project Lead</label> <br><br>
  
Preferred Lanuage: <input type="checkbox" id="choice1" name="choice" value="Java">Java
                   <input type="checkbox" id="choice2" name="choice" value="PHP">PHP
                   <input type="checkbox" id="choice3" name="choice" value="C++">C++
<br><br>
Email: <input type="text" name="email">
<br><br>
Password: <input type="text" name="password">
<br><br>
Please choose a file: <input type="file" id="myFile" name="filename">
<br><br>



<input type="submit" value="SUBMIT">
<input type="reset">
</form>
</body>
</html>