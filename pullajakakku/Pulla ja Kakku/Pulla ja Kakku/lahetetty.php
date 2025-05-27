<!DOCTYPE html>
<html lang="fi">
<head>  
  <title>Pulla ja Kakku</title>
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="tyyli.css">
</head>

<body>
  <header class="header-section">
    <h2>🍰 Tervetuloa Pullan ja Kakkuun! 🍰</h2>
    <p>Meiltä löydät herkullisia leivonnaisia ja erikoiskahveja!</p>
  </header>    
 
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">Pulla ja Kakku</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.html">Etusivu</a></li>
      
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tuotteet
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="pulla.html">Pulla</a></li>
          <li><a href="kahvi.html">Kahvi</a></li>
          <li><a href="kakku.html">Kakku</a></li>
        </ul>
      </li>
      <li><a href="yhteystiedot.html">Yhteystiedot</a></li>
    </ul>
  </div>
  </nav>
  
    <section class="container py-5">
        <h2>Kiitos viestistäsi!</h2><br>
        <h3>Viestisi tiedot:</h3>

        <?php        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $message = htmlspecialchars($_POST["message"]);

            // Display the submitted information
            echo '<div class="row">';
            echo '<div class="col-md-12">';
            echo '<p><strong>Nimi:</strong> ' . $name . '</p>';
            echo '<p><strong>Sähköposti:</strong> ' . $email . '</p>';
            echo '<p><strong>Viesti:</strong><br>' . nl2br($message) . '</p>';
            echo '</div>';
            echo '</div>';
        } else {
            // Show a message if no data was received
            echo "<p>Ei vastaanotettua dataa.</p>";
        }
        ?>
            <a href="index.html" class="btn btn-primary">Palaa etusivulle</a>
    </section>
   
    <footer class="footer">
        <p>🍰 &copy; 2025 Pulla ja Kakku. All rights reserved. 🍰</p>
    </footer>
</body>
</html>
