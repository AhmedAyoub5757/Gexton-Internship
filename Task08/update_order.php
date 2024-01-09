<?php

$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'interntask8';  

try {
  $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Database connection failed: " . $e->getMessage();
  exit();
}

$tableExists = $pdo->query("SHOW TABLES LIKE 'my_table'")->rowCount() > 0;

if (!$tableExists) {
  try {
    $pdo->exec("CREATE TABLE my_table (
      id INT PRIMARY KEY AUTO_INCREMENT,
      name VARCHAR(50) NOT NULL,
      order_index INT
    )");
    echo "Table created successfully.";
  } catch (PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
    exit();
  }
}

if (isset($_POST['order'])) {
  $order = $_POST['order'];

  try {
    $pdo->exec("DELETE FROM my_table");

    foreach ($order as $index => $itemId) {
      $stmt = $pdo->prepare("INSERT INTO my_table (name, order_index) VALUES (:name, :index)");
      $stmt->bindParam(':name', $itemId, PDO::PARAM_STR);
      $stmt->bindParam(':index', $index, PDO::PARAM_INT);
      $stmt->execute();
    }

    echo "Order updated successfully.";
  } catch (PDOException $e) {
    echo "Error updating order in the database: " . $e->getMessage();
    exit();
  }
} else {
  echo "Invalid request.";
}

$pdo = null;
?>
