<?php
echo "entrez une note entre 0 et 100";
$note=fgets(STDIN);
$note=trim($note);
if ($note>90){
    echo "trés bien";
}
elseif ($note>80){
    echo "bien";
}
elseif ($note>70){
    echo "satisfaisant";
}
else {
    echo "à améliorer";
}
?>