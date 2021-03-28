<?php
$modversion = array();
$modversion['name'] = "個案管理系統";
$modversion['version'] = "1.0";
$modversion['description'] = "校長很煩";
$modversion['credits'] = "";
$modversion['author'] = "moyamoya(moyamoya@mail.shmps.kh.edu.tw)";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = "0";
$modversion['image'] = "images/logo.png";
$modversion['dirname'] = "case";


//---使用者主選單設定---//
$modversion['hasMain'] = 1;


//---資料表架構---//
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
//個案資料
$modversion['tables'][1] = "case_info";
//訪談紀錄
$modversion['tables'][2] = "case_meeting";
//班級輔導
$modversion['tables'][3] = "case_class";
//家長輔導
$modversion['tables'][4] = "case_family";



//---管理介面設定---//
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";




?>
