<?php

/**********************************************************
 * File: signOut.php
 * Author: Br. Burton
 * 
 * Description: Clears the username from the session if there.
 *
 ***********************************************************/

require("./library/password.php"); // used for password hashing.
session_start();
// unset($_SESSION['username']);
session_unset();
session_destroy();
header("Location: signIn.php");
die(); // we always include a die after redirects.
