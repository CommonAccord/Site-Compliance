
<?php

$lib_path = LIB_PATH;

$dir=LANDING_MD;


$document = `perl $lib_path/parser.pl $path/$dir`;

$minDocLength = 1;

if (strlen($document) > $minDocLength){ 


//kludge to let html headers have formatting.
 
  echo $document;}
 else {
   echo "Nothing to Show";


}
?>
