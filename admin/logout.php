<?php
// Start the Session
session_start();

//destroy session
if (session_destroy()){
    header("location: ../users/login.php");
}