<style>
form {
  border: 3px solid #f1f1f1;
  width: 50%;
  float: middle;
  background-color: white;
  color: black;
  display: inline-block;
  text-align: left;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color: #4CAF50;
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
.reset-form, h1
{
    text-align:center;
}
</style>

<h1>Reset Password</h1>


<!-- i need a checker to echo errors-->
<?php
if(isset($_GET['error'])) {
    if(($_GET['error'] == "emptyfields")) {
        echo '<p class="signuperror"> Fill in all the fields!</p>';
    }
    else if($_GET['error'] == "nouser")
    {
        echo " <p> The user doesnt no exists </p>";
    }
}
?>
<div class = "reset-form" >
<form method = "POST" action = "forget/reset">
    E-mail: </br>
    <input type ="text" name="email"> </input> </br>
    New Password: </br>
    <input type = "text" name="newpassword"> </input> </br>
    Confirm Password: </br>
    <input type = "text" name="renewpassword"> </input> </br>
    <button type = "submit"> Change Password </button>
</form>
</div>
