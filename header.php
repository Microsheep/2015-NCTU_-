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
    body{font-family: 'cwTeXHei', serif;font-weight: 500;}
</style>
</head>
<body>
<?php
    include_once("analyticstracking.php")
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
                                <li><a href="./slideshow.php">新生包 Slideshow</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="./direct.php">新生包 OnePage</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="./map.php">交大新生地圖</a></li>
                        <li class="dropdown active">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">新生通知<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="./download_school.php">系學會</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="./download_region.php">友會</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href=http://aadm.nctu.edu.tw/registra/freshman/freshman_a.html>交大新生入學指引網</a></li>
                    </ul>
                </div>
            </div>
        </nav>
