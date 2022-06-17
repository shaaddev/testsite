<?php 

    include_once 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $comment = $_POST['comment'];

    $stmt = $conn->prepare("insert into Randomtable (Fullname, Email, Company, Contact) 
            VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $company, $comment);
    $stmt->execute();

    $stmt->close();
    $conn->close();

?>