<?php


print( "Les Conditions (if) <br>" );

print( "<hr>")        ; 

$nom = "toto";
$age = 19;
$argent = 5.50;

print("bonjour ".$nom);
print( "<br>");
print("tu as ".$age." ans" );

print( "<br>");

if ( $age > 17 )
{
    print("tu es majeur");
    if ( $argent > 9)
    {
        print(" tu peux acheter ta bouteille");
    }
    else
        print("pas de chance !!!");

}
else
{
    print("tu es mineur");
    if ( $argent > 500)
    {
        print(" mais tu peux quand même avoir une bouteille");
    }
    else
         print("pas de chance !!!");

}

print( "<br>");
print( "<lr>");


if ( $age > 17 && $argent > 9)
{
    print("tu es majeur");
    print(" tu peux acheter ta bouteille");
}
elseif ( $argent > 500 )
{
    print("tu es mineur");
    print(" mais tu peux quand même avoir une bouteille");
}
else
    print("pas de chance !!!");


?>