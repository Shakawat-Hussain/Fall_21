<!DOCTYPE html>
    <html>
        
        <body>
        <form name="login" action="../control/update.php" onsubmit="return alltrue()" method="POST"><br>
        <h1>Update Employee</h1>
        <input type="text"  name="eid" placeholder="Enter employee id"><br>
        <input type="submit" value="search" name="search">
        
        <br>
        <br>
        Name: <input type="text" id="name" name="name" placeholder="Enter name" onkeyup="ename()"><br>
        <p id="error1"></p>
        <br>
        Department: 
        <input type="text" id="dept" name="dept" placeholder="enter department" onkeyup="department()"><br>
        <br> <p id="error2"></p>
        Joining Date: 
        <input type="date" id="joined" name="joined"  onkeyup="joindate()"><br>
        <br><br> <p id="error3"></p>
        Salary: 
        <input type="text" id="sal" name="sal" placeholder="enter salary" onkeyup="Salary()"><br>
        <p id="error5"></p>
       <br>
        <p id="error4"></p>
        
       <input type="submit" value="submit" name="Update">
</form>
        <script src="../js/validate.js"></script>
        </body>

     </html>