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
                    <td>社團名稱 (社團頁面)</td>
                    <td>圖片文宣</td>
                    <td>線上預覽</td>
                    <td>Download</td>
                    <td>社團 FB</td>
                    <td>社團網頁</td>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= $club_count; $i++) {
                    if($i%2==1){
                        echo "<tr class=\"success\">";
                    }
                    else{
                        echo "<tr>";
                    }    
                    echo "<td>#" . $i . "</td>";
                    echo "<td><a href=./club_info.php?id=" . $i . ">" . $club[$i]["name"] . " <i class=\"fa fa-share-square-o\"></i></a></td>";
                    if ($club[$i]["photo"]!="0"){
                        echo "<td><a href=./asset/info/" . $club[$i]["name"] . ".jpg data-lightbox=\"image-" . $i . "\" data-title=\"" . $club[$i]["name"] . "\">點此看圖</a></td>";
                    }
                    else{
                        echo "<td></td>";
                    }
                    if ($club[$i]["pdf"]!="0"){
                        echo "<td><a href=./pdf_view.php?id=" . $club[$i]["name"] . ">";
                        echo "<span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\">\t預覽</span>";
                        echo "</a></td>";
                        echo "<td><a href=./asset/info/" . $club[$i]["name"] . ".pdf>";
                        echo "<span class=\"glyphicon glyphicon-download-alt\" aria-hidden=\"true\">\t下載</span>";
                        echo "</a></td>";
                    }
                    else{
                        echo "<td></td><td></td>";
                    }
                    if ($club[$i]["fb"]!=""){
                        echo "<td><a href=" . $club[$i]["fb"] . ">";
                        echo "<span class=\"glyphicon glyphicon-education\" aria-hidden=\"true\">\t社團FB</a></td>";
                    }
                    else{
                        echo "<td></td>";
                    } 
                    if ($club[$i]["web"]!=""){
                        echo "<td><a href=" . $club[$i]["web"] . ">";
                        echo "<span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\">\t社團網頁</span></a></td>";
                    }
                    else{
                        echo "<td></td>";
                    }    
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
        <h4 style="text-align:center">(註：社團資料陸續增加中！該欄空白代表該社團並未提供該項資料。此表並非所有社團，僅為有提供資料之社團)</h4>
        <h6 style="text-align:center">以上資料由各社團提供，並不代表學聯會立場</h6>
    </div>
    <div class="col-md-1">
    </div>
</div>
<?php
    include_once("footer.php");
?>
