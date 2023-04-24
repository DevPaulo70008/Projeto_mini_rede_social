<html>
   <head>
      <style>
        *{
          margin:0px;
          padding:0px;
          font-size:45px;
          font-family:bold;
        }
       .inp{
         border-color:blue;
         border-radius:20px;
       }
      body{
        background-color:#4A3F4A;
      }
     h1{
       color:#f6e330;
     }
      </style>
   </head>
   <body>
     <h1>New Post</h1>
      <form method="post">
         <textarea name="msg" rows="4" cols="50" class="inp">
         </textarea>
<br>
<br>
<input type="submit">

      </form>
   </body>
</html>
<?php 

if($info = $_POST['msg']){
$start = file('mus.txt');

foreach($start as $meme);
  $nnn = fopen("post.html",'a');
  fwrite($nnn,"<g>$meme:</g><p>$info</p> \n \n");
  fclose($nnn);
  echo "
  <br>
  <a href='show.php'><button>Time Line</button>";
}else{
  echo "<p>Not a post :(</p>";
}