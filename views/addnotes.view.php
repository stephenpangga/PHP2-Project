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
    <form method = "POST" action = "/notes/insert">
        <!--Name: <input name="name"> </input> </br>-->
        Title of the note: </br>
        <input type ="text" name="email"> </input> </br>
        Text </br>
        <input type = "text" name="password"> </input> </br>
        <button type = "notes-submit"> Save</button>
    </form>
</div>