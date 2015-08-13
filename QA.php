<?php
    include_once("./header.php");
?>
<br>
<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
        <?php
            if($_GET["id"]<=0||$_GET["id"]>$QA_count){
                $id=0;
            }
            else{
                $id=$_GET["id"];
            }
            if($id!=0){
                echo "<img src=./asset/QA/" . $id . ".jpg style=\"width: 100%\">";
            }
            echo "<br><br>";
            echo "<div class=\"panel panel-success\">";
            echo "<div class=\"panel-heading\">";
            echo "<h3 class=\"panel-title\">" . $QA[$id]["head"] . "</h3>";
            echo "</div>";
            echo "<div class=\"panel-body\">";
            echo "<h4 style=\"line-height: 200%\">" . $QA[$id]["info"] . "</h4>";
            echo "</div>";
            echo "</div>";
        ?>
        <nav>
            <ul class="pager">
                <?php
                    if($id>1 && $id<=($QA_count)){
                        echo "<li class=\"previous\"><a href=\"./QA.php?id=" . ($id-1) . "\"><span aria-hidden=\"true\">&larr;</span>上一篇精選問題</a></li>";
                    }
                    echo "<li class=\"center\"><a href=\"./QA_list.php\">回到精選問題列表</a></li>";
                    if($id>0 && $id<=($QA_count-1)){
                        echo "<li class=\"next\"><a href=\"./QA.php?id=" . ($id+1) . "\">下一篇<span aria-hidden=\"true\">&rarr;</span></a></li>";
                    }
                ?>
            </ul>
        </nav>
    </div>
    <div class="col-md-1">
    </div>
</div>
<?php
    include_once("footer.php");
?>
