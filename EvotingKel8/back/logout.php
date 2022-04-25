<?php
// aktif session
session_destroy();

$_SESSION['error'] = "Anda telah logout";
header("Location: ../login.php");