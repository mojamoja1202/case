<?php

//-----引入區-----
include "../../mainfile.php";
include "../../header.php";
//-----函數區-----
function showCase(){
	$main="這是個案管理系統，功能如下：<br>";
	$main.="1.案號是依據個案類型、性別及班級劃分<br>";
	$main.="2.可以將期間的資料整理匯出";

	return $main;
}

//-----判斷區-----
$op=(empty($_REQUEST['op']))?"":$_REQUEST['op'];
$sn=(empty($_REQUEST['sn']))?"":$_REQUEST['sn'];

switch($op){
	case "addCase":

	break;
	case "":
	printContent($place);
	break;
	case "save":
	save($place,$test1,$test2,$test3,$absense);
	redirect_header("index.php?op=print&place=$place", 3 ,"輸入完成");
	break;
	default:
	$main=showCase();
}



//-----顯示區-----
echo $main;
include "../../footer.php";
?>