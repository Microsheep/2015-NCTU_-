<?php
    global $school_count,$school;
    global $region_count,$region;
    global $club_count,$club;
    global $page_count,$page_name;
    global $QA_count,$QA;
    
    $page_count=14;
    $page_name=["歡迎小卡","新生地圖","學聯會介紹","學聯會徵才","重要時程","生活資訊","小七團購P1","小七團購P2","特約商店P1","特約商店P2","計算機團購","檯燈團購","行動電源團購","學聯會費繳費事項"];
    $school_count=20;
    $region_count=20;
    $club_count=46;
    $QA_count=4;
    $school=[
        array(
            "name" => "電機資訊學士班",
            "ref" => "eecshp",
            "pdf" => "1",
            "fb" => "https://www.facebook.com/nctu.eecs",
            "web" => "",
            "newcomer" => "https://www.facebook.com/groups/1571118789823572/"
        ),
        array(
            "name" => "奈米科學及工程學士學位學程",
            "ref" => "nano",
            "pdf" => "1",
            "fb" => "",
            "web" => "http://nanostu.weebly.com/",
            "newcomer" => "https://www.facebook.com/groups/979186498792921/"
        ),
        array(
            "name" => "電子工程學系",
            "ref" => "ee",
            "pdf" => "1",
            "fb" => "",
            "web" => "",
            "newcomer" => "https://www.facebook.com/groups/452945314853615/"
        ),
		array(
            "name" => "電機工程學系",
            "ref" => "dece",
            "pdf" => "0",
            "fb" => "https://www.facebook.com/pages/%E7%AC%AC%E5%9B%9B%E5%B1%86-%E4%BA%A4%E5%A4%A7%E9%9B%BB%E6%A9%9F%E7%B3%BB%E7%B3%BB%E5%AD%B8%E6%9C%83/1427829697481421",
            "web" => "",
            "newcomer" => "https://www.facebook.com/groups/NCTUECE108/"
        ),
		array(
            "name" => "光電工程學系",
            "ref" => "ieo",
            "pdf" => "1",
            "fb" => "https://www.facebook.com/pages/%E4%BA%A4%E5%A4%A7%E5%85%89%E9%9B%BBNCTU_EO/201908786557647",
            "web" => "",
            "newcomer" => "https://www.facebook.com/groups/882727861774113/"
        ),
		array(
            "name" => "資訊工程學系",
            "ref" => "cs",
            "pdf" => "1",
            "fb" => "https://www.facebook.com/pages/%E4%BA%A4%E5%A4%A7%E8%B3%87%E5%B7%A5%E7%B3%BB%E5%AD%B8%E6%9C%83/177647505627076",
            "web" => "http://www.nctucs.tw/",
            "newcomer" => "https://www.facebook.com/groups/nctucs108/"
        ),
		array(
            "name" => "材料科學與工程學系",
            "ref" => "mse",
            "pdf" => "1",
            "fb" => "https://www.facebook.com/msenctu",
            "web" => "",
            "newcomer" => "https://www.facebook.com/groups/858810210833683/"
        ),
		array(
            "name" => "機械工程學系",
            "ref" => "me",
            "pdf" => "0",
            "fb" => "https://www.facebook.com/NCTUME",
            "web" => "",
            "newcomer" => "https://www.facebook.com/groups/1576860995907292/"
        ),
		array(
            "name" => "土木工程學系",
            "ref" => "cv",
            "pdf" => "1",
            "fb" => "",
            "web" => "",
            "newcomer" => "https://www.facebook.com/groups/NCTUCE/"
        ),
		array(
            "name" => "電子物理學系",
            "ref" => "ep",
            "pdf" => "0",
            "fb" => "https://www.facebook.com/NCTU.epstudentorganization",
            "web" => "",
            "newcomer" => "https://www.facebook.com/groups/1589602441288039/"
        ),
		array(
            "name" => "應用化學系",
            "ref" => "ac",
            "pdf" => "1",
            "fb" => "https://www.facebook.com/nctuac105?ref=aymt_homepage_panel",
            "web" => "",
            "newcomer" => "http://www.facebook.com/groups/897179183676350"
        ),
		array(
            "name" => "應用數學系",
            "ref" => "math",
            "pdf" => "1",
            "fb" => "https://www.facebook.com/nctuamsa04",
            "web" => "",
            "newcomer" => "https://www.facebook.com/groups/1416411995347629/"
        ),
		array(
            "name" => "生物科技學系",
            "ref" => "life",
            "pdf" => "1",
            "fb" => "https://www.facebook.com/NCTUDBTassociation",
            "web" => "",
            "newcomer" => "https://www.facebook.com/groups/299182023539468/"
        ),
		array(
            "name" => "資訊管理與財務金融學系",
            "ref" => "imf",
            "pdf" => "1",
            "fb" => "https://www.facebook.com/NCTUIMF",
            "web" => "",
            "newcomer" => "https://www.facebook.com/groups/NCTU.IMF08/"
        ),
		array(
            "name" => "管理科學系",
            "ref" => "ms",
            "pdf" => "1",
            "fb" => "https://www.facebook.com/NCTU.MS",
            "web" => "https://sites.google.com/a/ms.nctu.edu.tw/msstudent/home",
            "newcomer" => "https://www.facebook.com/groups/920804484654075/"
        ),
		array(
            "name" => "運輸與物流管理學系",
            "ref" => "tlm",
            "pdf" => "1",
            "fb" => "https://www.facebook.com/NCTUTTM",
            "web" => "",
            "newcomer" => "https://www.facebook.com/groups/699318900174775/"
        ),
		array(
            "name" => "工業工程與管理學系",
            "ref" => "iem",
            "pdf" => "1",
            "fb" => "https://www.facebook.com/IEMhome",
            "web" => "",
            "newcomer" => "https://www.facebook.com/groups/943955008961081/"
        ),
		array(
            "name" => "外國語文學系",
            "ref" => "fl",
            "pdf" => "1",
            "fb" => "https://www.facebook.com/NCTUFL",
            "web" => "",
            "newcomer" => "https://www.facebook.com/groups/589853544487416/"
        ),
		array(
            "name" => "傳播與科技學系",
            "ref" => "dct",
            "pdf" => "1",
            "fb" => "https://www.facebook.com/CT.Associa",
            "web" => "",
            "newcomer" => "https://www.facebook.com/groups/812464758844298"
        ),
		array(
            "name" => "人文社會學系",
            "ref" => "hs",
            "pdf" => "1",
            "fb" => "https://www.facebook.com/pages/%E4%BA%A4%E5%A4%A7%E4%BA%BA%E7%A4%BE%E7%B3%BB%E7%B3%BB%E5%AD%B8%E6%9C%83/370527856323364",
            "web" => "",
            "newcomer" => "https://www.facebook.com/groups/654514784683998/"
        )
    ];
    $region=[
        array(
            "name" => "無此編號",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => "",
			"newcomer" => ""
        ),
		array(
            "name" => "高雄屏東校友會(雄友會)",
            "pdf" => "1",
            "photo" => "1",
            "fb" => "",
            "web" => "",
			"newcomer" => "https://www.facebook.com/groups/113706852307269/"
        ),
		array(
            "name" => "台南地區校友會(南友會)",
            "pdf" => "1",
            "photo" => "1",
            "fb" => "https://www.facebook.com/NCTU.TN",
            "web" => "",
			"newcomer" => "https://www.facebook.com/groups/151392628256105/"
        ),
		array(
            "name" => "嘉義雲林校友會(雲嘉會)",
            "pdf" => "1",
            "photo" => "1",
            "fb" => "",
            "web" => "",
			"newcomer" => "https://www.facebook.com/groups/NctuYunChia08s/?ref=bookmarks"
        ),
		array(
            "name" => "中部校友會(中友會)",
            "pdf" => "1",
            "photo" => "1",
            "fb" => "",
            "web" => "",
			"newcomer" => ""
        ),
		array(
            "name" => "竹苗地區校友會(竹友會)",
            "pdf" => "1",
            "photo" => "1",
            "fb" => "",
            "web" => "",
			"newcomer" => "https://www.facebook.com/groups/832059893497596/"
        ),
		array(
            "name" => "武陵高中校友會(武友會)",
            "pdf" => "1",
            "photo" => "1",
            "fb" => "",
            "web" => "",
			"newcomer" => "https://www.facebook.com/groups/496795693807577/"
        ),
		array(
            "name" => "桃園地區同鄉會(桃友會)",
            "pdf" => "1",
            "photo" => "1",
            "fb" => "",
            "web" => "",
			"newcomer" => "https://www.facebook.com/groups/496795693807577/"
        ),
		array(
            "name" => "建中北一女校友會(建北會)",
            "pdf" => "1",
            "photo" => "1",
            "fb" => "https://www.facebook.com/pages/2015%E6%B8%85%E4%BA%A4%E5%BB%BA%E5%8C%97%E8%81%AF%E5%90%88%E8%BF%8E%E6%96%B0%E5%AE%BF%E7%87%9F/864703153565678",
            "web" => "",
			"newcomer" => "https://www.facebook.com/groups/461459814024127/"
        ),
		array(
            "name" => "北部校友會(北友會)",
            "pdf" => "1",
            "photo" => "1",
            "fb" => "https://www.facebook.com/NCTUBYsummercamp.alwaysbewithyou",
            "web" => "http://hsuan8546.wix.com/2015nctubeiyoucamp",
			"newcomer" => "https://www.facebook.com/groups/1627966557420363/"
        ),
		array(
            "name" => "附中山校友會",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => "",
			"newcomer" => ""
        ),
		array(
            "name" => "成功景美校友會",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => "",
			"newcomer" => ""
        ),
		array(
            "name" => "蘭友會",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => "",
			"newcomer" => ""
        ),
		array(
            "name" => "彰化校友會",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => "",
			"newcomer" => ""
        ),
		array(
            "name" => "花蓮校友會",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => "",
			"newcomer" => ""
        ),
		array(
            "name" => "澎湖校友會",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => "",
			"newcomer" => ""
        ),
		array(
            "name" => "金門校友會",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => "",
			"newcomer" => ""
        ),
		array(
            "name" => "松山校友會",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => "",
			"newcomer" => ""
        ),
		array(
            "name" => "內湖高中校友會",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => "",
			"newcomer" => ""
        ),
		array(
            "name" => "中和高中校友會",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => "",
			"newcomer" => ""
        ),
		array(
            "name" => "薇閣校友會",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => "",
			"newcomer" => ""
        )
    ];
	$club=[
        array(
            "name" => "無此編號",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => ""
        ),
        array(
            "name" => "模擬聯合國社",
            "pdf" => "1",
            "photo" => "0",
            "fb" => "https://www.facebook.com/nctumun",
            "web" => "http://www.nctumun.org/"
        ),
        array(
            "name" => "柔道社",
            "pdf" => "1",
            "photo" => "0",
            "fb" => "https://www.facebook.com/groups/NCTUJUDO",
            "web" => ""
        ),
        array(
            "name" => "烏克麗麗社",
            "pdf" => "1",
            "photo" => "0",
            "fb" => "https://www.facebook.com/NCTUXNTHUUkuleleClub?fref=nf&pnref=story",
            "web" => "https://www.facebook.com/groups/327026434028600/"
        ),
        array(
            "name" => "AIESEC",
            "pdf" => "1",
            "photo" => "0",
            "fb" => "https://www.facebook.com/AIESECNCTU",
            "web" => ""
        ),
        array(
            "name" => "吉他社",
            "pdf" => "1",
            "photo" => "0",
            "fb" => "https://www.facebook.com/pages/%E4%BA%A4%E5%A4%A7%E5%90%89%E4%BB%96%E7%A4%BE/138414562871595",
            "web" => ""
        ),
        array(
            "name" => "網路安全策進會",
            "pdf" => "1",
            "photo" => "0",
            "fb" => "https://www.facebook.com/NCTUCSC",
            "web" => "https://bamboofox.torchpad.com/"
        ),
        array(
            "name" => "音樂遊戲社",
            "pdf" => "1",
            "photo" => "0",
            "fb" => "https://www.facebook.com/nctumgc",
            "web" => "https://www.facebook.com/groups/387959324734149/"
        ),
        array(
            "name" => "劍道社",
            "pdf" => "1",
            "photo" => "1",
            "fb" => "https://www.facebook.com/nctukendo",
            "web" => "http://web.it.nctu.edu.tw/~nctukendo/qna.html"
        ),
        array(
            "name" => "花輪社",
            "pdf" => "1",
            "photo" => "0",
            "fb" => "https://www.facebook.com/groups/296378307040482/",
            "web" => ""
        ),
        array(
            "name" => "星聲社",
            "pdf" => "1",
            "photo" => "1",
            "fb" => "https://www.facebook.com/pages/%E4%BA%A4%E9%80%9A%E5%A4%A7%E5%AD%B8%E6%98%9F%E8%81%B2%E7%A4%BE/106445842756224",
            "web" => "https://www.facebook.com/groups/540839232683099/"
        ),
        array(
            "name" => "證券研習社",
            "pdf" => "1",
            "photo" => "0",
            "fb" => "https://www.facebook.com/nctusrs",
            "web" => ""
        ),
        array(
            "name" => "魔術社",
            "pdf" => "1",
            "photo" => "0",
            "fb" => "https://www.facebook.com/nctuMagic",
            "web" => ""
        ),
        array(
            "name" => "及人服務團",
            "pdf" => "1",
            "photo" => "0",
            "fb" => "https://www.facebook.com/pages/及人服務團/167637766652407",
            "web" => ""
        ),
        array(
            "name" => "元氣醫護志工團",
            "pdf" => "1",
            "photo" => "0",
            "fb" => "https://www.facebook.com/NCTUGenkiHealthcare",
            "web" => ""
        ),
        array(
            "name" => "馬術社",
            "pdf" => "1",
            "photo" => "0",
            "fb" => "https://www.facebook.com/nctuEC",
            "web" => "https://www.facebook.com/groups/183634768487887/"
        ),
        array(
            "name" => "戲劇社",
            "pdf" => "1",
            "photo" => "1",
            "fb" => "https://www.facebook.com/dramaclubnctu",
            "web" => ""
        ),
        array(
            "name" => "崇德青年志工社",
            "pdf" => "1",
            "photo" => "1",
            "fb" => "https://www.facebook.com/NCTUCDYoungVolunteers",
            "web" => "https://www.facebook.com/groups/758146294242897/"
        ),
        array(
            "name" => "鐵道會",
            "pdf" => "1",
            "photo" => "1",
            "fb" => "https://www.facebook.com/NCTURail",
            "web" => ""
        ),
        array(
            "name" => "信望愛社",
            "pdf" => "1",
            "photo" => "0",
            "fb" => "https://www.facebook.com/nctufhl",
            "web" => "https://www.facebook.com/groups/265268466818755/"
        ),
        array(
            "name" => "登山社",
            "pdf" => "1",
            "photo" => "0",
            "fb" => "https://www.facebook.com/groups/NCTUmountain/",
            "web" => ""
        ),
        array(
            "name" => "彩妝保養社",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/pages/%E4%BA%A4%E9%80%9A%E5%A4%A7%E5%AD%B8%E5%BD%A9%E5%A6%9D%E4%BF%9D%E9%A4%8A%E7%A4%BE/120834974684983",
            "web" => ""
        ),
        array(
            "name" => "漫畫社",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/NCTUComicClub",
            "web" => ""
        ),
        array(
            "name" => "數位音樂創作社",
            "pdf" => "1",
            "photo" => "0",
            "fb" => "https://www.facebook.com/NCTUDMCC",
            "web" => ""
        ),
        array(
            "name" => "柏克萊學生團契",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/koinoniahsinchu",
            "web" => ""
        ),
        array(
            "name" => "管樂團",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/pages/%E4%BA%A4%E9%80%9A%E5%A4%A7%E5%AD%B8%E7%AE%A1%E6%A8%82%E5%9C%98/205591206145512",
            "web" => ""
        ),
        array(
            "name" => "鋼琴社",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/nctuPIANO",
            "web" => ""
        ),
        array(
            "name" => "國樂團",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/ilovenctucmc",
            "web" => ""
        ),
        array(
            "name" => "高爾夫球社",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/NCTUgolf",
            "web" => ""
        ),
        array(
            "name" => "布袋戲社",
            "pdf" => "1",
            "photo" => "0",
            "fb" => "https://www.facebook.com/nctupdcfans",
            "web" => ""
        ),
        array(
            "name" => "咖啡社",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/NCTUcoffee",
            "web" => ""
        ),
        array(
            "name" => "慈青社",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/nctuclubtzuchi",
            "web" => "https://www.facebook.com/groups/nctu.tzuchi/"
        ),
        array(
            "name" => "文化服務團",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/JiaoDaWenFuGeiNiSuoYou",
            "web" => ""
        ),
        array(
            "name" => "焦點POP社",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/focuspopclub",
            "web" => ""
        ),
        array(
            "name" => "竹韻口琴社",
            "pdf" => "1",
            "photo" => "0",
            "fb" => "https://www.facebook.com/nctubmhc",
            "web" => ""
        ),
        array(
            "name" => "動畫社",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/nctuanime",
            "web" => ""
        ),
        array(
            "name" => "證研社",
            "pdf" => "0",
            "photo" => "1",
            "fb" => "",
            "web" => "https://srsnctu.wix.com/srsnctu"
        ),
        array(
            "name" => "桌上遊戲社",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/NCTUBG",
            "web" => ""
        ),
        array(
            "name" => "熱舞社",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/pages/NCTU-Popdance/236512046946",
            "web" => ""
        ),
        array(
            "name" => "橋藝社",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/groups/178089168941413",
            "web" => ""
        ),
        array(
            "name" => "攝影社",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/pages/%E4%BA%A4%E5%A4%A7%E6%94%9D%E5%BD%B1%E7%A4%BE/163474003683212",
            "web" => "https://www.facebook.com/groups/196123263786384/"
        ),
        array(
            "name" => "山服社",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/nctusanfupower",
            "web" => ""
        ),
        array(
            "name" => "單車社",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/werideourlife2015",
            "web" => ""
        ),
        array(
            "name" => "社會企業創思社",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/nctu.strong.2013",
            "web" => ""
        ),
        array(
            "name" => "虹韻世界舞蹈社",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "https://www.facebook.com/pages/%E4%BA%A4%E5%A4%A7%E8%99%B9%E9%9F%BB%E4%B8%96%E7%95%8C%E6%B0%91%E6%97%8F%E8%88%9E%E8%B9%88%E7%A4%BE/841344012609062",
            "web" => "https://www.facebook.com/groups/nctufolkdance/"
        ),
        array(
            "name" => "散打搏擊社",
            "pdf" => "1",
            "photo" => "1",
            "fb" => "",
            "web" => "https://www.facebook.com/groups/130432718550/"
        ),
        array(
            "name" => "諮商中心",
            "pdf" => "1",
            "photo" => "1",
            "fb" => "https://www.facebook.com/counseingcenter",
            "web" => "http://counsel.adm.nctu.edu.tw"
        ),
        array(
            "name" => "",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => ""
        ),
        array(
            "name" => "",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => ""
        ),
        array(
            "name" => "",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => ""
        ),
        array(
            "name" => "",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => ""
        ),
		array(
            "name" => "",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => ""
        )
    ];
    $QA=[
        array(
            "head" => "無此編號",
            "info" => "無此編號"
        ),
        array(
            "head" => "Q1：想脫魯要怎麼做？&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Q2：請問要怎麼交到女朋友？",
            "info" => "
            小編認為呢，到了交大就要有交不到女朋友的準備...噢不是啦！<br>想要脫魯當然要先加入學聯會啊！<br>學聯會的成員超過一百人，其中大半都是暖男/新好男人，也不乏和小編一樣漂亮的正妹（誤），怎麼可以不好好把握呢？<br>當然女孩子也可以嘗試在大馬路上故意讓考卷被吹走（前提是你考好一點）、和同學走在一起的時候踉蹌一下（小心不要跌倒）或是看電影的時候假裝很冷（結果對方沒有帶外套）<br>男孩們也可以嘗試在餐廳裡面搭訕（然後被警察抓走）或是出去玩的時候借人家外套（然後被發現有汗臭味）<br>不過小編還是認為加入學聯會最快啦！（撒花）
            "
        ),
        array(
            "head" => "Q3：請問交大kobe是誰？據說是電子系的… 然後還有obov…我也好像知道桶哥真面目",
            "info" => "NCTULaoda，俗稱 交大kobe ， 身為交大人必然於網上目睹過他的風采，那華麗的文字與精闢的內容，實在是讓身為kobe迷的小編也看得如癡如醉絲絲入扣啊！然而，人稱樹大招風，NCTU老大必然於世間充滿者許多敵人，像是一直要不到球的隊友，或是看老大一直進球罵不了他的教練，所以即便是動用了舉國資源我們還是依然找不到他，實在是難以回答，但我們相信，行到水窮處一定可以坐看雲起時！只要有心哪怕是沒日沒夜地坐在餐廳等，有朝一日也一定可以瞥見老大的身影的！在這邊祝福你，如果找到了也請跟我們回報呦 >_^"
        ),
        array(
            "head" => "Q4：請問交大校地裡面哪一家銀行的提款機比較多?? 要辦哪一家銀行，領錢時才比較不需要手續費呢？",
            "info" => "交大裡面的提款機有郵局、玉山銀行還有兆豐銀行的三種唷！郵局ATM分佈在交大第二餐廳後門、綜一以及中正堂側門位置，玉山銀行在交大女二舍餐廳一樓、綜一以及中正堂側門，另外兆豐銀行的提款機在活動中心一樓唷！<br>如果有機會領到學校的獎學金，辦理玉山銀行或是郵局的帳戶會比較方便，因為有部份時候學校不願意匯錢到這兩家銀行以外的帳號唷！"
        ),
        array(
            "head" => "Q5：請問前輩們建議住宿生自行準備床墊還是購買新生包裡的宣傳上的？因為聽說尺寸不好找…",
            "info" => "這是我們幾位的經驗：如果自行準備床墊，可能會買到尺寸不合的，因為校內宿舍有部份的床柱會影響到床墊的擺放。新生包上的床墊廠商已跟交大合作多年，因此新生宿舍的床墊尺寸廠商很熟悉，可以放心地訂購！升上不同的年級，換了宿舍，床墊的大小尺寸也不會因此變得不合適唷！如果到時候真的遇到其他問題也能很快速的聯絡到廠商幫忙處理，不用擔心萬一出問題沒有辦法解決～"
        ),
        array(
            "head" => "",
            "info" => ""
        ),
        array(
            "head" => "",
            "info" => ""
        )
    ]; 
?>
