<?php
$nom_s = "Ntandou Khadyjaminata";
$age_s = 24;
$profesion_s = "Dev Back";
$parcours_s = "etudiant à Simplon en 1864";
$ville_Naissance_s = "Dakar";
echo "Bonjour je m'appelle $nom, j'ai $age ans j'habite à $ville_Naissance et j'exerce le metier $profesion";
function biographie($nom_J= "Jeanne",$age_J= 25, $profession_J="etudiante",$ville_de_naissance_J="Thies",$parcours_J="jai eu mon bac en 2018 aprés cela j'ai fais 3ans à l'université au departement physique chimie aprés cela je suis en formation en developpement backend"){
    return "$nom_J,$age_J,$profession_J,$parcours_J";
 }
 $biographie = biographie("Jeanne",25,"etudiante","thies","jai eu mon bac en 2018 aprés cela j'ai fais 3ans à l'université au departement physique chimie aprés cela je suis en formation en developpement backend");
 
 echo $biographie;