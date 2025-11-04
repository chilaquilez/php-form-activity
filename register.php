<?php include 'header.php'; ?>

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
               "<a href='index.php'>Back to homepage</a>";
   }
?>


        <div class="box">
            <?php echo $message; ?>

 <?php include 'footer.php'; ?>