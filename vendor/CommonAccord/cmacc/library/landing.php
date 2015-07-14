<body style="margin:40;padding:0">
<?php

$lib_path = LIB_PATH;

$page="Website/landing.md";

$document = `perl $lib_path/parser.pl $path/$page`;

$minDocLength = 1;

if (strlen($document) > $minDocLength){ 
 
  echo $document;}
 else {
   echo "Nothing to Show";

}

?>
