CREATE TABLE `case_info` (
  `sn` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '索引',
  `id` varchar(255) NOT NULL COMMENT '編號',
  `name` varchar(10) NOT NULL COMMENT '姓名',
  `sex` varchar(10) NOT NULL COMMENT '性別',
  `class` smallint(2) UNSIGNED NOT NULL COMMENT '班級',
  `type` varchar(255) NOT NULL COMMENT '類別',
  `note` varchar(500) NOT NULL COMMENT '備註',
  `year` smallint(2) UNSIGNED NOT NULL COMMENT '建立年',
  `month` smallint(2) UNSIGNED NOT NULL COMMENT '建立月',
  `day` smallint(2) UNSIGNED NOT NULL COMMENT '建立日',
  `hour` smallint(2) UNSIGNED NOT NULL COMMENT '建立時',
  `min` smallint(2) UNSIGNED NOT NULL COMMENT '建立分',
  `ifclose` smallint(1) UNSIGNED NOT NULL COMMENT '是否結案',
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM;

CREATE TABLE `case_meeting` (
  `sn` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '索引',
  `id` varchar(255) NOT NULL COMMENT '個案編號',
  `school` varchar(255) NOT NULL COMMENT '就讀學校',
  `class` varchar(255) NOT NULL COMMENT '班級',
  `phone` varchar(255) NOT NULL COMMENT '聯絡電話',
  `note` varchar(1000) NOT NULL COMMENT '備註',
  `year` smallint(2) UNSIGNED NOT NULL COMMENT '訪談年',
  `month` smallint(2) UNSIGNED NOT NULL COMMENT '訪談月',
  `day` smallint(2) UNSIGNED NOT NULL COMMENT '訪談日',
  `hour` smallint(2) UNSIGNED NOT NULL COMMENT '訪談時',
  `min` smallint(2) UNSIGNED NOT NULL COMMENT '訪談分',
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM;

CREATE TABLE `case_class` (
  `sn` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '索引',
  `id` varchar(255) NOT NULL COMMENT '個案編號',
  `school` varchar(255) NOT NULL COMMENT '班級輔導目標',
  `note` varchar(1000) NOT NULL COMMENT '備註',
  `year` smallint(2) UNSIGNED NOT NULL COMMENT '訪談年',
  `month` smallint(2) UNSIGNED NOT NULL COMMENT '訪談月',
  `day` smallint(2) UNSIGNED NOT NULL COMMENT '訪談日',
  `hour` smallint(2) UNSIGNED NOT NULL COMMENT '訪談時',
  `min` smallint(2) UNSIGNED NOT NULL COMMENT '訪談分',
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM;

CREATE TABLE `case_family` (
  `sn` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '索引',
  `id` varchar(255) NOT NULL COMMENT '個案編號',
  `school` varchar(255) NOT NULL COMMENT '家長輔導目標',
  `note` varchar(1000) NOT NULL COMMENT '備註',
  `year` smallint(2) UNSIGNED NOT NULL COMMENT '訪談年',
  `month` smallint(2) UNSIGNED NOT NULL COMMENT '訪談月',
  `day` smallint(2) UNSIGNED NOT NULL COMMENT '訪談日',
  `hour` smallint(2) UNSIGNED NOT NULL COMMENT '訪談時',
  `min` smallint(2) UNSIGNED NOT NULL COMMENT '訪談分',
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM;

CREATE TABLE `case_outpeople` (
  `sn` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '索引',
  `id` varchar(255) NOT NULL COMMENT '個案編號',
  `school` varchar(255) NOT NULL COMMENT '家長輔導目標',
  `note` varchar(1000) NOT NULL COMMENT '備註',
  `year` smallint(2) UNSIGNED NOT NULL COMMENT '訪談年',
  `month` smallint(2) UNSIGNED NOT NULL COMMENT '訪談月',
  `day` smallint(2) UNSIGNED NOT NULL COMMENT '訪談日',
  `hour` smallint(2) UNSIGNED NOT NULL COMMENT '訪談時',
  `min` smallint(2) UNSIGNED NOT NULL COMMENT '訪談分',
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM;