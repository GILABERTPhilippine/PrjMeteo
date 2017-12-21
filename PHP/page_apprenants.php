<?php

session_start();

$iduser = $_COOKIE['name'];

$test = "host=localhost port=5432 dbname=projetmeteo user=nicoadmin password=simplon1987";

$connect = pg_connect($test);

$requete = pg_query("SELECT nom, prenom FROM utilisateur WHERE mail = '".$iduser."';");

$resultat = pg_fetch_array($requete);





?>
<!DOCTYPE html>
<html>

<head>
    <title>Page météo</title>
    <link rel="stylesheet" type="text/css" href="style_apprenants.css">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300" rel="stylesheet">
</head>

<body>
    <!-- Formulaire humeur -->
    <div id="humeur">
        <div id="formulaire">
        	<form id="formulaire_humeur" method="post" action="traitement.php">
            <p id="texte_humeur">De quelle humeur êtes vous?</p>
            <img src="images/ico_rainbow.png" title="arc_en_ciel" class="icones" id="premiere_icone" value="1" onclick="getValueUn();MapIcone()" style="cursor:pointer;" >
            </img>
            <img src="images/ico_soleil.png" title="Soleil" class="icones" value="2" id="deuxieme_icone" onclick="getValueDeux();MapIcone()" style="cursor:pointer;" >
            </img>
            <img src="images/ico_brouillard.png" title="vent" class="icones" value="3" id="troisieme_icone" onclick="getValueTrois();MapIcone()" style="cursor:pointer;" >
            </img>
            <img src="images/ico_pluie.png" title="pluie" class="icones" value="3" id="quatrieme_icone" onclick="getValueQuatre();MapIcone()" style="cursor:pointer;" >
            </img>
            <img src="images/ico_vent.png" title="brouillard" class="icones" value="4" id="cinquieme_icone" onclick="getValueCinq();MapIcone()"  style="cursor:pointer;" >
            </img>
            <img src="images/ico_orage.png" title="orage" class="icones" value="5" id="sizieme_icone" onclick="getValueSix();MapIcone()" style="cursor:pointer;" >
            </img>
            <textarea id="commentaire" placeholder="Commentaire" maxlength="200" value="" id= onclick="javascript:getComment()" style="cursor:pointer;" ></textarea>
            <input id="valider" type="button" value="Valider" onclick="masquer_div('humeur');MapIcone()" />
        </form>

        </div>
    </div>
    <!-- Fin formulaire humeur -->
    <!-- Menu en haut -->
    <div id="logo">
        <img src="images/logo_METEON.png" title="logo" class="logo"></img>
    </div>
    <!-- Fonctionnel mais a refaire en virant toute les div inutiles, on le fera quand on aura le temps -->
    <div id="divinutile"></div>
    <!-- dive a enlever, ce n'est pas une priorité -->
    <div id="divinutile2"></div>
    <!-- Les boutons sont non cliquables tant que l'humeur n'est pas définie car on ne veut pas qu'ils le soient afin d'être sur que les gens remplissent l'humeur -->
    <div id="date"><!-- <a href="index.html" id="bouton_deconnexion">Déconnexion</a> --></div>
    <div id="divinutile3"><!-- <a href="formulaire_modifications.html" id="bouton_modifier">Modifier</a> --></div>
    <!-- Bouton/lien profil (la serrure) a peut etre remettre si jamais on garde la fonctionnalité -->
    <!--<div id="profil">Profil</div>-->
    



    <div id="n_p"><?php echo "$resultat[0] $resultat[1]";?>
        



        <div id="pos_bouton">
            <input type="button" name="boutonmodif" onclick="redirection_modif()" id="bouton_modifier" value="Modifier">
            <input type="button" name="boutondeco" onclick="href='index.php'" id="bouton_deconnexion" value="Déconnexion">
        </div>
    </div>
    <!-- Fin menu du haut -->
    <!-- Menu latéral droit -->
    <div id="menu_lat_droit">
        <div id="j_quatre">J-4</div>
        <div id="j_trois">J-3</div>
        <div id="j_deux">J-2</div>
        <div id="j_un">J-1</div>
        <div id="total">Total des icones</div>
        <div id="humeur_stat">Humeur stat</div>
    </div>
    <!-- Fin menu latéral droit -->
    <!-- Carte meteo Julien et Lukas-->
    <div id="carte">
        <img id=imgMap src="images/map.jpg">
        <div class="wrapper">
            <div class="item1"><img id="ico" title="Je vais bien." src="images/ico_soleil.png">
                <br />
                <span>mon texte</span></div>
            <div class="item2"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span></div>
            <div class="item3"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span></div>
            <div class="item4"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span></div>
            <div class="item5"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span></div>
            <div class="item6"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span></div>
            <div class="item7"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span></div>
            <div class="item8"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span></div>
            <div class="item9"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span></div>
            <div class="item10"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span></div>
            <div class="item11"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span></div>
            <div class="item12"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span></div>
            <div class="item13"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span></div>
            <div class="item14"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span></div>
            <div class="item15"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span></div>
        </div>
    </div>
    <!-- Carte meteo Julien et Lukas-->
    <script type="text/javascript" src="style.js"></script>
</body>

</html>