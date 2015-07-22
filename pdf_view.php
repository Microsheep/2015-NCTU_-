<?php
    include_once("./header.php");
?>

<iframe src="./asset/pdf_view/web/viewer.html?file=../../info/<?php echo $_GET["id"]?>.pdf" width="100%" height="1000px"></iframe>

<?php
    include_once("footer.php");
?>
