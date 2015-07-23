<!DOCTYPE html>
<html lang="zh_TW">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>網路新生包</title>
<!-- Bootstrap -->
<link href="./asset/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="./asset/carousel.css" rel="stylesheet">
<link href="./asset/bootstrap-social.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/cwtexhei.css" rel="stylesheet">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<style>
    body{font-family: 'cwTeXHei', serif;}
    .table thead>tr>td{vertical-align: middle}
    .table tbody>tr>td{vertical-align: middle}
    .table thead>tr{text-align: center}
    .table tbody>tr{text-align: center}
</style>
</head>
<?php
    global $school_count,$school_name,$school_ref,$school_pdf,$school_fb,$school_web,$school_newcomer;
    global $region_count,$region_name,$region_ref,$region_pdf,$region_fb,$region_web,$region_newcomer;
    global $club_count,$club_name,$club_ref,$club_pdf,$club_fb,$club_web;
    global $page_count,$page_name;
    $school_count=20;
    $school_name=["電機資訊學士班","奈米科學及工程學士學位學程","電子工程學系","電機工程學系","光電工程學系","資訊工程學系","材料科學與工程學系","機械工程學系","土木工程學系","電子物理學系","應用化學系","應用數學系","生物科技學系","資訊管理與財務金融學系","管理科學系","運輸與物流管理學系","工業工程與管理學系","外國語文學系","傳播與科技學系","人文社會學系"];
    $school_ref=["eecshp","nano","ee","dece","ieo","cs","mse","me","cv","ep","ac","math","life","imf","ms","tlm","iem","fl","dct","hs"];
    $school_pdf=["0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0"];
    $school_fb=["","","","","","https://www.facebook.com/pages/%E4%BA%A4%E5%A4%A7%E8%B3%87%E5%B7%A5%E7%B3%BB%E5%AD%B8%E6%9C%83/177647505627076","","","","","","","","","","","","","",""];
    $school_web=["","","","","","http://www.nctucs.tw/","","","","","","","","","","","","","",""];
    $school_newcomer=["","","https://www.facebook.com/groups/452945314853615/","https://www.facebook.com/groups/NCTUECE108/","https://www.facebook.com/groups/882727861774113/","https://www.facebook.com/groups/nctucs108/","","https://www.facebook.com/groups/1576860995907292/","https://www.facebook.com/groups/NCTUCE/","https://www.facebook.com/groups/1589602441288039/","http://www.facebook.com/groups/897179183676350","https://www.facebook.com/groups/1416411995347629/","https://www.facebook.com/groups/299182023539468/","https://www.facebook.com/groups/NCTU.IMF08/","","","https://www.facebook.com/groups/943955008961081/","","",""];
    $region_count=20;
    $region_name=["花蓮校友會","竹苗地區校友會","附中山校友會","蘭友會","彰化校友會","台南地區校友會","中部校友會","高雄屏東校友會","金門校友會","武陵高中校友會","成功景美校友會","松山校友會","內湖高中校友會","嘉義雲林校友會","建中北一女校友會","中和高中校友會","北部校友會","澎湖校友會","桃園地區同鄉會","薇閣校友會"];
    $region_ref=["","","","","","","","","","","","","","","","","","","",""];
    $region_pdf=["0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0"];
    $region_fb=["","","","","","","","","","","","","","","","","","","",""];
    $region_web=["","","","","","","","","","","","","","","","","","","",""];
    $region_newcomer=["","","","","","","","","","","","","","","","","","","",""];
    $club_count=1;
    $club_name=["我是一個社團","","","","","","","","","","","","","","","","","","",""];
    $club_ref=["","","","","","","","","","","","","","","","","","","",""];
    $club_pdf=["0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0"];
    $club_fb=["","","","","","","","","","","","","","","","","","","",""];
    $club_web=["","","","","","","","","","","","","","","","","","","",""];
    $club_newcomer=["","","","","","","","","","","","","","","","","","","",""];
    $page_count=2;
    $page_name=["歡迎小卡","新生地圖","學聯會介紹","學聯會徵才","重要時程","生活資訊","小七團購P1","小七團購P2","特約商店P1","特約商店P2","計算機團購","檯燈團購","行動電源團購","學聯會費繳費事項"];
?>
<body>
<?php
    include_once("./asset/analyticstracking.php")
?>
<!--Navbar-->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./index.php">網路新生包</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="./index.php">Home</a></li>
                        <li class="dropdown active">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">學聯會新生包<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="./slideshow.php">新生包 Slideshow<br>(不建議手機使用)</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">新生包</li>
                                <?php
                                    for( $i=1; $i<=$page_count ; $i++ ){
                                        echo "<li><a href=\"./direct.php#" . $i . "\">" . $page_name[($i-1)] . "</a></li>";
                                    }
                                ?>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">新生通知<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="./download_school.php">系學會</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="./download_region.php">友會</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="./download_club.php">社團資訊</a></li>
                        <li class="active"><a href="./resource.php">初入交大</a></li>
                        <li class="active"><a href="./map.php">交大新生地圖</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href=http://aadm.nctu.edu.tw/registra/freshman/freshman_a.html>交大新生入學指引網</a></li>
                    </ul>
                </div>
            </div>
        </nav>
