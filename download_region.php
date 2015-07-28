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
                    <td>友會名稱 (友會頁面)</td>
                    <td>圖片文宣</td>
                    <td>線上預覽</td>
                    <td>Download</td>
                    <td>108級新生FB社團</td>
                    <td>友會 FB</td>
                    <td>友會網頁</td>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= $region_count; $i++) {
                    if($i%2==0){
                        echo "<tr class=\"success\">";
                    }
                    else{
                        echo "<tr>";
                    }    
                    echo "<td>#" . $i . "</td>";
                    echo "<td><a href=./region_info.php?id=" . $i . ">" . $region[$i]["name"] . " <i class=\"fa fa-share-square-o\"></i></a></td>";
                    if ($region[$i]["photo"]!="0"){
                        echo "<td><a href=./asset/info/" . $region[$i]["name"] . ".jpg data-lightbox=\"image-" . $i . "\" data-title=\"" . $region[$i]["name"] . "\">點此看圖</a></td>";
                    }
                    else{
                        echo "<td></td>";
                    }
                    if ($region[$i]["pdf"]!="0"){
                        echo "<td><a href=./pdf_view.php?id=" . $region[$i]["name"] . "-友會新生通知>";
                        echo "<span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\">\t預覽</span>";
                        echo "</a></td>";
                        echo "<td><a href=./asset/info/" . $region[$i]["name"] . "-友會新生通知.pdf>";
                        echo "<span class=\"glyphicon glyphicon-download-alt\" aria-hidden=\"true\">\t下載</span>";
                        echo "</a></td>";
                    }
                    else{
                        echo "<td></td><td></td>";
                    }
                    if ($region[$i]["newcomer"]!=""){
                        echo "<td><a class=\"btn btn-social btn-facebook\" href=\"" . $region[$i]["newcomer"] . "\">";
                        echo "<i class=\"fa fa-facebook\"></i>新生社團：" . $region[$i]["name"] . "</a></td>";
                    }
                    else{
                        echo "<td></td>";
                    } 
                    if ($region[$i]["fb"]!=""){
                        echo "<td><a href=" . $region[$i]["fb"] . ">";
                        echo "<span class=\"glyphicon glyphicon-education\" aria-hidden=\"true\">\t友會FB</a></td>";
                    }
                    else{
                        echo "<td></td>";
                    } 
                    if ($region[$i]["web"]!=""){
                        echo "<td><a href=" . $region[$i]["web"] . ">";
                        echo "<span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\">\t友會網頁</span></a></td>";
                    }
                    else{
                        echo "<td></td>";
                    }    
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
        <h4 style="text-align:center">(註：該欄空白代表該友會並未提供該項資料)</h4>
        <h6 style="text-align:center">以上資料由各友會提供，並不代表學聯會立場</h6>
    </div>
    <div class="col-md-1">
    </div>
</div>
<?php
    include_once("footer.php");
?>
