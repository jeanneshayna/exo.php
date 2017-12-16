<!--  -->
<!-- La on definit la balise racine de la page web -->
<html>
    <!--  La balise head est la balise des entetes -->
    <head>
        <!-- Le titre de la page qui s'affichera en haut de la fenetre du navigateur -->
        <title>Generateur Tableau Carré (nb lignes = nb colonnes)</title>
    </head>
    
    <!-- Le corps proprement dit de la page qui va contenir le tableau et le formulaire de selection de lignes/colonnes -->
    <body>
        <!-- Titre de niveau 1 de la page HTML (s'affichera en gros caracteres, plus gros que tous les autres) -->
        <h1>Bienvenue dans notre generateur de tableau carré</h1>
        
        
        <!-- Paragraphe descriptif du contenu du formulaire de selection -->
        <p> 
            Ici le nombre de lignes du tableau est egal au nombre de colonnes.
        </p>
        
        <!-- 
            Debut du formulaire. 
            Ici l'attribut method="GET" signifie qu'on utilisera la methode GET  pour la soumission du formulaire
            Cela signifie que les données du formulaire ainsi soumis seront visibles en clair dans l'url de la page
            dans le navigateur
        -->
        <form method="GET">
            <!-- Texte indicatif de la selection -->
            <label>Nombre de Lignes (et de colonnes aussi)</label>
            <select name="nb_lignes_et_colonnes">
            <?php 
                // On donne ici a l'utilisateur de choisir entre 1 a 100 lignes/colonnes pour le tableau a generer
                for ($i = 1 ; $i < 100; $i++){
                    // on affiche pour chaque nombre de 1 a 100 l'option de selection lui correspondant
                    echo '<option>'.$i.'</option>';
                }
            ?>
            </select>
            <!-- Bouton de validation de la selection ou du formulaire de selection -->
            <input type="submit" value="VALIDER">
        </form>
        <?php 
            if (isset($_GET["nb_lignes_et_colonnes"])){
                $nombre_lignes_colonnes = intval($_GET["nb_lignes_et_colonnes"]);
                echo '<table  border="1">';
                echo '<tbody>';
                for ($num_ligne = 0; $num_ligne < $nombre_lignes_colonnes; $num_ligne++){
                    echo '<tr>';
                    for ($num_colonne = 0; $num_colonne < $nombre_lignes_colonnes; $num_colonne++){
                        if (($num_colonne == $num_ligne) && ($num_colonne + $num_ligne == $nombre_lignes_colonnes - 1)){
                            echo '<td bgcolor="green">';
                            echo '  ('.$num_ligne.', '.$num_colonne.')  ';
                            echo '</td>';  
                            continue;
                        } 
                        
                        if ($num_colonne == $num_ligne){
                            echo '<td bgcolor="red">';
                            echo '  ('.$num_ligne.', '.$num_colonne.')  ';
                            echo '</td>';  
                            continue;
                        } 
                        
                        if ($num_colonne + $num_ligne == $nombre_lignes_colonnes - 1){
                            echo '<td bgcolor="blue">';
                            echo '  ('.$num_ligne.', '.$num_colonne.')  ';
                            echo '</td>';  
                            continue;
                        } 
                        
                        echo '<td>';
                        echo '  ('.$num_ligne.', '.$num_colonne.')  ';
                        echo '</td>';    
                    }    
                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
            }
        ?>


<form action="user.php" method="post">
  <input type="submit" name="deconnexion" value="deconnexion">
  </form>
    </body>
</html>

