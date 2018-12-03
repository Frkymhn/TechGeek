<?php
if(isset($_POST['add']))
{
$connect=@mysql_connect("localhost","root","")or die("this error !!");
mysql_select_db("TechGeek") or die("database doesn't exist");
$name=addslashes($_POST['name']);
$email=addslashes($_POST['email']);
$username=addslashes($_POST['username']);
$password=addslashes($_POST['password']);
$sql="INSERT INTO users"."(name,email,username,password)"."VALUES('$name','$email','$username','$password')";
mysql_select_db('TechGeek');
$retval = mysql_query( $sql, $connect);

if(! $retval ) {
   die('Could not enter data: ' . mysql_error());
}
mysql_close($connect);}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SignUp/SignIn</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="./assets/style.css">
  
</head>
<body>
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="<?php $_PHP_SELF ?>" method="post">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>
      <form class="sign-up-htm" action="<?php $_PHP_SELF ?>" method="POST">
        <div class="group">
          <label for="name" class="label">Name</label>
          <input id="name" name="name" type="text" class="input">
        </div>
        <div class="group">
          <label for="email" class="label">Email</label>
          <input id="email" name="email" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input id="pass" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input name="add" type="submit" class="button" id="add" value="Sign Up">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div>
      </form>
    </div>
  </div>
</div>
  
  
</body>
</html>