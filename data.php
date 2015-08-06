<?php
    global $school_count,$school;
    global $region_count,$region;
    global $club_count,$club;
    global $page_count,$page_name;
	$page_count=14;
    $page_name=["歡迎小卡","新生地圖","學聯會介紹","學聯會徵才","重要時程","生活資訊","小七團購P1","小七團購P2","特約商店P1","特約商店P2","計算機團購","檯燈團購","行動電源團購","學聯會費繳費事項"];
    $school_count=20;
    $region_count=20;
    $club_count=4;
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
            "pdf" => "0",
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
            "pdf" => "0",
            "fb" => "",
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
            "pdf" => "0",
            "fb" => "https://www.facebook.com/NCTU.MS",
            "web" => "https://sites.google.com/a/ms.nctu.edu.tw/msstudent/home",
            "newcomer" => ""
        ),
		array(
            "name" => "運輸與物流管理學系",
            "ref" => "tlm",
            "pdf" => "1",
            "fb" => "https://www.facebook.com/NCTUTTM",
            "web" => "",
            "newcomer" => ""
        ),
		array(
            "name" => "工業工程與管理學系",
            "ref" => "iem",
            "pdf" => "0",
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
            "pdf" => "0",
            "fb" => "",
            "web" => "",
            "newcomer" => ""
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
			"newcomer" => ""
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
            "fb" => "",
            "web" => "",
			"newcomer" => "https://www.facebook.com/groups/461459814024127/"
        ),
		array(
            "name" => "北部校友會(北友會)",
            "pdf" => "0",
            "photo" => "0",
            "fb" => "",
            "web" => "",
			"newcomer" => ""
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
            "fb" => "",
            "web" => ""
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
?>
