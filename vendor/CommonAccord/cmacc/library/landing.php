<body style="margin:40;padding:0">
<?php

$lib_path = LIB_PATH;

$docdir="Doc/Website/Landing.md";

echo $docdir;

$document = `perl $lib_path/parser.pl $docdir`;

$minDocLength = 1;

if (strlen($document) > $minDocLength){ 

//kludge to let html headers have formatting.
 
  echo $document;}
 else {
   echo "Nothing to Show";


}


?>
