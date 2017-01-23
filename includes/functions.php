<?php
include 'pdo_connection.php';

function AddLeads($par_name, $par_email, $par_options, $par_radio, $par_message) {
  // The PDO connection
  global $pdo;
  // Insert Statement
  try {
    // prepare sql and bind parameters
    $stmt = $pdo->prepare("INSERT INTO Leads (name, email, options, radio, message) 
    VALUES (:name, :email, :options, :radio, :message)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':options', $options);
    $stmt->bindParam(':radio', $radio);
    $stmt->bindParam(':message', $message);
    // insert a row
    $name = "$par_name";
    $email = "$par_email";
    $options = "$par_options";
    $radio = "$par_radio";
    $message = "$par_message";
    $stmt->execute();
    echo "New records created successfully";
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}

function EchoLeads() {
  // The PDO connection
  global $pdo;
  // Select and show the data from Leads
  $sql = 'SELECT id, name, email, options, radio, message FROM Leads';
  $result = $pdo->query($sql);
  if ($result->num_rows >= 0) {
    // output data of each row
    $stmt = $pdo->query($sql);
    foreach ($stmt as $row) {
      echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["options"]."</td>";
        echo "<td>".$row["radio"]."</td>";
        echo "<td>".$row["message"]."</td>";
      echo "<tr>";
    }
  } else {
    echo "0 results";
  }
}

function db_last_insert_id() {
  global $pdo;
  return $pdo->lastInsertId();
}
