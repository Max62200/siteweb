<?php

function createPageWeb(  $title , $contenu )
{
    print( "<!doctype html>\n");
    print( "<html lang=\"fr\"\n>");
    print( "<head>\n");
    print( "  <meta charset=\"utf-8\">\n");
    print( "   <title>".$title."</title>\n");
    print( "  <link rel=\"stylesheet\" href=\"style.css\">\n");
    print( " </head>\n");
    print( "<body>\n");
    print( $contenu."\n");

    print( "</body>\n");
    print( "</html>\n");
} 

function createTag( $tag, $contenu)
{
    return  "<".$tag.">\n".$contenu."\n</".$tag.">\n";
}


function createImage( $image )
{
    return "<img src=\"".$image."\">\n";
}

?>