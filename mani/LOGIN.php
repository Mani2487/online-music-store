<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
</head>
<style>
    body{
        background-image:url('image2/1.jpg');
     background-size: cover;
	 }
	 
	 .log
  {
  background-color: rgba(0,0,0,0.3);
  width: 30%;
  position: relative;
  top: 200px;
  border-radius: 20px;
  }
  
  table td
  {
  color: #fff;
  }
  
  input
  {
  border: 2px solid #000;
  background-color: #fff;
  color: #000;
  }
  h3
  {
  color: #fff;
  text-shadow: 2px 2px #0000ff;
  }
  input:hover
  {
  border: 2px solid #fff;
  background-color: #000;
  color: #fff;
  }
</style>
<script>  
  function validateform(){  
  var name=document.myform.name.value;  
  var password=document.myform.password.value;  
    
  if (name==null || name==""){  
    alert("Name can't be blank");  
    return false;  
  }else if(password.length<6){  
    alert("Password must be at least 6 characters long.");  
    return false;  
    }  
  }  
  
  </script>  
  
  
<body>
  <center>
  <div class="log">
  <h3>Login Here</h3>
  <form name="myform" method="post" action="process.php" >  
      <table>
        <tr>
          <td>Username:</td>
          <td><input type="text" name="name" placeholder="Enter name Here"></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password" placeholder="Enter Password Here"></td>
        </tr>
        
        <tr>
           <td><input type="submit" name="submit" value="Login"></td>
           <td><p>Not registered yet? <a href="REG.php">Register</a></p></td>
        </tr>
      </table>

  </form>
  </div>
  </center>
</body>
</html>