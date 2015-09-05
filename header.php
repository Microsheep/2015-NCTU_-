<!DOCTYPE html>
<html lang="zh_TW">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="NCTU 網路新生包">
<meta name="keywords" content="NCTU網路新生包,交大網路新生包,網路新生包,交大新生包,NCTU新生包,新生包,交大新生,NCTU新生,交大學聯會,NCTU,交大">
<meta name="author" content="交通大學學聯會資訊部">
<meta name="robots" content="index,follow">
<link rel="shortcut icon" href="./asset/photo/logo.PNG">
<title>網路新生包</title>
<!-- Bootstrap -->
<link href="./asset/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="./asset/micro.css" rel="stylesheet">
<link href="./asset/bootstrap-social.css" rel="stylesheet">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!--Lightbox 2 from is used in this webpage. Lightbox2 is licensed under The MIT License. Created by [Lokesh Dhakar] (http://www.lokeshdhakar.com)-->
<link href="./asset/lightbox2-master/dist/css/lightbox.css" rel="stylesheet">
</head>
<?php
    include_once("./data.php")
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
                        <li class="dropdown active">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">新生必看<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="./resource.php">初入交大</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="./QA_list.php">精選問答集</a></li>
                            </ul>
                        </li>
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
                                <li><a href="./pdf_view.php?id=104年學士班新生入學指引">新生入學指引</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="./download_school.php">系學會</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="./download_region.php">友會</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="./download_club.php">社團資訊</a></li>
                        <li class="active"><a href="./map.php">交大新生地圖</a></li>
                        <li class="dropdown active">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">各類教學<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="./pdf_view.php?id=D2宿網設定教學">D2&宿網設定教學</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="./teach_course.php">選課教學</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href=http://aadm.nctu.edu.tw/registra/freshman/freshman_a.html>新生入學指引網</a></li>
                    </ul>
                </div>
            </div>
        </nav>
