<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
</head>
<script>
  function validateForm(){
      let x = document.forms["myForm"]["username","Email"].value;
      if (x=="") {
          alert("Name is empty");
          return false;
      }   
  }
</script>
 <link rel="stylesheet" href="main.css">
<body>
  <form action="function.php" method="post" name="myForm" onsubmit="return validateForm()">
  <div>
    <div class="container">
        <div class="navbar"><br><br>
      <a href="login.php"  class="navbtn2">login</a>
        <a href="#Register form"  class="navbtn3">Register Form</a>
        <div class="GroBtn"><br/><br><br>
 <form action="function.php" method="POST">
  <table>
   <tr>
    <td>Name :</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" required></td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
</tr>
  </table>
  <table>
  <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
    <table>
      <tr>
    <a href="login.php"><p class="GrpBtn2">u have already account/logIn</p></a>
      </tr>
    </table>
   </tr>
  </table>
 </form>
      </div>
      </div>
      </div>
</body>
</html>
