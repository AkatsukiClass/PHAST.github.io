<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Email</title>
    <style>
    body {
      text-align: center;
    }
    </style>
</head>
<body>
<img src="Phast/logo.png" alt="Phast Phone Logo" width=700>

  <h1>Email Successfully Sent!</h1>
  <nav>
    <a href=index.html><h3>Press me to Go Back</h3></a>
  </nav>

    <?php
        if (isset($_POST['email']))
        {
            // in the quotations enter the email you want to send the form data to
            $to = "info@otcwebdev.net";
            // Change this to reflect what you want to appear in the Subject line of the email
            $subject = "Get a Quote!";

            //*************  DON'T CHANGE THIS!!!!!  ***************************************
            $from = "otcwebdev.net@";


            // To send HTML mail, the Content-type header must be set
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            // Create email headers
            $headers .= 'From: '.$from."\r\n".
                'Reply-To: '.$from."\r\n" .
                'X-Mailer: PHP/' . phpversion();
            //************* ******************** DON'T CHANGE THIS!!!!!***********************

            // Compose a simple HTML email message
            // Add to this message your content - follow the pattern below
            // use   $_POST['datafield']    this datafield is the name attribute in  your form field!
            $message = "<html><body>";
            $message .= "<h1 style='color:#f40;'>Name: " . $_POST['name'] . "</h1>";
            $message .= "<h1 style='color:#f40;'>Email: " . $_POST['email'] . "</h1>";
            $message .= "<h1 style='color:#f40;'>Number: " . $_POST['number'] . "</h1>";
            $message .= "<h1 style='color:#f40;'>Problem: " . $_POST['message'] . "</h1>";
            $message .= "</body></html>";

            mail($to,$subject, $message ,$headers);

        }

?>

<!-- This needs to be in your form  -->

</body>
</html>
