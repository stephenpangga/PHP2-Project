<body class="pdfbody">
<h2>Please Fill in the text field to generate pdf <h2>

<form method ="POST" action="pdf/generate">
  <label for="title">Title:</label></br>
  <input type="text" id="fname" name="title" style="width: 300px;"><br><br>
  <label for="Text">Text:</label></br>
  <textarea type="text" id="lname" name="content" style="width: 300px; Height: 300px;"></textarea><br>
  <input type="submit" value="Submit">
</form>


</body>

<style>
.pdfbody
{
    text-align: center;
}

</style>