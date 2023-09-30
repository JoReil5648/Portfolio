<!-- create.php -->
<?php
include_once('helpers\Log.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  try {
     $conn = new PDO("mysql:host=localhost;dbname=portfolio_studenta", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $login = $_POST['login'];
    $parol = $_POST['parol'];

    $sql = "INSERT INTO `logpas` (login, parol) VALUES (:login, :parol)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':parol', $parol);
    $stmt->execute();

    echo "Record created successfully.";
  } catch(PDOException $e) {
    new Log($e);
    echo "Error: " . $e->getMessage();
    
  }
  $conn = null;
  // header('UserForm.html');
  // exit()
}

?>