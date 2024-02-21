<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><h1><B>VOCE PODE VOTAR?</B></h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"   >
    <input type="number" name = "idade"> <br> <br>
    <input type="submit" values = "enviar">
</form>
    
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(!empty($_POST['idade'])){

     $idade = $_POST['idade'];

     if($idade < 16){

        echo"<h3>Voce nao podera votar</h3>";

     } elseif ($idade >= 16){

        echo"<h3>Voce podera votar</h3>";

     } 

   }else {

        echo"<h3>preecha o campo</h3>";
     }

 
}
?>
</body>
</html>