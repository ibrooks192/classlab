
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>Login</title>
  <style>
  legend { 
  text-align: center;
background-color: green;
  }
  body {
  background-color: green;
  }
  fieldset{
	    margin: auto;
	    text-align: left;
  background-color: red;
  }
 
  </style>
</head>
<body>
 <form id='login' action='login.php' method='post' accept-charset='UTF-8'>
<fieldset>
<legend><font size="6">Login Page</font></legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='username' >Username:</label>
<input type='text' name='username' id='username'  maxlength="50" style="width: 305px;"/> <br/><br/>
<label for='password' >Password:</label>
<input type='password' name='password' id='password' maxlength="50" style="width: 307px;"/>
<br/><br/>
<input type='submit' name='Submit' value='Press me...I dare you!' />
</fieldset>
</form>

<?php  
if(isset($_POST['Submit'])) 
{
     $username = $_POST['username'];
     $password = $_POST['password'];
      if($username == "Irving" && $password == "1234")  // username is  set to "Irving"  and Password   
         {                                   // is 1234 by default     
          $_SESSION['username']=$user;
         echo '<script type="text/javascript"> window.open("index.php","_self");</script>';            //  On Successful Login redirects to index.php
        }
        else
        {
            echo "Hey....invalid Username or Password";        
        }
}
 ?>
</body>
</html>