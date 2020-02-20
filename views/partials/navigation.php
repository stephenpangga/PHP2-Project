<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
.log
{
    float: right;
}
</style>

<nav>
    <ul>
        <li><a class="active" href="/">Home</a></li>
        <?php if(!Session::get('loggedIn')==true): ?>
            <li class = "log"><a href="/login">Login</a></li>
        <?php else: ?>
            <li><a href="/notes">Notes</a></li>
            <li><a href="/notes/addnote">Add-Notes</a></li>
            <li class = "log"><a href="/logout"> Log-Out</a></li>
            <li><a href ="http://connect-four69.herokuapp.com/"> Connect-4 </a></li>
        <?php endif;?>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="">PHP2</a></li>
    </ul>
</nav>