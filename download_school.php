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
                        echo "<td><a href=http://www." . $school_ref[$i] . ".nctu.edu.tw>" . $school_name[$i] . "</a></td>";
                    }
                    else{
                        echo "<td><a href=http://" . $school_ref[$i] . ".nctu.edu.tw>" . $school_name[$i] . "</a></td>";
                    }
                    if ($school_pdf[$i]!="0"){
                        echo "<td><a href=./pdf_view.php?id=" . $school_ref[$i] . ">";
                        echo "<span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\">\t預覽</span>";
                        echo "</a></td>";
                        echo "<td><a href=./asset/info/" . $school_ref[$i] . ".pdf>";
                        echo "<span class=\"glyphicon glyphicon-download-alt\" aria-hidden=\"true\">\t下載</span>";
                        echo "</a></td>";
                    }
                    else{
                        echo "<td></td><td></td>";
                    }
                    if ($school_newcomer[$i]!=""){
                        echo "<td><a class=\"btn btn-social btn-facebook\" href=\"" . $school_newcomer[$i] . "\">";
                        echo "<i class=\"fa fa-facebook\"></i>新生社團：" . $school_name[$i] . "</a></td>";
                    }
                    else{
                        echo "<td></td>";
                    }
                    if ($school_fb[$i]!=""){
                        echo "<td><a href=" . $school_fb[$i] . ">";
                        echo "<span class=\"glyphicon glyphicon-education\" aria-hidden=\"true\">\t系學會FB</a></td>";
                    }    
                    else{
                        echo "<td></td>";
                    }  
                    if ($school_web[$i]!=""){
                    echo "<td><a href=" . $school_web[$i] . ">";
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
    </div>
    <div class="col-md-1">
    </div>
</div>
<?php
    include_once("footer.php");
?>
