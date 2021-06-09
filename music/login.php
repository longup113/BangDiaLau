<style>
body{
    margin: 0;
    padding: 0;
    background: url(https://i.ytimg.com/vi/O2_OT8DVpbA/sddefault.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.login_box{
    width: 320px;
    height: 420px;
    background: darkgrey;
    color: white;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;

}.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50%);

}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login_box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login_box input{
    width: 100%;
    margin-bottom: 20px;
}
.login_box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid white;
    background: transparent;
    outline: none;
    height: 40px;
    color:whitesmoke;
    font-size: 16px;
}
.login_box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: pink;
    color: whitesmoke;
    font-size: 18px;
    border-radius: 20px;

}
.login_box input[type="submit"]:hover
{
    cursor: pointer;
    background-color: orange;
    color: black;
}
.login_box a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: whitesmokes;
}
.login_box a:hover
{
    color: orange;
}
</style>
<div class="login_box">
<img src="https://i1.sndcdn.com/avatars-opXWWfyzCOBY79oc-VIFOGw-t500x500.jpg" class="avatar" alt="">
  <form method = "post" action="">
    <table align="left" width="70%">
      <tr align="left">
        <td colspan="4"><h2>Login.</h2>
          <br />
          <span> Don't have account? <a href="register.php">Register Here</a><br />
          <br />
          </span></td>
      </tr>
      <tr>
        <td width="15%"><b>UserName:</b></td>
        <td colspan="3"><input type="text" name="username" required placeholder="username" /></td>
      </tr>
      <tr>
        <td width="15%"><b>Password:</b></td>
        <td colspan="3"><input type="password" name="password" required placeholder="Password" /></td>
      </tr>
      <tr align="left">
        <td></td>
        <td colspan="4"><input type="submit" name="login" value="Login" /></td>
      </tr>
    </table>
  </form>

</div>
<?php 
$con = new mysqli('localhost', 'root', '', 'music');
			if (!$con){
				echo "ket noi that bai";				
			}
if(isset($_POST['login'])){
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $result = mysqli_query($con, "select * from account where username='$username' AND password='$password' " );
  
  $check_login = mysqli_num_rows($result);
  
  $row_login = mysqli_fetch_array($result);
  
  if($check_login == 0){
   echo "<script>alert('Password or username is incorrect, please try again!')</script>";
   exit();
  }  
  if($check_login > 0){ 
  
  echo "<script>alert('You have logged in successfully !')</script>";
  echo "<script>window.open('http://localhost:8080/gaucon/music/','_self')</script>";
  
  }
}

?>
