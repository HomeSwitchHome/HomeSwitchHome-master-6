<?php require_once("config.php"); 
$idNewAdmin  = $_POST["idNewAdmin"];

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

$verifadmin = $bdd -> prepare("SELECT admin FROM membres WHERE id =".$_SESSION["userID"]);
    $verifadmin -> execute();
    $numadmin = $verifadmin->fetch();
    if ($numadmin['admin'] == 1) {
		$envoimodif = $bdd -> prepare("UPDATE membres SET admin = '1' WHERE id = '$idNewAdmin' ");
		$envoimodif -> execute();
}
 
 
?>
<a href="addadmin.php">Retour gestion administrateurs</a><br/>
<a href="modif1.php">Retour gestion utilisateurs</a>
</div>
</div>
</body>
</html>