<style>
form {
  border: 3px solid #f1f1f1;
  width: 50%;
  float: middle;
  background-color: white;
  color: black;
  display: inline-block;
  text-align:left;
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

.signupform, h1, .signuperror
{
    text-align:center;
    /*
    position:relative;
    left: 20%;
    */
}

.RegistrationTitle {
    /*
    position: relative;
    left: 40%;
    */
}
</style>

<h1 class = "RegistrationTitle"> Registration Form</h1>
</br>
<?php
if (isset($_GET['error'])) {
    if(($_GET['error'] == "emptyfields")) {
        echo' <p class="signuperror"> Fill in all fields!</p>';
    }
    else if ($_GET['error'] == "invalidmailusername") {
        echo' <p class="signuperror"> Invalid username and email!</p>';
    }
    else if($_GET['error'] == "invalidusername"){
        echo' <p class="signuperror"> Invalid username!</p>';
    }
    else if($_GET['error'] == "invalidemail"){
        echo' <p class="signuperror"> Invalid email!</p>';
    }
    else if($_GET['error'] == "passwordcheck"){
        echo' <p class="signuperror"> your passwords do not match!</p>';
    }
    else if($_GET['error'] == "emailtaken"){
        echo' <p class="signuperror"> Email already used! Please use another email</p>';
    }
}
?>
<div class = "signupform">
    <form name = "registerForm" method = "POST" action = "signup/register">
        Name: </br>
        <input type = "text" name="name" > </input> </br>
        E-mail: </br>
        <input type = "text" name="email"> </input> </br>
        Password: </br>
        <input type = "text" name="password"> </input> </br>
        Re-Type Password: </br>
        <input type = "text" name="rpassword" > </input> </br>
        <button type="submit"> Sign Up </button>
    </form>
</div>


<script>
var name = document.forms["registerForm"]["name"].value;
var email = document.forms["registerForm"]["email"].value;
var pass = document.forms["registerForm"]["password"].value;
var repass = document.forms["registerForm"]["rpassword"].value;

function validateForm()
{
    if (( name == "") && ( email =="") && (pass == "") && (repass == ""))
    {
        alert("FIll in the Fields before pressing the button");
        return false;
    }
    else if (repass == "")
    {
        alert("please re enter password");
        return false;
    }
}

//validate email
function validateEmail()
{
    var regx = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9\.-]+)$/;
    if(regx.match(email))
    {
        alert("itworks?");
        return true;
    }
}
//validate fields

//validate passwords

</script>