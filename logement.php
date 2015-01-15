<?php require_once("config.php"); 
 $q=$bdd->query("SELECT * FROM logements ORDER BY id desc");
        $ligne = $q-> fetch();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <meta name="description" content="" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Home Switch Home</title>
        <link href="http://fonts.googleapis.com/css?family=Oxygen:400,700,300" rel="stylesheet" type="text/css" />
        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />

    </head>

    <body>

        <div id="wrapper">

            <?php include("header.php"); ?>

            <div id="logements">
                <?php $sql = $bdd->query("SELECT count(*) as nb from logements");
                    $data = $sql->fetch();
                    $nb = $data['nb'];?>
            <?php while ($i < $nb) {
                ?>
            <div id="three-column" class="container">
                
                <div class="tbox1">
                
                    <div class="box-style box-style01">
                
                        <div class="content">
                
                            <div class="image"><img src="images/maison1.jpg" width="324" height="200" alt="" /></div>
                                
                                <h2><?php echo ($ligne['titre_annonce']);?></h2>
                                <p><?php echo ($ligne['description']);?></p>
                                <a href="page-logement.php?idLogement=<?php echo($ligne['id']);?>" class="button">Plus d'informations</a>
                                            <?php $ligne = $q-> fetch();?>
                            </div>
            
                        </div>
        
                    </div><?php $i++ ?>
        
                <div class="tbox2">
            
                    <div class="box-style box-style02">
                
                        <div class="content">

                            <div class="image"><img src="images/maison1.jpg" width="324" height="200" alt="" /></div>
                
                                <h2><?php echo ($ligne['titre_annonce']);?></h2>
                                <p><?php echo ($ligne['description']);?></p>
                                <a href="page-logement.php?idLogement=<?php echo($ligne['id']);?>" class="button">Plus d'informations</a>
                                            <?php $ligne = $q-> fetch();?>
                            </div>
            
                        </div>
        
                    </div><?php $i++ ?>
        
                <div class="tbox3">
            
                    <div class="box-style box-style03">
                
                        <div class="content">

                            <div class="image"><img src="images/maison1.jpg" width="324" height="200" alt="" /></div>
                    
                                <h2><?php echo ($ligne['titre_annonce']);?></h2>
                                <p><?php echo ($ligne['description']);?></p>
                                <a href="page-logement.php?idLogement=<?php echo($ligne['id']);?>" class="button">Plus d'informations</a>
                                            <?php $ligne = $q-> fetch();?>
                            </div>
            
                        </div>
        
                    </div>
    
                </div><?php $i++ ?>
                <?php } ?>
    
            <!--<div id="three-column" class="container">
        
                <div class="tbox1">
            
                    <div class="box-style box-style01">
                
                        <div class="content">
                            <?php $ligne = $q-> fetch();?>
                            <div class="image"><img src="images/maison1.jpg" width="324" height="200" alt="" /></div>
                
                                <h2><?php echo ($ligne['titre_annonce']);?></h2>
                                <p><?php echo ($ligne['description']);?></p>
                                <a href="page-logement.php?idLogement=<?php echo($ligne['id']);?>" class="button">Plus d'informations</a>
                
                            </div>
            
                        </div>
        
                    </div>
        
                <div class="tbox2">
            
                    <div class="box-style box-style02">
            
                        <div class="content">
                    
                            <div class="image"><img src="images/maison1.jpg" width="324" height="200" alt="" /></div>
                                <?php $ligne = $q-> fetch();?>
                                <h2><?php echo ($ligne['titre_annonce']);?></h2>
                                <p><?php echo ($ligne['description']);?></p>
                                <a href="page-logement.php?idLogement=<?php echo($ligne['id']);?>" class="button">Plus d'informations</a>

                            </div>
            
                        </div>
        
                    </div>
        
                <div class="tbox3">
            
                    <div class="box-style box-style03">
                
                        <div class="content">
                                <?php $ligne = $q-> fetch();?>
                            <div class="image"><img src="images/maison1.jpg" width="324" height="200" alt="" /></div>
                    
                                <h2><?php echo ($ligne['titre_annonce']);?></h2>
                                <p><?php echo ($ligne['description']);?></p>
                                <a href="page-logement.php?idLogement=<?php echo($ligne['id']);?>" class="button">Plus d'informations</a>

                            </div>
            
                        </div>
        
                    </div>

                </div>
-->
            </div>
        </div>

        </div>

        <?php include("footer.php"); ?>

    </body>

</html>