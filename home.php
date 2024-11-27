<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home page</title>
</head>

<body>
  <h1>This is homepage</h1>
  <form action="home.php" method="post">
    <input type="submit" value="Logout" name="logout">
  </form>

</body>

</html>

<?php
if (isset($_POST['logout'])) {
  session_destroy();
  header("Location: sessions.php");
}
?>