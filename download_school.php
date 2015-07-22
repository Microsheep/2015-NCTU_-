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
                    $name=["電機資訊學士班","奈米科學及工程學士學位學程","電子工程學系","電機工程學系","光電工程學系","資訊工程學系","材料科學與工程學系","機械工程學系","土木工程學系","電子物理學系","應用化學系","應用數學系","生物科技學系","資訊管理與財務金融學系","管理科學系","運輸與物流管理學系","工業工程與管理學系","外國語文學系","傳播與科技學系","人文社會學系"];
                    $ref=["eecshp","nano","ee","dece","ieo","cs","mse","me","cv","ep","ac","math","life","imf","ms","tlm","iem","fl","dct","hs"];
                    $fb=["","","","","","","","","","","","","","","","","","","",""];
                    $web=["","","","","","","","","","","","","","","","","","","",""];
                    $newcomer=["","","https://www.facebook.com/groups/452945314853615/","https://www.facebook.com/groups/NCTUECE108/","https://www.facebook.com/groups/882727861774113/","https://www.facebook.com/groups/nctucs108/","","https://www.facebook.com/groups/1576860995907292/","https://www.facebook.com/groups/NCTUCE/","https://www.facebook.com/groups/1589602441288039/","http://www.facebook.com/groups/897179183676350","https://www.facebook.com/groups/1416411995347629/","https://www.facebook.com/groups/299182023539468/","https://www.facebook.com/groups/NCTU.IMF08/","","","https://www.facebook.com/groups/943955008961081/","","",""];
                    $count=20;
                for ($i = 0; $i < $count; $i++) {
                    if($i%2==0){
                        echo "<tr class=\"success\">";
                    }
                    else{
                        echo "<tr>";
                    }    
                    echo "<td>#" . ($i+1) . "</td>";
                    if($i<18){
                        echo "<td><a href=http://www." . $ref[$i] . ".nctu.edu.tw>" . $name[$i] . "</a></td>";
                    }
                    else{
                        echo "<td><a href=http://" . $ref[$i] . ".nctu.edu.tw>" . $name[$i] . "</a></td>";
                    }
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
