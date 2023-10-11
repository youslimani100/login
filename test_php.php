
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
$_SESSION["email"] = "cat@ma.dz";
$_SESSION["nom"] = "cat";
echo "Favorite color is " . $_SESSION["nom"] . ".<br>";
echo "Favorite animal is " . $_SESSION["email"] . ".<br>";
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite color is " . $_SESSION["favcolor"] . ".";
echo "<br>";
print_r($_SESSION);
?>

</body>
</html>
