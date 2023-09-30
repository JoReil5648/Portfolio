<!-- delete.php -->
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  try {
       $conn = new PDO("mysql:host=localhost;dbname=portfolio_studenta", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $Id_user = $_POST['Id_user'];

    $sql = "DELETE FROM `userr` WHERE Id_user = :Id_user";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':Id_user', $Id_user);
    $stmt->execute();

    echo "Record deleted successfully.";
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
}
?>
