<?php
/*
聲明：
1.本程式為新民智障生設計製作
2.主要是寫給老婆用的程式
3.主要是個案的訪談紀錄
4.版權自然屬於新民智障生所有

開始撰寫時間：2020/04/27
完成撰寫時間：xxxx/xx/xx
程式設計者：葉大炮
系統架設：xoops

*/





//-----引入區-----
include "../../mainfile.php";
include "../../header.php";


//-----函數區-----

//檢查登入人員身份
function checkUser(){
	global $xoopsUser;
}

//show出未結案個案名單
function showList(){
	global $xoopsDB;
	$main="這邊要透出所有的個案資料及訪談次數<br>";
	$main.="<a href='index.php?op=addcaseForm'>新增個案</a>";
	$main.="<table border='2'>";
	$main.="<tr align='center'><th width='80'>個案編號</th><th>班級</th><th>姓名</th><th>性別</th><th>類型</th><th>個案</th><th>個別諮詢</th><th>班級輔導</th><th>家長諮詢</th><th>導師諮詢</th><th>外部資源</th><th>建立時間</th><th>管理</th></tr>";
	$main.="</table><br>";
	$main.="<a href='index.php?op=export'>表格匯出</a>";


	return $main;
	
}
//印出新增個案表單
function addcaseForm(){
	global $xoopsDB;
	global $xoopsUser;
	$main="這邊是新增個案的表單<br>";
	$main.="<form action='index.php?op=caseSave' method='POST'>";
	$main.="<table border='2'>";
	$main.="<tr><td align='center' width='150'>案號編碼</td><td><input type='radio' name='caseSn' value='caseYes'>開案<input type='radio' name='caseSn' value='caseNo'>不開案</td></tr>";
	$main.="<tr><td align='center'>姓名</td><td><input type='text' name='name' value=$name></td></tr>";
	$main.="<tr><td align='center'>性別</td><td><input type='radio' name='sex' value='男'>男<input type='radio' name='sex' value='女'>女</td></tr>";
	$main.="<tr><td align='center'>班級</td><td><input type='text' name='class' value=$class></td></tr>";
	$main.="<tr><td align='center'>個案類型</td><td><input type='checkbox' name='caseType' value='拒學'>拒學<input type='checkbox' name='caseType' value='中輟'>中輟<input type='checkbox' name='caseType' value='自傷/自殺'>自傷/自殺<input type='checkbox' name='caseType' value='藥物濫用'>藥物濫用<input type='checkbox' name='caseType' value='性侵害'>性侵害<input type='checkbox' name='caseType' value='性騷擾'>性騷擾<input type='checkbox' name='caseType' value='性交易'>性交易<input type='checkbox' name='caseType' value='家庭暴力'>家庭暴力<input type='checkbox' name='caseType' value='哀傷/失落'>哀傷/失落<input type='checkbox' name='caseType' value='家庭/親子'>家庭/親子<input type='checkbox' name='caseType' value='情緒困擾'>情緒困擾<input type='checkbox' name='caseType' value='人際困擾'>人際困擾<input type='checkbox' name='type' value='學習困擾'>學習困擾<input type='checkbox' name='caseType' value='感情困擾'>感情困擾<input type='checkbox' name='caseType' value='一般精神疾患'>一般精神疾患<input type='checkbox' name='caseType' value='特教'>特教<input type='checkbox' name='caseType' value='性別議題'>性別議題<input type='checkbox' name='caseType' value='性議題'>性議題<input type='checkbox' name='caseType' value='未成年懷孕'>未成年懷孕<input type='checkbox' name='caseType' value='霸凌'>霸凌<input type='checkbox' name='caseType' value='網路成癮'>網路成癮<input type='checkbox' name='caseType' value='逃家'>逃家<input type='checkbox' name='caseType' value='幫派'>幫派<input type='checkbox' name='caseType' value='與犯罪之人交往'>與犯罪之人交往<input type='checkbox' name='caseType' value='飆車'>飆車<input type='checkbox' name='caseType' value='偷竊'>偷竊<input type='checkbox' name='caseType' value='傷害'>傷害<input type='checkbox' name='caseType' value='生涯困擾'>生涯困擾,其他<input type='text' name='caseType' size='8'></td></tr>";
	$main.="<tr><td align='center'>備註</td><td><textarea name='note' cols='50' rows='4'>備註…</textarea></td></tr>";
	$main.="<tr><td align='center'>建立年</td><td><input size='3' type='text' name='year' value=$year></td></tr>";
	$main.="<tr><td align='center'>建立月</td><td><input size='3' type='text' name='month' value=$month></td></tr>";
	$main.="<tr><td align='center'>建立日</td><td><input size='3' type='text' name='day' value=$day></td></tr>";
	$main.="<tr><td align='center'>建立時</td><td><input size='3' type='text' name='hour' value=$hour></td></tr>";
	$main.="<tr><td align='center'>案況</td><td><input type='radio' name='condition' value='受輔'>受輔<input type='radio' name='condition' value='結案'>結案<input type='radio' name='condition' value='觀察'>觀察</td></tr>";
	$main.="<tr><td colspan='2' align='center'><input type='submit' value='送出'></tr>";
	$main.="</table>";
	$main.="</form>";


	return $main;
}
//save case的資料
function caseSave(){
	global $xoopsDB;

}

//show出個案資料


//-----判斷區-----
$op=(empty($_REQUEST['op']))?"":$_REQUEST['op'];
$sn=(empty($_REQUEST['sn']))?"":$_REQUEST['sn'];

//各項目轉換
$caseSn=(empty($_REQUEST['caseSn']))?"":$_REQUEST['caseSn'];
$name=(empty($_REQUEST['name']))?"":$_REQUEST['name'];
$sex=(empty($_REQUEST['sex']))?"":$_REQUEST['sex'];
$class=(empty($_REQUEST['class']))?"":$_REQUEST['class'];
$caseType=(empty($_REQUEST['caseType']))?"":$_REQUEST['caseType'];
$note=(empty($_REQUEST['note']))?"":$_REQUEST['note'];
$year=(empty($_REQUEST['year']))?"":$_REQUEST['year'];
$month=(empty($_REQUEST['month']))?"":$_REQUEST['month'];
$day=(empty($_REQUEST['day']))?"":$_REQUEST['day'];
$hour=(empty($_REQUEST['hour']))?"":$_REQUEST['hour'];
$condition=(empty($_REQUEST['condition']))?"":$_REQUEST['condition'];


switch($op){
	case "showList":

	$main=showList();

	break;

	case "addcaseForm":

	$main=addcaseForm();

	break;

	case "caseSave":

	save($place,$test1,$test2,$test3,$absense);
	redirect_header("index.php?op=print&place=$place", 3 ,"輸入完成");

	break;

	default:
	$main=showList();
}


//-----顯示區-----

checkUser();
echo $main;
include "../../footer.php";
?>
