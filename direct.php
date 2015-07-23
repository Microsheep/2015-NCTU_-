<?php
    include_once("./header.php");
?>

<?php
    for ( $i=1 ; $i<=$page_count ; $i++ ){
        echo "<img src=\"./asset/photo/" . $i . ".JPG\" style=\"width: 100%; height:auto\" id=\"" . $i . "\">";
    }
?>

<?php
    include_once("footer.php");
?>
