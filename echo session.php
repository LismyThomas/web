<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo "username is " . $_SESSION["username"] . ".<br>";
echo "email is " . $_SESSION["email"] . ".";
?>
</body>
</html>
