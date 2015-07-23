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
                    <td>108級新生FB社團</td>
                    <td>友會 FB</td>
                    <td>友會網頁</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $name=["南友會"];
                    $ref=["tainan"];
                    $fb=[""];
                    $web=[""];
                    $newcomer=[""];
                    $count=1;
                for ($i = 0; $i < $count; $i++) {
                    if($i%2==0){
                        echo "<tr class=\"success\">";
                    }
                    else{
                        echo "<tr>";
                    }    
                    echo "<td>#" . ($i+1) . "</td>";
                    echo "<td>" . $name[$i] . "</td>";
                    echo "<td><a href=./pdf_view.php?id=" . $ref[$i] . ">";
                    echo "<span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\">\t預覽</span>";
                    echo "</a></td>";
                    echo "<td><a href=./asset/info/" . $ref[$i] . ".pdf>";
                    echo "<span class=\"glyphicon glyphicon-download-alt\" aria-hidden=\"true\">\t下載</span>";
                    echo "</a></td>"; 
                    echo "<td><a class=\"btn btn-social btn-facebook\" href=\"" . $newcomer[$i] . "\">";
                    echo "<i class=\"fa fa-facebook\"></i>新生社團：" . $name[$i] . "</a></td>";
                    echo "<td><a href=" . $fb[$i] . ">";
                    echo "<span class=\"glyphicon glyphicon-education\" aria-hidden=\"true\">\t系學會FB</a></td>";
                    echo "<td><a href=" . $web[$i] . ">";
                    echo "<span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\">\t系學會網頁</span></a></td>";
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-1">
    </div>
</div>
<?php
    include_once("footer.php");
?>
