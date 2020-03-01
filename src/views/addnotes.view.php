<style>
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
.note-form, h1
{
  text-align: center;
}
</style>

<h1> Add Note </h1>
<div class = "note-form">
    <form name = "noteForm" onsubmit="return validateForm()" method = "POST" action = "/notes/insert">
        <!--Name: <input name="name"> </input> </br>-->
        Title of the note: </br>
        <input type ="text" name="title" required> </input> </br>
        Text </br>
        <input type = "text" name="text" required> </input> </br>
        <button type = "notes-submit"> Save</button>
    </form>
</div>



<script>

  function validateForm() 
    {
        var text = document.forms["noteForm"]["text"].value;
        var title = document.forms["noteForm"]["title"].value;
        if ((title == "") && (text ==""))
        {
          alert("Please fill in the fields");
          return false;
        }
        else if (text =="")
        {
          return true;
        }
        else if (title =="")
        {
          return true;
        }
    }
</script>