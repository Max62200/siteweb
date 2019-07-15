<?php

print( "<style>");
//print( ".pair");
//print( "{ 	background-color: grey; }");


print( "td { width:100px; height:100px; border-color:black ; border-style:solid; 	border-width:1  }");
print( ".black { background-color:black }");

print( "</style>");

print( "Les Boucles imbriquées (loop) <br>" );

print("<table>");

	for ( $ligne = 0 ; $ligne < 10 ; $ligne ++)
	{
		print("<tr>\n");

			for ( $colonne=0 ; $colonne<10; $colonne++ )
			{
				if  ( ($colonne+$ligne)%2==1)
					print( "<td class=\"black\"></td>\n");
				else 
					print( "<td></td>\n");
			}
		
		print("</tr>\n");
	}
print("</table>");

?>