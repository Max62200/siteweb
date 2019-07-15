<?php


print( "Les Boucles (loop) <br>" );

$numero_ligne_texte = 1;



print( "<hr>")        ; 

for(  $numero_ligne_texte = 1  ;  // initialisation
      $numero_ligne_texte < 20 ;  // condition
      $numero_ligne_texte += 3    // incrémentation
    )
{
    print(     "page n° ".$numero_ligne_texte );
    print( "<br>")        ; 
} 

print( "<hr>")        ; 

for(  $a = 1  ;  $a < 20 ; $a += 2    )
{
    print(     "valeur de a = ".$a );
    print( "<br>")        ; 
} 

print( "<hr>")        ; 

for(  $a = 20  ;  $a > 1 ; $a -= 3    )
{
    print(     "valeur de a = ".$a );
    print( "<br>")        ; 
} 

print( "<hr>")        ; 

for(  $a = 1  ;  $a < 10 ; $a++    )
{
    print(     "valeur de a = ".(($a*2)+1) );
    print( "<br>")        ; 
} 

print( "<hr>")        ; 

for(  $a = 1  ;  $a < 20 ; $a++    )
{
    if ( $a%2 == 0 )
    {
        print(     "valeur de a = ".$a );
        print( "<br>")        ; 
    }
} 



print( gettype($numero_ligne_texte) ); 

?>
bourgetx5Aujourd'hui à 10:48
<?php


print( "Les Conditions (if) <br>" );

print( "<hr>")        ; 

$nom = "toto";
$age = 16;


print("bonjour ".$nom);
print( "<br>");
print("tu as ".$age." ans" );


print( "<br>");

if (  $age >= 18 )
{
    print( "tu es majeur");
    print( "tu peux rentrer en boite");
}
else
{
    print( "tu es mineur");
}
print( "<br>");

$nom = "titi";
$age = 19;


if (  $age > 9 and $age < 13 and $nom != "toto")
{
    print( "tu peux aller sur le tobogan");
}


print( "<br>");
$argent = 11;
if (  $age > 17 && $argent == 10 )
{
    print( "tu peux acheter ta bouteille");
}


print( "<br>");
$age = 5;
$argent = 1000;
if (  $age > 17 || $argent > 500 )
{
    print( "tu peux quand même acheter ta bouteille");
}









?>