<?php
include "../../../include/cp_header.php";
include_once XOOPS_ROOT_PATH."/Frameworks/art/functions.php";
include_once XOOPS_ROOT_PATH."/Frameworks/art/functions.admin.php";
//-----函數區-----

//-----顯示區-----
xoops_cp_header();
loadModuleAdminMenu(0);
echo "<h1>本系統由新民國小智障生撰寫，僅遵以下規則：</h1>
	<br>1.匯入學生名單的格式必須符合範本的格式
	<br>2.理論上會有4張對照表分別是分測驗1 & 2 & 3，還有一張總分的對照表
	<br>3.若有問題均可來電(07)341-1888#742 or <a href='mailto:mojamoja1202@gmail.com'>E-main</a>
	<br>4.可匯出有參加縮修的名單；可匯出所有學生的成績；可匯出鑑輔會需要的統計表
	<br>5.匯出之資料為必要之資料，請自行修改成鑑輔會所需要的格式(聽說有的時候會改來改去的)，俺不奉陪這種事情的
	<br><br><br>";
echo $main;
xoops_cp_footer();
?>
