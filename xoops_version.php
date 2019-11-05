<?php
$modversion = array();
$modversion['name'] = "個案管理系統";
$modversion['version'] = "1.0";
$modversion['description'] = "新民國小愛老婆輔導組";
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
//個案紀錄表
$modversion['tables'][1] = "case_record";

//---管理介面設定---//
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";
?>