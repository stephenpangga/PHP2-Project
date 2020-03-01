
<?php if(Session::get('loggedIn')==true): ?>
<h1> Welcome back, <?= Session::get('user')->getName(); ?> </h1>
<?php else: ?>
<h1>Homepage </h1>
</br>
<p>Some stuff needed to be added here to make looks nice </p>
<?php endif;?>
some changes are being made
<style>
h1
{
    text-align: center;
}
p
{
    text-align: center;
}
</style>


