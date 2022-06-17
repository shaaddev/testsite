<?php 

    include_once 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $comment = $_POST['comment'];

    $conn = new mysqli('localhost', 'root', '', 'Random');

    // chech connection
    if ($conn->connect_error) {
        die ('Connection Failed!');
    } else {
        $stmt = $conn->prepare("insert into Randomtable (Fullname, Email, Company, Contact) 
            VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $company, $comment);
        $stmt->execute();
        echo "Subscription Successful!";

        $stmt->close();
        $conn->close();
    }

   

?>