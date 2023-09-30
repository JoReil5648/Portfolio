<!-- update.php -->
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  try {
      $conn = new PDO("mysql:host=localhost;dbname=portfolio_studenta", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $Id_user = $_POST['Id_user'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $sql = "UPDATE `userr` SET fname =:fname,lname=:lname WHERE Id_user=:Id_user";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':Id_user', $Id_user);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->execute(); 

    echo "Record updated successfully.";
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
}
?>