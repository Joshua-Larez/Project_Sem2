<?php
    require 'config.php';
    var_dump($_POST);

    // gets the post array from the submitted form
    $firstname = $_POST["firstname"];
    $infix = $_POST["infix"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $userrole = $_POST["userrole"];

    try {
        // loops through the amount of forms that were filled and add them to the database easy
        foreach($firstname as $index => $names){

            $s_names = $names;
            $s_infix = $infix[$index];
            $s_lastname = $lastname[$index];
            $s_email = $email[$index];
            $s_password = $password[$index];
            $s_userrole = $userrole[$index];

            // prepare statement
            $stmt = $connect->prepare("INSERT INTO `users` (`firstname`, `infix`, `lastname`, `email`, `password`, `userrole`)
                                    VALUES (:firstname, :infix, :lastname, :email, :password, :userrole)");
            $stmt->bindParam(':firstname', $s_names);
            $stmt->bindParam(':infix', $s_infix);
            $stmt->bindParam(':lastname', $s_lastname);
            $stmt->bindParam(':email', $s_email);
            $stmt->bindParam(':password', $s_password);
            $stmt->bindParam(':userrole', $s_userrole);
            
            // inserts the users in the database 
            $stmt->execute();

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
                <h1>Created Successfully</h1>
            </div>
        </body>
        </html>';
    } 
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    header("Refresh:2; url=./pages/users.php");

