<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>

  <link rel="apple-touch-icon" sizes="180x180" href="/Favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/Favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/Favicon/favicon-16x16.png">
  <link rel="manifest" href="./site.webmanifest">

  </head>

  <body>
    
    <?php
    echo "<h1>Hello, World!</h1>\n";
    ?>

    <form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
    </form>

  </body>
  
</html>
