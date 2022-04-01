<?php require 'debut_html.inc.php';?>
<?php require 'header_html.inc.php';?>

    </header>
    <h1 id="accueil" class="titre1"> BIENVENUE SUR LA GALERIE DES TENDANCES MUSICALES</h1>
    <form method="post" action="ajout_image.php" enctype="multipart/form-data">
        <input type="file" name="nouvelleImage" />
        <input type="password" name="mdp" placeholder="Mot de passe" />
        <input type="submit" value="Ajouter" />
    </form>
<?php
if (!empty($_SESSION['messageImage'])) {
    echo '<p>' .$_SESSION['messageImage'].'</p>'."\n";
    $_SESSION['messageImage']=null;
}
?>
 


    <div id="mesImages">
        <?php
        $contenu=dir("image/galerie/");
        while ( $nomElement=$contenu->read() ) {

            if (!is_dir($nomElement) ) {
                $extension = substr($nomElement, -4);
                if ( (strtolower($extension)=='.jpg') || (strtolower($extension)=='.png') ) {
                    // echo $nomElement. "<br>";
                    echo '<img src="image/galerie/'.$nomElement.'" alt="'.$nomElement.'" />'."\n";
                }

            }

            
        }

        $contenu->close();

        ?>
    </div>


    <div class="fin_galerie">
        <p>Retrouve ici les covers les plus tendances de la musique en france</p>
    </div>
    <?php
    require 'footer_html.inc.php';
    require 'fin_html.inc.php';?>