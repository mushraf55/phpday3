<?php
//basic syntax of cookie
setcookie("fav_food", "pizza", time() + (8377));

//cookie for storing user information


setcookie("username", "Mushraf", time() + (86400 * 2), "/"); //Expires in two days
setcookie("language", "English", time() + (86400 * 2), "/");

//checking if the cookies are set
if (isset($_COOKIE['username']) && isset($_COOKIE['language'])) {
  echo "Welcome back " . $_COOKIE['username'] . "!<br>";
  echo "Your preferred language is" . $_COOKIE['language'] . "<br>";
} else {
  echo "Cookies are not set";
}
