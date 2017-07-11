<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exo PHP function 2</title>
    <script src="jquery.js"></script>
</head>
<body>

<!-- Exo1 -->

<?php

function toto($coucou='test'){
    ?>
    <script>
        alert('<?php echo $coucou ?>');
    </script>
    <?php
}
toto();
?>

<!-- Exo 2 -->

<?php
$tableau=array('colibri', 'perroquet', 'julien');

function bird(&$tableau){
    $tableau[0]= 'wistiti';
    $tableau= array_map ('ucfirst', $tableau);
}

echo $tableau[0];
//$tableau = array_map ( 'strtolower',$tableau);
bird ($tableau);
print_r($tableau);

?>

<!-- Exo 3 -->
<h3>Bataille navale</h3>


<?php

function bataille($string, $int)
{
    $naval = array(
        'a' => array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
        'b' => array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
        'c' => array(1, 1, 1, 1, 1, 2, 1, 1, 1, 1),
        'd' => array(1, 1, 1, 1, 1, 2, 1, 1, 1, 1),
        'e' => array(1, 1, 1, 1, 1, 2, 1, 1, 2, 1),
        'f' => array(1, 1, 1, 1, 1, 1, 1, 1, 2, 1),
        'g' => array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
        'h' => array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
        'i' => array(1, 1, 2, 2, 2, 2, 1, 1, 1, 1),
        'j' => array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1)
    );
    $int = $int-1;
// Fonction qui appelle le tableau  suivi de la clé "$string" (a,b,c...) et de la valeur "$int" (1,1,1,2,1,2)
    switch ($naval[$string][$int]) {
        case 1: // Correspond au "1" de mon tableau qui équivaut à la mer donc rien !
            echo 'Manqué !!!';
            break;
        case 2:  // Correspond au "2" de mon tableau qui équivaut aux bateaux simulé
            echo 'Touché !!!';
            break;
        default: // Si on tire ailleurs que je sur le jeu cela sortira cette erreur !
            echo 'Heuuuu tu as tiré chez les chinois ou les russes là !!!!!!!';
    }
}
bataille('f', 9); // Appel de fonction avec clé valeur (1 , 2, 3, 4 etc) et FEU !!!!
?>

</body>
</html>