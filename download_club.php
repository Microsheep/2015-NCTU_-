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
                    <td>社團名稱</td>
                    <td>線上預覽</td>
                    <td>Download</td>
                    <td>社團 FB</td>
                    <td>社團網頁</td>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < $club_count; $i++) {
                    if($i%2==0){
                        echo "<tr class=\"success\">";
                    }
                    else{
                        echo "<tr>";
                    }    
                    echo "<td>#" . ($i+1) . "</td>";
                    echo "<td>" . $club_name[$i] . "</td>";
                    if ($club_pdf[$i]!="0"){
                        echo "<td><a href=./pdf_view.php?id=" . $club_ref[$i] . ">";
                        echo "<span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\">\t預覽</span>";
                        echo "</a></td>";
                        echo "<td><a href=./asset/info/" . $club_ref[$i] . ".pdf>";
                        echo "<span class=\"glyphicon glyphicon-download-alt\" aria-hidden=\"true\">\t下載</span>";
                        echo "</a></td>";
                    }
                    else{
                        echo "<td></td><td></td>";
                    }
                    if ($club_fb[$i]!=""){
                        echo "<td><a href=" . $club_fb[$i] . ">";
                        echo "<span class=\"glyphicon glyphicon-education\" aria-hidden=\"true\">\t友會FB</a></td>";
                    }
                    else{
                        echo "<td></td>";
                    } 
                    if ($club_web[$i]!=""){
                        echo "<td><a href=" . $club_web[$i] . ">";
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
        <h4 style="text-align:center">(註：該欄空白代表該社團並未提供該項資料。此表並非所有社團，僅為有提供資料之社團)</h4>
    </div>
    <div class="col-md-1">
    </div>
</div>
<?php
    include_once("footer.php");
?>
