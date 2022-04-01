<?php require 'debut_html.inc.php';?>
<?php require 'header_html.inc.php';?>
    

<main>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<h1 id="accueil" class="titre1"> TOP 100 SPOTIFY FRANCE</h1>
<table id="matable" class="strip hover">
<thead>
    <th>Classement</th><th>Nom de la piste</th><th>Auteur </th><th>Nombre de streams</th><th>          Lien spotify du titre</th>
</thead>
<tbody>
    <?php
        $fichier = './donnees/csvjson.json';
        $tabCsvjsonJSON = file_get_contents($fichier);
        $tabCsvjsonPHP = json_decode($tabCsvjsonJSON);

        // echo '<pre>';
        //var_dump($tabFilmsPHP);
        // echo '</pre>';

        //echo '<p>'.$tabFilmsPHP[1]->titre.'par'.$tabFilmsPHP[1]->realisateur.'</p>'."\n";

        for($i=0; $i<count($tabCsvjsonPHP); $i++) {
            echo '<tr>';
            echo '<td>'.$tabCsvjsonPHP[$i]->position.'</td>';
            echo '<td>'.$tabCsvjsonPHP[$i]->__1.'</td>';
            echo '<td>'.$tabCsvjsonPHP[$i]->__2.'</td>';
            echo '<td>'.$tabCsvjsonPHP[$i]->note.'</td>';
            echo '<td>'.$tabCsvjsonPHP[$i]->__3.'</td>';
            echo '</tr>';
        }
        

    ?>

    </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#matable').DataTable({

                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.11.3/i18n/fr_fr.json"
                }
            });

        });
    </script>


    <?php require 'footer_html.inc.php';
    require 'fin_html.inc.php';?>

