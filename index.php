<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="images/icons/tools.png">
        <title>Digi Data</title>
        <!-- REGULAR CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Bootstrap 4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body>
        <img class="background" src="images/collab.jpg">
        <img class="logo" src="images/logo.png">
        
        <div class="container mx-auto" style="text-align: center; margin-bottom: 7%;">
            <div class="container">
                <h3 class="mx-auto h3-mobile" style="margin-top: 5%;"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Undergoing Maintenance<span class="glyphicon glyphicon-remove-sign"></span></h3>
                <h1 class="mx-auto" style="font-size: 50px;">Digi-Data Systems Limited</h1>
                <h4 class="mx-auto h4-mobile">Quality People... Quality Solutions</h4>
            </div>    
        </div>

        <div class="container">           
            <div class="container" style="margin-bottom: 20px;">
                <h4 style="text-align: center;">Contact Us Here</h4>
                <form action="index.php" method="POST" class="newsletter">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name<b>*</b></label>
                        <input type="text" class="form-control" id="name" name="name">
                        <?php if(isset($name)){ echo $errors['name']; }?>
                    </div>    
                    <div class="form-group">
                        <label for="email" class="form-label">Email<b>*</b></label>
                        <input type="email" class="form-control" id="email" name="email" >
                        <?php if(isset($email)){ echo $errors['email']; }?>
                    </div>
                    <div class="form-group">   
                        <label for="company" class="form-label">Company/Organization <b>*</b></label>
                        <input type="text" class="form-control" id="company" name="company" >
                    </div>
                    <div class="form-group"> 
                        <label for="comment" class="form-label">Comment or Message <b>*</b></label>
                        <textarea type="text" class="form-control" id="comment" name="comment"></textarea>
                        <?php if(isset($comment)){ echo $errors['comment']; }?>
                    </div>
                    <input type="submit" class="btn btn-danger" value="Subscribe!">                    
                </form>
                
            </div>
        </div>
    </body>
</html>

<?php 

    include_once 'mail.php';
    include_once 'database.php';    
    
?>