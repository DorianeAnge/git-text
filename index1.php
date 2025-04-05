<?php 
$username = "raoulkof";
$servername="localhost";
$password="bonjour!";
$dbname="site_1";
 
$conn = new msqli($servername , $username , $passeword , $dbname );

 if($conn ->connect_error){
  die("erreur dee connexion à la base de donnée : ".$conn->connect_error);
 } else {
  echo " connexion ok ! ";
 }



?>
<!DOCTYPE html> 
 <html>

   <head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<title>WORKafrik</title>
</head>
 <body>

<form action="index.php" method="POST">
  <div class="container">

 <label for="nom">NOM</label>
 <input type="text" name="nom"><br><br>
 <label for="prenom">PRENOM</label>
 <input type= "text" name="prenom"><br><br>
 <label for="email"> Entrez votre adresse mail </label>
 <input type="email" name="email"><br><br>
 <input type="submit" value="SOUMETTRE">


</div>




 </form>
 </body>





 </html>