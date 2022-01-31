<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
session_unset();
session_destroy();
echo "session variables are destroyed"
?>
</body>
