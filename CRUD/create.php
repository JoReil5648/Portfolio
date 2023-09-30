<!-- create.php -->
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  try {
     $conn = new PDO("mysql:host=localhost;dbname=portfolio_studenta", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $sql = "INSERT INTO `userr` (fname, lname) VALUES (:fname, :lname)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->execute();

    echo "Record created successfully.";
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
  // header('UserForm.html');
  // exit()
}

?>