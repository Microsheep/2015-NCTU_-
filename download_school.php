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
                    <td>系所</td>
                    <td>線上預覽</td>
                    <td>Download</td>
                    <td>108級新生FB社團</td>
                    <td>系學會 FB</td>
                    <td>系學會網頁</td>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < $school_count; $i++) {
                    if($i%2==0){
                        echo "<tr class=\"success\">";
                    }
                    else{
                        echo "<tr>";
                    }    
                    echo "<td>#" . ($i+1) . "</td>";
                    if($i<18){
                        echo "<td><a href=http://www." . $school[$i]["ref"] . ".nctu.edu.tw>" . $school[$i]["name"] . "</a></td>";
                    }
                    else{
                        echo "<td><a href=http://" . $school[$i]["ref"] . ".nctu.edu.tw>" . $school[$i]["name"] . "</a></td>";
                    }
                    if ($school[$i]["pdf"]!="0"){
                        echo "<td><a href=./pdf_view.php?id=" . $school[$i]["name"] . "-系學會新生通知>";
                        echo "<span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\">\t預覽</span>";
                        echo "</a></td>";
                        echo "<td><a href=./asset/info/" . $school[$i]["name"] . "-系學會新生通知.pdf>";
                        echo "<span class=\"glyphicon glyphicon-download-alt\" aria-hidden=\"true\">\t下載</span>";
                        echo "</a></td>";
                    }
                    else{
                        echo "<td></td><td></td>";
                    }
                    if ($school[$i]["newcomer"]!=""){
                        echo "<td><a class=\"btn btn-social btn-facebook\" href=\"" . $school[$i]["newcomer"] . "\">";
                        echo "<i class=\"fa fa-facebook\"></i>新生社團：" . $school[$i]["name"] . "</a></td>";
                    }
                    else{
                        echo "<td></td>";
                    }
                    if ($school[$i]["fb"]!=""){
                        echo "<td><a href=" . $school[$i]["fb"] . ">";
                        echo "<span class=\"glyphicon glyphicon-education\" aria-hidden=\"true\">\t系學會FB</a></td>";
                    }    
                    else{
                        echo "<td></td>";
                    }  
                    if ($school[$i]["web"]!=""){
                    echo "<td><a href=" . $school[$i]["web"] . ">";
                    echo "<span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\">\t系學會網頁</span></a></td>";
                    }
                    else{
                        echo "<td></td>";
                    }
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
        <h4 style="text-align:center">(註：該欄空白代表該系並未提供該項資料)</h4>
        <h6 style="text-align:center">以上資料由各系學會提供，並不代表學聯會立場</h6>
    </div>
    <div class="col-md-1">
    </div>
</div>
<?php
    include_once("footer.php");
?>
