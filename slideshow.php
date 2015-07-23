<?php
    include_once("./header.php");
?>

<!--Carousel-->
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <?php
            for( $i=2 ; $i<=$page_count ; $i++ ){
                echo "<li data-target=\"#myCarousel\" data-slide-to=\"" . ($i-1) . "\"></li>";
            }
        ?>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="slide" src="./asset/photo/1.JPG" alt="Something went wrong...">
        </div>
        <?php
            for( $i=2 ; $i<=$page_count ; $i++ ){
                echo "<div class=\"item\">";
                echo "<img class=\"slide\" src=\"./asset/photo/" . $i . ".JPG\" alt=\"Something went wrong...\">";
                echo "</div>";
            }
        ?>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<?php
    include_once("footer.php");
?>
