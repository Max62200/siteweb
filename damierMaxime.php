<table border="1px" width=800 height=800> 
<?php 

$maxLigne=15; 
$maxColonne=10; 

for ($ligne=0; $ligne<maxLigne; $ligne++)
{ 
	echo "<tr>\n"; 
	for ($colonne=0;$colonne<$maxColonne; $colonne++)
	{ 
		if(($ligne+$colonne)%2==0) 
			echo "<td>&nbsp</td>\n"; 
		else 
			echo "<td bgcolor=black>&nbsp</td>\n"; 
	}
	echo "</tr>\n"; 

}
?> 
</table>