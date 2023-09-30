<!-- read.php -->
<?php
if($_SERVER['REQUEST_METHOD'] == 'GET') {
  try {
    $conn = new PDO("mysql:host=localhost;dbname=portfolio_studenta", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $Id_user = $_GET['Id_user'];
    $sql = "SELECT * FROM `userr` WHERE Id_user = :Id_user";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':Id_user', $Id_user);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
      echo "User ID: " . $result['Id_user'] . "<br>";
      echo "Firstname: " . $result['fname'] . "<br>";
      echo "Lastname: " . $result['lname'] . "<br>";
    } else {
      echo "User not found.";
    }
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
}
?>