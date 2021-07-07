<?php

// Slug function
function slug(string $string): string {
    // Convert all chars to lower
    $string = strtolower($string); 

    $string = preg_replace('/(â|á|ã)/', 'a', $string);
    $string = preg_replace('/(ê|é)/', 'e', $string);
    $string = preg_replace('/(í|Í)/', 'i', $string);
    $string = preg_replace('/(ú)/', 'u', $string);
    $string = preg_replace('/(ó|ô|õ|Ô)/', 'o',$string);
    $string = preg_replace('/(_|\/|!|\?|#)/', '',$string);
    $string = preg_replace('/( )/', '_',$string);
    $string = preg_replace('/ç/','c',$string);
    $string = preg_replace('/(-[-]{1,})/','_',$string);
    $string = preg_replace('/(,)/','_',$string);
    $string=strtolower($string);

    // return a string without spaces or specials chars
    return $string;
}

// Example

$name = "Julião Kataleko";
$slug = slug($name); // Output: juliao_kataleko