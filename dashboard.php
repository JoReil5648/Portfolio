<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: home.html"); 
    exit();
}
?>

<h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
<p>This is the secure dashboard.</p>