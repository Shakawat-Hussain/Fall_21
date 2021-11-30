<!DOCTYPE html>
<html>
 <body>
<h1>Registraion Form</h1>
First name:<input  type="text" id="fname" name="fname" onkeyup="fname()"><br>
<p id="show"></p>
<br>
Last name: <input type="text" id="lname" name="lname" onkeyup="lname()"><br>
<p id="print"></p>
<br>
Age: <input type="text" name="age">
<br>
Designation: <input  type="radio"  name="destination" value="junior">
             <label for="jp">Junior Programmer</label>
  
             <input type="radio" id="sp" name="destination" value="senior">
             <label  for="sp">Senior Programmer</label>
  
             <input type="radio" id="pl" name="destination" value="leader">
             <label  for="pl">Project Lead</label> <br>
  <br>
  
Preferred Lanuage: <input type="checkbox" id="choice1" name="choice1" value="Java">Java
                   <input type="checkbox" id="choice2" name="choice2" value="PHP">PHP
                   <input type="checkbox" id="choice3" name="choice3" value="C++">C++

<br>
E-mail: <input type="text" id="email" name="email" onkeyup="email()"> <br>
<p id="showemail"></p>
<br>
Password: <input type="text" id="password" name="password" onkeyup="password()"> <br>
<p id="perror"></p>
<br>
<label for="myfile">Please choose a file:</label>
<input type="file" id="myfile" name="myfile"><br>
<script src="../JS/myjs.js"></script>
<input type="submit" name="SUBMIT"><br>
<br>
<input type="reset" name="Reset">
</form>
</body>
</html>