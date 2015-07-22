<?php
    include_once("./header.php");
?>

<?php
    $count = 2;
    for ( $i=1 ; $i<=$count ; $i++ ){
        echo "<img src=\"./asset/photo/" . $i . ".JPG\" style=\"width: 100%; height:auto\" id=\"" . $i . "\">";
    }
?>

<?php
    include_once("footer.php");
?>
