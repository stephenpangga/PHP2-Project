
<?php if(Session::get('loggedIn')==true): ?>
<h1> Welcome back, <?= Session::get('user')->getName(); ?> </h1>
<?php else: ?>
<h1>Homepage </h1>
</br>
<p>Some stuff needed to be added here to make looks nice </p>
some changes are being made
<?php endif;?>
<p>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=207643343623223&autoLogAppEvents=1"></script>
<div class="fb-page" data-href="https://www.facebook.com/hsgildt/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/hsgildt/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/hsgildt/">&#039;t Haerlems Studenten Gildt</a></blockquote></div>

</p>

<style>

h1, .fb-page
{
    text-align: center;
}
p
{
    text-align: center;
}
</style>


