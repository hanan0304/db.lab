<?php
// Retrieve form data
$title = $_POST['title'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['number'];
$primary_number = isset($_POST['primary_number']) ? 1 : 0;
$description = $_POST['description'];

// Create a PDO connection to MySQL
$host = 'your_mysql_host';
$dbname = 'your_database_name';
$username = 'your_username';
$password = 'your_password';

try {
  $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Insert form data into the database
  $stmt = $db->prepare("INSERT INTO contact_messages (title, first_name, last_name, email, phone, primary_number, description) VALUES (?, ?, ?, ?, ?, ?, ?)");
  $stmt->execute([$title, $first_name, $last_name, $email, $phone, $primary_number, $description]);

  echo "Form data submitted successfully!";
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>
