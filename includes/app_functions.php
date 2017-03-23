<?php

include 'app_pdo_connection.php';

// This function creates the table "Form" and the starting fields in the database.
function CreateTable() {
  // The PDO connection
  global $pdo;
  // Create Statement
  $table = "Form";
  try {
    $sql = "CREATE TABLE IF NOT EXISTS $table (
    ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR( 250 ) NOT NULL,
    email VARCHAR( 150 ) NOT NULL, 
    options VARCHAR( 150 ) NOT NULL, 
    radio VARCHAR( 150 ) NOT NULL, 
    message VARCHAR( 500 ) NOT NULL,
    dateposted DATETIME NOT NULL);" ;
    $pdo->exec($sql);
    print("Created $table Table.\n");
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}

// This function adds leads from the form into the database.
function AddLeads($par_name, $par_email, $par_options, $par_radio, $par_message) {
  // The PDO connection
  global $pdo;
  // Insert Statement
  try {
    // prepare sql and bind parameters
    $stmt = $pdo->prepare("INSERT INTO Form (name, email, options, radio, message, dateposted) VALUES (:name, :email, :options, :radio, :message, now())");
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

// This function loops through the leads and creates a table showing all the data in the database.
function EchoAllLeads() {
  // The PDO connection
  global $pdo;
  // Select and show the data from the Form table
  $sql = 'SELECT id, name, email, options, radio, message, dateposted FROM Form';
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
        echo "<td>".$row["dateposted"]."</td>";
      echo "<tr>";
    }
  } else {
    echo "0 results";
  }
}

// This function shows the most latest database entry based on the record's timestamp.
function EchoNewestLeads() {
  // The PDO connection
  global $pdo;
  // Select and show the data from the Form table
  $sql = 'SELECT id, name, email, options, radio, message, dateposted FROM Form ORDER BY dateposted DESC LIMIT 1';
  $results = $pdo->query($sql);
  foreach($results as $result) {
    echo "<tr>";
      echo "<td>".$result["id"]."</td>";
      echo "<td>".$result["name"]."</td>";
      echo "<td>".$result["email"]."</td>";
      echo "<td>".$result["options"]."</td>";
      echo "<td>".$result["radio"]."</td>";
      echo "<td>".$result["message"]."</td>";
      echo "<td>".$result["dateposted"]."</td>";
    echo "<tr>";
  }
}

// This is a simple function to show the latest ID of the record entered.
function db_last_insert_id() {
  global $pdo;
  return $pdo->lastInsertId();
}

// This is PHP form validation and form processor.
function validateFeedbackForm($post) {
  $contact_name = htmlspecialchars($post['contact_name']);
  $contact_email = htmlspecialchars($post['contact_email']);
  $contact_options = htmlspecialchars($post['contact_options']);
  $contact_radio = htmlspecialchars($post['contact_radio']);
  $contact_message = htmlspecialchars($post['contact_message']);

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
    header("Location: /");
    die;  
  }

  // send email and redirect
  $to = "adam@kruegerdesigns.com";
  $headers = "From: $contact_email" . "\r\n";
  mail($to, $subject, $contact_message, $headers);
  header("Location: /thank-you");
  
  // Make this a function call, then move it to an include in the header.
  AddLeads($contact_name, $contact_email, $contact_options, $contact_radio, $contact_message);
  exit;
}

// This is PHP form validation and form processor.
function validateSendAnonymous($post) {
  $contact_name = htmlspecialchars($post['contact_name']);
  $contact_email = htmlspecialchars($post['contact_email']);
  $contact_subject = htmlspecialchars($post['contact_subject']);
  $contact_message = htmlspecialchars($post['contact_message']);

  if(!isset($contact_name, $contact_email, $contact_subject, $contact_message)) return;

  if(!$contact_name) {
    return "Please enter your Name";
  }
  if(!preg_match("/^\S+@\S+$/", $contact_email)) {
    return "Please enter a valid Email address";
  }
  if(!$subject) {
    $subject = "Anonymous Einstein Message";
  }
  if(!$contact_message) {
    return "Please enter you message in the \"Message\" box below.";
  }

  // empty field spam test
  if(trim($contact_business) != null) {
    header("Location: /");
    die;  
  }

  // send email and redirect
  $to = "adam@kruegerdesigns.com";
  $headers = "From: $contact_email" . "\r\n";
  mail($to, $subject, $contact_message, $headers);
  header("Location: /thank-you");
  
  exit;
}