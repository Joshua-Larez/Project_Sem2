<?php
    //include this file 
    require 'config.php';

    // if post item doesnt exist give error 
    if (!isset($_POST['item'])){
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
            background-color: red;
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
            background-color: Red;
            width: fit-content;
            align-self: center;
            font-size: xx-large;
            border-radius:.5em;
            padding:.5em;
        }
        </style>
        <body>
            <div>
                <h1>Iets ging niet Goed, probeer nog een keer.</h1>
            </div>
        </body>
        </html>';
    }
    else 
    {

        // gets the post array from the submitted form
        $item = $_POST["item"];
        $reason = $_POST["reason"];
        $datetime = $_POST["datetime"];
        $studentN = $_SESSION["firstname"];
        $studentI = $_SESSION["infix"];
        $studentL = $_SESSION["lastname"];

        // filters out all empty values and indexes the first value 0 
        $amount = array_values(array_filter($_POST["amount"]));

        try {
            // loops through the items index and set values by index.
            foreach ($item as $index => $items){
    
                $s_item = $items;
                $s_amount = $amount[$index];
                $s_reason = $reason[$index];
    
                // prepare statement
                $stmt = $connect->prepare("INSERT INTO `aanvraag` (`studentN`,`studentI`,`studentL`,`item`, `amount`, `reason`, `datetime`)
                VALUES (:studentN, :studentI, :studentL, :item, :amount, :reason, :datetime)");
    
                // set values 
                $stmt->bindParam(':studentN', $studentN);
                $stmt->bindParam(':studentI', $studentI);
                $stmt->bindParam(':studentL', $studentL);
                $stmt->bindParam(':item', $s_item);
                $stmt->bindParam(':amount', $s_amount);
                $stmt->bindParam(':reason', $reason);
                $stmt->bindParam(':datetime', $datetime);
  
    
                // inserts the values in the database 
                $stmt->execute();
    
            }
            // message this if execute was succesfull
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
                        <h1>Succesvol Aangevraagd</h1>
                    </div>
                </body>
                </html>';
        }
        // throw error
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    header("Refresh:2; url=../pages/aanvraag.php");