<?php 

    include_once 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $comment = $_POST['comment'];

    // initalize table
    $sql = 'INSERT INTO Contact (Fname, Email, Company, Message) VALUES (:fname, :email, :company, :message)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['fname' => $name, 'email' => $email, 'company' => $company, 'message' => $comment]);
    
    echo "post added";

?>