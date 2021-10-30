<?php



$str = "A 'quote' is <b>Bold</b> ";
$a ='<a href="https://www.youtube.com">Youtube</a>';

//*htmlenttities

// echo $str ,"<br/><br/>" ;
// echo $a."<br/>";

// echo htmlentities($a,ENT_NOQUOTES);
// echo htmlentities($str,ENT_NOQUOTES);


//* html special characters
$htmlSpe = htmlspecialchars($a,ENT_QUOTES);
echo $htmlSpe;

//* decode  chars 

// $htmlent = htmlentities($str,ENT_NOQUOTES);

// echo $htmlent;
// echo html_entity_decode($htmlent);

// echo htmlspecialchars_decode($htmlSpe);


//* ======== html table 

echo "<pre>";
print_r(get_html_translation_table(HTML_ENTITIES));
echo "</pre>";

?>