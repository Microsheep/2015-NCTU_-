<?php
    include_once("./header.php");
?>

<?php
    for ( $i=1 ; $i<=$page_count ; $i++ ){
        echo "<img src=\"./asset/photo/" . $i . ".JPG\" style=\"width: 100%; height:auto\" id=\"" . $i . "\">";
    }
?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="./asset/bs-back-to-top.js"></script>

<?php
    include_once("footer.php");
?>
