<style>
/*body {font-family: Arial, Helvetica, sans-serif;}*/
form {
  border: 3px solid #f1f1f1;
  width: 50%;
  float: middle;
  background: white;
  color:black;
  display: inline-block;
  text-align:left;
}
input[type=text], input[type=password] 
{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color: #551169;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
.forget{
  color: green;
}
.login-form, h1, .error
{
  text-align: center;
}

</style>
<h1> Login </h1>
<p class = "error">
  <?php
  if(isset($_GET['error']))
  {
    if($_GET['error']=="nouser")
    {
      echo "User doesn't Exist";
    }
    else if($_GET['error']=="wrongpass")
    {
      echo "wrong password";
    }
    else if($_GET['error']=="empty")
    {
      echo "fill in the blanks";
    }
  }
  ?>
</p>
<div class = "login-form">
<form name = "loginForm" onsubmit="return validateForm()" method = "POST"  action = "login/login">
    <!--Name: <input name="name"> </input> </br>-->
    E-mail: </br>
    <input type ="text" name="email" required> </input> </br>
    Password: </br>
    <input type = "password" name="password" required> </input> </br>
    <button type = "login-submit"> Login </button>

    Don't have an account <a href ="/signup"> sign up </a> now?
    </br>
  <a class = "forgot" href ="/forget"> Forgot your password? </a>
</form>
</div>


<script>
    function validateForm() 
    {
      //email
        var x = document.forms["loginForm"]["email"].value;
        //password
        var y = document.forms["loginForm"]["password"].value;

        if ((x == "") && (y ==""))
        {
            alert("Please Fill in your Credentials");
            return false;
        }
        else if (!empty(x)) && (y=="")
        {
          return true;
        }
        else if (!empty(y)) && (x =="")
        {
          return true;
        }
    }
</script>