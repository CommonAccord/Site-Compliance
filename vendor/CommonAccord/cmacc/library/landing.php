<body style="margin:40;padding:0">
<?php

$lib_path = LIB_PATH;

$dir="Website/landing.md";


echo $dir;

$document = `perl $lib_path/parser.pl $path/$dir`;

$minDocLength = 1;

if (strlen($document) > $minDocLength){ 

//kludge to let html headers have formatting.
 
  echo $document;}
 else {
   echo "Nothing to Show";


}


?>
