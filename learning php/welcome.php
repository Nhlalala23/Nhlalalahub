<?php
if(!isset($_COOKIE['looged_in']) || !$_COOKIE['looged_in']) 
{
    header ("Location :index.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

    <h2>Welcome</h2>
    <p>You are logged in!</p>

</body>
</html>


