
<?php
// exercice 1
$nom_s = "Ntandou Khadyjaminata";
$age_s = 24;
$profesion_s = "Dev Back";
$parcours_s = "etudiant à Simplon en 1864";
$ville_Naissance_s = "Dakar";
echo "Bonjour je m'appelle $nom, j'ai $age ans j'habite à $ville_Naissance et j'exerce le metier $profesion";
// funtion Biographie
function Biographie($nom = "Khady Ba", $age = "23 ans", $profession = "Dévéllopeuse Back-end", $villedenaissance = "Dakar", $parcours = "Brevetée et certifiée en tant que technicienne en mécanique générale. Apprenante en développement back-end.") {
    return "$nom, $age, $profession, $villedenaissance, $parcours";
}

$biographie = Biographie();

echo $biographie;