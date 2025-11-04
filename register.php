<?php
   $message = "";

   if (isset($_POST['submit_button'])) {
    $name = $_POST['user_name'] ?? "";
    $email = $_POST['user_email'] ?? "";
    $sevlevel = $_POST['service_level'] ?? "";  //BUUUUUUUUG
    $message = "<h1>Thank You, $name!</h1>" . 
               "<p>your registration for the <b>$sevlevel</b> plan is complete.</p>" . 
               "<p>We will email: $email</p>" . 
               "<hr>" . 
               "<a href='index.html'>Back to homepage</a>";
   }
?>

<!DOCTYPE html>
<html lang=eng>
    <head>
        <meta charset="UTF-8">
        <title>Registration Complete</title>
        <style>
            body { font-family: sans-serif; margin: 0; }
            .box { max-width: 360px; margin: 2rem auto; padding: 1rem; text-align: center; }
        </style>
    </head>
    <body>
        <div class="box">
            <?php echo $message; ?>
        </div>
</body>
</html>