<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$_SESSION["username"] = "lismy";
$_SESSION["email"] = "lismythomas2001@gmail.com";
echo "Session variables are set.";
?>
</body>
</html>
