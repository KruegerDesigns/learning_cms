<?php
$servername = "127.0.0.1";
$username = "modern";
$password = "@DminModern";
$dbname = "modern_theme";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO Leads (name, email, options, radio, message) 
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
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>