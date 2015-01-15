<?php require_once("config.php"); 
$id  = $_GET["idPersonne"];

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
		$envoidelete = $bdd -> prepare("DELETE FROM membres WHERE id = '$id' ");
		$envoidelete -> execute();
}
 
 
?>

<a href="modif1.php">Retour page administration</a>
</div>
</div>
</body>
</html>