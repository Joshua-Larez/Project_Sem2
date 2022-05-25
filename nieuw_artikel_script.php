<?php
    require 'config.php';

    // gets the post array from the submitted form
    $url = $_POST["url"];
    $name = $_SESSION["firstname"];
    $aantal = $_POST["aantal"];
    $reden = $_POST["reden"];

    try {
        // loops through the amount of forms that were filled and add them to the database easy

            $url = $url;
            $naam_user = $name;
            $aantal = $aantal;
            $naam_user = $name;
            $datum_aanvraag = date('Y-m-d H:i:s');

            // prepare statement
            $stmt = $connect->prepare("INSERT INTO `nieuwartikelen` (`url`, `naam_user`, `aantal`, `reden`, `datum_aanvraag`)
                                    VALUES (:url, :name, :aantal, :reden, :datum_aanvraag)");
            $stmt->bindParam(':url', $url);
            $stmt->bindParam(':name', $naam_user);
            $stmt->bindParam(':aantal', $aantal);
            $stmt->bindParam(':reden', $reden);
            $stmt->bindParam(':datum_aanvraag', $datum_aanvraag);
            
            // inserts the users in the database 
            $stmt->execute();
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
        
        $to = 'admin@admin.com';
        $subject = 'Nieuw artikel aangevraagd';
        $message = $naam_user . ' heeft een nieuwe artikel aangevraagd. Click op deze link om de artikel te bekijken: ' . $url . '. Hij wilt ' . $aantal . ' stuks van dit artikel. Zijn reden voor deze aanvraag is: ' . $reden . '.';
        $headers = 'From: myemailaddress@mail.com' . "\r\n" .
            'Reply-To: webmaster@mail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
    } 
    catch(PDOException $e) {
    }

    header("Refresh:2; url=../pages/nieuw_artikel.php");
