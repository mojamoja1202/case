CREATE TABLE `case_record` (
  `record_sn` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'sn',
  `record_id` varchar(50) NOT NULL COMMENT '案號',
  `record_name` varchar(255) NOT NULL COMMENT '姓名',
  `record_type` varchar(10) NOT NULL COMMENT '身份別：學生 or 家長 or 教師',
  `record_sex` varchar(10) NOT NULL COMMENT '性別：男 or 女',
  `record_class` varchar(10) NOT NULL COMMENT '班級',
  `record_item` varchar(20) NOT NULL COMMENT '服務項目：親師諮詢 or 家長諮詢 or 資源聯繫',
  `record_condition` varchar(10) NOT NULL COMMENT '個案情形：固定個案 or 臨時個案',
  `record_talk` varchar(1500) NOT NULL COMMENT '訪談內容',
  `record_talktime` datetime NOT NULL COMMENT '訪談時間',
  `record_datetime` datetime NOT NULL COMMENT '建立時間',
  `record_uid` smallint(5) unsigned NOT NULL COMMENT 'uid',
  PRIMARY KEY (`record_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;