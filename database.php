<?php 
    include_once 'connect.php';

    // initalize variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $comment = $_POST['comment'];
    

    // required field
    $errors = array();

    if(!isset($name) || empty($name)){
        $errors['name'] = 'Full name is required';
    } else if(!isset($email) || empty($email)) {
        $errors['email'] = 'Email Address is required';
    } else if(!isset($comment) || empty($comment)) {
        $errors['comment'] = 'Please add a message';
    }

    // add data to table
    $sql = 'INSERT INTO Contact (Fname, Email, Company, Comment) VALUES (:fname, :email, :company, :comment)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['fname' => $name, 'email' => $email, 'company' => $company, 'comment' => $comment]);

?>