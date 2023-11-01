<?php
$filename = '/path/to/foo.txt';

if (file_exists($filename)) {
    echo "Le fichier $filename existe.";
} else {
    echo "Le fichier $filename n'existe pas.";
}

echo "<br/>" ; 
?>

