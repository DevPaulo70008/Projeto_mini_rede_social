<html>
  <head>
    <link rel="stylesheet" type="text/css" href="show.css">
  </head>
  <body>
    <div class="act">
      <a href="profile.php"><img class="lg" src="https://cdn-icons-png.flaticon.com/512/6915/6915987.png"></a>
    </div>
    <?php
      $addfile = file_get_contents("post.html");
      echo "<p>$addfile<p> \n \n";
      
    ?>
  </body>
</html>
