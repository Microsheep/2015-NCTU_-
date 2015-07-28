<?php
    include_once("./header.php");
?>
<br>
<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
        <table class="table table-hover table-bordered table-condensed">
            <thead>
                <tr class="warning">
                    <td>編號</td>
                    <td>友會名稱</td>
                    <td>線上預覽</td>
                    <td>Download</td>
                    <td>社團 FB</td>
                    <td>社團網頁</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    if($_GET["id"]<=0||$_GET["id"]>$region_count){
                        $id=0;
                    }
                    else{
                        $id=$_GET["id"];
                    }
                    echo "<tr class=\"success\">";
                    echo "<td>#" . $_GET["id"] . "</td>";
                    echo "<td>" . $region[$id]["name"] . "</td>";
                    if ($region[$id]["pdf"]!="0"){
                        echo "<td><a href=./pdf_view.php?id=" . $region[$id]["name"] . ">";
                        echo "<span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\">\t預覽</span>";
                        echo "</a></td>";
                        echo "<td><a href=./asset/info/" . $region[$id]["name"] . ".pdf>";
                        echo "<span class=\"glyphicon glyphicon-download-alt\" aria-hidden=\"true\">\t下載</span>";
                        echo "</a></td>";
                    }
                    else{
                        echo "<td></td><td></td>";
                    }
                    if ($region[$id]["fb"]!=""){
                        echo "<td><a href=" . $region[$id]["fb"] . ">";
                        echo "<span class=\"glyphicon glyphicon-education\" aria-hidden=\"true\">\t社團FB</a></td>";
                    }
                    else{
                        echo "<td></td>";
                    } 
                    if ($region[$id]["web"]!=""){
                        echo "<td><a href=" . $region[$id]["web"] . ">";
                        echo "<span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\">\t社團網頁</span></a></td>";
                    }
                    else{
                        echo "<td></td>";
                    }    
                    echo "</tr>";
            ?>
            </tbody>
        </table>
        <?php
            if($region[$id]["photo"]!="0"){
                echo "<img src=./asset/info/" . $region[$id]["name"] . ".jpg style=\"width: 100%\">";
            }
        ?>
        <br>
        <h4 style="text-align:center">(註：該欄空白代表該友會並未提供該項資料)</h4>
        <h6 style="text-align:center">以上資料由各友會提供，並不代表學聯會立場</h6>
    </div>
    <div class="col-md-1">
    </div>
</div>
<?php
    include_once("footer.php");
?>
