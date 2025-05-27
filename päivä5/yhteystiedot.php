<!DOCTYPE html>
<html lang="fi">
<head>  
  <meta charset="utf-8">
  <title>Yhteystietolomake</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="tyyli.css"> 
</head>
<body>
    <div class="container">
        <?php
      if ($_SERVER["REQUEST_METHOD"] === "POST") 
      {       
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Display success message 
        echo "<h3>Kiitos viestistäsi!</h3>";
        echo "<p><strong>Nimi:</strong> $name</p>";
        echo "<p><strong>Sähköposti:</strong> $email</p>";
        echo "<p><strong>Viesti:</strong><br>$message</p>";

        // Return button
        echo '<a href="yhteystiedot.html" class="btn btn-secondary">Palaa lomakkeeseen</a>';
      } 
      else {
        // Error message
        echo "<p>Ei vastaanotettua dataa.</p>";
      }
    ?>
  </div>
</body>
</html>