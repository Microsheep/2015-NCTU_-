<?php
include_once("./header.php");
?>
<style>
    body{
        background-color: #F0FFF0;
    }
</style>
<br>
<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
        <h1 style="text-align:center"><b>新生提問系統 精選問答集</b></h1><br>
        <div class="list-group">
        <?php
            for ($i = 1; $i <= $QA_count; $i++) {
                if($i%2==1){
                    echo "<h4><a href=\"./QA.php?id=$i\" class=\"list-group-item list-group-item-danger\">" . $QA[$i]["head"] . "</a></h4>";
                }
                else{
                    echo "<a href=\"./QA.php?id=$i\" class=\"list-group-item list-group-item-info\">" . $QA[$i]["head"] . "</a>";
                }
            }
        ?>
        </div>
        <br>
        <h4 style="text-align:center">還有問題想問嗎？ 快使用交大新生提問系統！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://stunion.nctu.edu.tw/question/" class="btn btn-danger">新生提問系統 <i class="fa fa-share-square-o"></i></a></h4>
        <br>
    </div>
    <div class="col-md-1">
    </div>
</div>
<?php
    include_once("footer.php");
?>
