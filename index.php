<?php
/*
個案資料頁面：
1.
2.
3.
4.
5.
6.
*/
//-----引入區-----
include "../../mainfile.php";
include "../../header.php";
//include_once XOOPS_ROOT_PATH . "/modules/tadtools/tad_function.php";
//-----函數區-----

//顯示個案資料頁面
function show(){
	$main="這是個案資料頁面<br><br>";
	return $main;
}


//

//-----判斷區-----
$op=(empty($_REQUEST['op']))?"":$_REQUEST['op'];
$sn=(empty($_REQUEST['sn']))?"":$_REQUEST['sn'];
switch ($op) {
	case 'save':
		save();
		redirect_header("index.php",3,"領取成功");
		break;
	
	default:
		$main=show();
}
//-----顯示區-----
echo $main;
include "../../footer.php";
?>