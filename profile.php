<html>
  <head>
      <style>
         *{
           font-size:65px;
           font-family:bold;
         }
       .ar{
         width:456px;
         margin-left:276px;
       }
      p{
        margin-left:276px;
        color:#ffffff;
      }
     body{
       background-color:#0a5654;
     }
    a{
      margin-left:276px;
    }
   button{
     border-color:red;
     border-radius:20px;
   }
      </style>
      
  </head>
  <body>
    
  </body>
</html>
<?php
$valid = $_POST['my'];
$password = $_POST['pass'];
$start = file('mus.txt');

foreach($start as $meme);
echo "
<html>
<body>
<img class='ar' src='https://i.giphy.com/media/5uk8vrqa63qw4IwWkm/200w.gif'>
<br>
<br>
<p>You:$meme</p>
<br>
<a href='new_post.php'><button>New post<button>
</a>
<br>
<br>
<a href='show.php'><button>Time Line</button></a>
</body>
</html>
";