<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
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
function log(){
var user=document.getElementById("user").value;
var user_pass=document.getElementById("user_pas").value;
var mail=document.getElementById("mail").value;
var gender=document.getElementById("gender").value;
var mobile=document.getElementById("mobile").value;
if(user!="" && user_pass!="" && mail!="" && gender!="" && mobile!="" && /\S+@\S+\.\S+/.test(mail) && /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/.test(user_pass))
{
	alert("registered successfull");
}
else
{
	alert("registered unsuccessfull");
}
}
</script>
</head>

<body>
  <center>
  <div class="log">
  <h3>Register Here</h3>
  <form action="process.php" method="post">
      <table>
        <tr>
          <td>Username:</td>
          <td><input type="text" name="user" id="user" placeholder="Enter name Here"></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="user_pass" id="user_pas" placeholder="Enter Password Here"></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="email" name="mail" id="mail" placeholder="Enter Email Here"></td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td>
		  <select name="gender" id="gender">
		  <option value="male">Male</option>
		  <option value="female">Female</option>
		  </select>
          </td>
        </tr>
        <tr>
          <td>Phone:</td>
          <td>
            <select name="India">
                <option value="+91">+91</option>
            </select>
            <input type="number" id="mobile" name="mob_digits" placeholder="63******">
          </td>
        </tr>
        <tr>
           <td><input type="submit" name="submit" value="submit"></td>
           <td><p>Already a user? <a href="LOGIN.php">Login Here</a></p></td>
        </tr>
      </table>
  </form>
  </div>
  </center>
</body>
</html>