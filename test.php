<?php

include "testlib.php";

$para1="Pour débuter sereinement avec une nouvelle intégration HTML5 et comprendre ses implications, nous allons commencer par le début : la structure globale d'un document.";
$para2="La conception d'une page web en suivant la philosophie du standard HTML5 spécifié par le W3C (ou du standard vivant tel que désigné par le WhatWG) répond à quelques réflexes de base. La structure d'un document (l'imbrication des balises à la racine) est simplfiiée pour répondre aux attentes pragmatiques des intégrateurs et webdesigners.";
$para3="Ce doctype allégé a été mûrement testé et réfléchi : il permet toujours - pour les anciens navigateurs - de rester dans le mode d'interprétation conforme aux standards et d'éviter le mode quirks. On peut remarquer qu'il n'y a pas d'allusion à un quelconque numéro de version. Son rôle est toujours de préciser quel est le type de document qui va suivre, afin de permettre au navigateur de savoir quel langage de la vaste famille SGML il devra interpréter.";
$im = "https://i.ibb.co/mSfHdxP/boulogne-2-3720585.jpg";


$contenu = createTag( 'p', $para1);
$contenu = $contenu.createTag( 'p', $para2);
$contenu = $contenu.createImage( $im );
$contenu = $contenu.createTag( 'p', $para3);



createPageWeb( "ma page web", $contenu );

?>