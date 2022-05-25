<?php
    require 'config.php';

    // gets the post array from the submitted form
    if (isset($_POST['firstname'])) {
        try {

            $sql = "UPDATE `users` SET `firstname` = :firstname WHERE `users`.`id` = :id";
    
            // Prepare statement
            $stmt = $connect->prepare($sql);
    
            $stmt->bindParam(':id', $_POST['id']);
            $stmt->bindParam(':firstname', $_POST['firstname']);
    
            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    if (isset($_POST['infix'])) {
        try {
    
            $sql = "UPDATE `users` SET `infix` = :infix WHERE `users`.`id` = :id";
    
            // Prepare statement
            $stmt = $connect->prepare($sql);
    
            $stmt->bindParam(':id', $_POST['id']);
            $stmt->bindParam(':infix', $_POST['infix']);
    
            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    if (isset($_POST['lastname'])) {
        try {
    
            $sql = "UPDATE `users` SET `lastname` = :lastname WHERE `users`.`id` = :id";
    
            // Prepare statement
            $stmt = $connect->prepare($sql);
    
            $stmt->bindParam(':id', $_POST['id']);
            $stmt->bindParam(':lastname', $_POST['lastname']);
    
            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    if (isset($_POST['email'])) {
        try {
    
            $sql = "UPDATE `users` SET `email` = :email WHERE `users`.`id` = :id";
    
            // Prepare statement
            $stmt = $connect->prepare($sql);
    
            $stmt->bindParam(':id', $_POST['id']);
            $stmt->bindParam(':email', $_POST['email']);
    
            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    if (isset($_POST['password'])) {
        try {
    
            $sql = "UPDATE `users` SET `password` = :password WHERE `users`.`id` = :id";
    
            // Prepare statement
            $stmt = $connect->prepare($sql);
    
            $stmt->bindParam(':id', $_POST['id']);
            $stmt->bindParam(':password', $_POST['password']);
    
            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    if (isset($_POST['userrole'])) {
        try {
    
            $sql = "UPDATE `users` SET `userrole` = :userrole WHERE `users`.`id` = :id";
    
            // Prepare statement
            $stmt = $connect->prepare($sql);
    
            $stmt->bindParam(':id', $_POST['id']);
            $stmt->bindParam(':userrole', $_POST['userrole']);
    
            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        } 
    }  
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <style>
        body {
            background-color: rgba(0, 255, 13, 0.664);
        }
        div {
            margin: auto;
            margin-top: 20em;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
        h1 {
            background-color: lightgreen;
            width: fit-content;
            align-self: center;
            font-size: xx-large;
            border-radius:.5em;
            padding:.5em;
        }
        </style>
        <body>
            <div>
                <h1>Succesvol Gewijzigd</h1>
            </div>
        </body>
        </html>';

    header("Refresh:2; url=./pages/users.php");

