<?php


print( "Les Boucles (loop) <br>" );

$numero_ligne_texte = 1;


print( $numero_ligne_texte );
print( "<br>")        ; 

$numero_ligne_texte = $numero_ligne_texte +1;
print( $numero_ligne_texte );
print( "<br>")        ; 

$numero_ligne_texte = $numero_ligne_texte +1;
print( $numero_ligne_texte );
print( "<br>")        ; 

$numero_ligne_texte = $numero_ligne_texte +1;
print( $numero_ligne_texte );
print( "<br>")        ; 

print( "<hr>")        ; 

for( $numero_ligne_texte = 1  ; $numero_ligne_texte<10 ;  $numero_ligne_texte = $numero_ligne_texte +1 )
{
print( $numero_ligne_texte );
print( "<br>")        ; 
} 


print( gettype($numero_ligne_texte) ); 

?>