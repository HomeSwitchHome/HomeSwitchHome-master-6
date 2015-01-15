<?php require_once("config.php"); 


 ?>


<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <meta name="description" content="" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Home Switch Home</title>
        <link href="http://fonts.googleapis.com/css?family=Oxygen:400,700,300" rel="stylesheet" type="text/css" />
        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
  </head>
<body>
 <?php include("header.php"); ?>
    <div id="wrapper">
    <div id="user_list">


<?php 
  //nom:
  $nom     = $_POST["nom"] ;
  //prenom:
  $prenom = $_POST["prenom"] ;
  //email:
  $email = $_POST["email"] ;
  //age:
  $age        = $_POST["age"] ;
  $telephone = $_POST["telephone"];
 
  //récupération de l'identifiant de la personne:
  $id         = $_POST["id"] ;

  //création de la requête SQL:
  /*$modifsql = " UPDATE membres
            SET nom = '$nom', 
                prenom = '$prenom',
                email = '$email',
                age = '$age',
            WHERE id = '$id' " ;
 $envoimodif = $bdd -> prepare('$modifsql');
  //exécution de la requête SQL:
$envoimodif -> execute();*/
$envoimodif = $bdd -> prepare("UPDATE membres SET nom = '$nom', prenom = '$prenom', email = '$email', age = '$age', telephone = '$telephone' WHERE id = '$id' ");
$envoimodif -> execute();

 
 
?>

<a href="modif1.php"> Retour page administration</a>

</div>
</div>
<?php include("footer.php");?>
</body>
</html>