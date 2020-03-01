

</body>
<html>

<?php 
//probably need to make a footer here

?>

<footer>
<div id="friend"> </div>
Footer
</footer>

<style>
footer {
    color: white;
    position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #111;
  text-align: center;
}
#friend{
    width: 30px;
    height: 30px;
    position: absolute;
    background-color: red;
    animation-name: friend;
    animation-duration: 4s;
    animation-iteration-count: infinite;
}

@keyframes friend {
    from {left: 0%;}
    to {left: 98%;}
}
</style>