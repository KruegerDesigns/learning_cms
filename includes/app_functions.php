<?php
include 'app_pdo_connection.php';

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

function EchoAllLeads() {
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

function validateFeedbackForm($arr) {
  extract($arr);

  if(!isset($contact_name, $contact_email, $contact_message)) return;

  if(!$contact_name) {
    return "Please enter your Name";
  }
  if(!preg_match("/^\S+@\S+$/", $contact_email)) {
    return "Please enter a valid Email address";
  }
  if(!$subject) $subject = "Contact from website";
  if(!$contact_message) {
    return "Please enter a comment in the Message box below.";
  }

  // empty field spam test
  if(trim($contact_business) != null) {
    header("Location: http:/");
    die;  
  }

  // send email and redirect
  $to = "adam@kruegerdesigns.com";
  $headers = "From: no-reply@kruegerdesigns.com" . "\r\n";
  mail($to, $subject, $contact_message, $headers);
  header("Location: http:/thank-you");
  exit;
}