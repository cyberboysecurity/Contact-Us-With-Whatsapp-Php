<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<center><h2>Contact Form</h2></center>

<div class="container">
  <form action="submit.php" method="post" target="_blank">



	<label for="help">Issue:</label>
    <select name="help">
      <option value="None">None</option>	
      <option value="Technical Issue">Technical Issue</option>
      <option value="Warranty Issue">Warranty Issue</option>
      <option value="Others Help">Others Help</option>
    </select>



    <label for="fname">First Name</label>
    <input type="text"  name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text"  name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select  name="country">
      <option value="India">India</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea class="form-control" name="subject"  style="height:200px"></textarea>

  <center>  For Mobile Click On This Button <br> <br> <input type="submit" name="_submit" value="Submit"> </center> <br>
   <center>  For Desktop Click On This Button <br> <br> <input type="submit" name="_submit2" value="Submit2"> </center>
  </form>
</div>

</body>
</html>

