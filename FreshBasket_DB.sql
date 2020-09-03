-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2018 at 01:11 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(2, 'root', 'server', 'test', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"phpmyadmin\",\"test\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"json_structure_or_data\":\"data\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"htmlword_columns\":null,\"json_pretty_print\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}'),
(3, 'root', 'database', 'freshbasket', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"structure_or_data_forced\":\"0\",\"table_select[]\":[\"cart\",\"customers\",\"farmercrops\",\"farmers\",\"orderdetails\",\"orders\",\"payment\",\"purchases\",\"users\",\"vegetables\"],\"table_structure[]\":[\"cart\",\"customers\",\"farmercrops\",\"farmers\",\"orderdetails\",\"orders\",\"payment\",\"purchases\",\"users\",\"vegetables\"],\"table_data[]\":[\"cart\",\"customers\",\"farmercrops\",\"farmers\",\"orderdetails\",\"orders\",\"payment\",\"purchases\",\"users\",\"vegetables\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@DATABASE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"json_structure_or_data\":\"data\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"structure_and_data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"structure_and_data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_procedure_function\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"htmlword_columns\":null,\"json_pretty_print\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_create_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"test\",\"table\":\"medicine\"},{\"db\":\"test\",\"table\":\"employee\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2018-02-06 07:09:22', '{\"collation_connection\":\"utf8mb4_unicode_ci\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `slno` int(11) NOT NULL,
  `custid` int(11) DEFAULT NULL,
  `vegid` int(11) DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `cost` float DEFAULT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`slno`, `custid`, `vegid`, `quantity`, `cost`, `amount`) VALUES
(5, 4, 46, 12, 102, 1224),
(7, 1, 39, 3, 38, 114);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `custid` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`custid`, `name`, `address`, `phone`) VALUES
(1, 'Shreyas', 'Hubli', '9980182848'),
(2, 'Vinayak', 'Dharwad', '9876543210'),
(3, 'Rajat', 'Hubli', '9535981960'),
(4, 'Santosh', 'Sherewad', '9535981960'),
(5, 'asha', 'dharwad', '7894561230');

-- --------------------------------------------------------

--
-- Table structure for table `farmercrops`
--

CREATE TABLE `farmercrops` (
  `slno` int(11) NOT NULL,
  `farmerid` int(11) DEFAULT NULL,
  `vegid` int(11) DEFAULT NULL,
  `fromdate` date DEFAULT NULL,
  `todate` date DEFAULT NULL,
  `qtycansupply` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmercrops`
--

INSERT INTO `farmercrops` (`slno`, `farmerid`, `vegid`, `fromdate`, `todate`, `qtycansupply`) VALUES
(1, 13, 39, '2018-04-04', '2018-04-07', 10000),
(2, 14, 39, '2018-04-04', '2018-04-07', 10000),
(3, 15, 40, '2018-04-03', '2018-04-07', 10000),
(4, 16, 40, '2018-04-03', '2018-04-07', 10000),
(5, 17, 41, '2018-04-03', '2018-04-15', 10000),
(6, 14, 42, '2018-04-03', '2018-04-20', 10000),
(7, 15, 42, '2018-04-03', '2018-04-20', 10000),
(8, 13, 43, '2018-03-30', '2018-04-07', 10000),
(9, 17, 43, '2018-03-30', '2018-04-07', 10000),
(10, 16, 44, '2018-04-04', '2018-04-06', 10000),
(11, 17, 44, '2018-04-04', '2018-04-06', 10000),
(12, 13, 45, '2018-04-01', '2018-04-07', 10000),
(13, 14, 45, '2018-04-01', '2018-04-07', 10000),
(14, 14, 46, '2018-04-01', '2018-04-07', 10000),
(15, 14, 47, '2018-04-01', '2018-04-07', 10000),
(16, 15, 47, '2018-04-01', '2018-04-07', 10000),
(17, 15, 48, '2018-04-02', '2018-04-08', 10000),
(18, 16, 48, '2018-04-02', '2018-04-08', 10000),
(19, 14, 49, '2018-04-03', '2018-04-10', 10000),
(20, 16, 49, '2018-04-03', '2018-04-10', 10000),
(21, 16, 50, '2018-04-01', '2018-05-01', 10000),
(22, 15, 40, '2018-04-05', '2018-04-10', 10000),
(23, 16, 40, '2018-04-05', '2018-04-12', 10000),
(24, 13, 39, '2018-04-08', '2018-04-10', 10000),
(25, 13, 39, '2018-04-08', '2018-04-10', 10000),
(26, 13, 39, '2018-04-09', '2018-04-15', 10000),
(27, 14, 39, '2018-04-09', '2018-04-15', 10000),
(28, 14, 39, '2018-04-11', '2018-04-15', 10000),
(29, 15, 39, '2018-04-11', '2018-04-15', 10000),
(30, 14, 41, '2018-04-09', '2018-04-10', 1),
(31, 15, 41, '2018-04-08', '2018-04-15', 1),
(32, 13, 41, '2018-04-08', '2018-04-15', 10000),
(33, 14, 41, '2018-04-16', '2018-04-20', 10000),
(34, 16, 41, '2018-04-16', '2018-04-22', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `farmerid` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `village` varchar(20) DEFAULT NULL,
  `pincode` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`farmerid`, `name`, `phone`, `village`, `pincode`) VALUES
(13, 'Koushik', '8867212396', 'Belgaum', '580099'),
(14, 'Rajat', '7676585837', 'Banglore', '580009'),
(15, 'Sachin', '8748823000', 'Mysore', '630630'),
(16, 'Kartik', '8748823097', 'Hubli', '580024'),
(17, 'Gaurav', '8792433015', 'Dharwad', '580004'),
(18, 'Vilas', '9632581470', 'Davangere', '580000');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderid` int(11) DEFAULT NULL,
  `vegid` int(11) DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `price` float DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `deliverydate` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderid`, `vegid`, `quantity`, `price`, `amount`, `deliverydate`, `status`) VALUES
(1, 42, 3, 12, 36, '2018-04-04', 'Processed'),
(2, 40, 3, 20, 60, '2018-04-04', 'Processed'),
(3, 39, 2, 38, 76, '2018-04-06', 'Processed'),
(3, 40, 3, 20, 60, '2018-04-06', 'Processed'),
(3, 51, 2, 132, 264, '2018-04-06', 'Processed'),
(3, 44, 4, 22, 88, '2018-04-06', 'Processed'),
(4, 39, 2, 38, 76, '2018-04-06', 'Processed'),
(4, 39, 2, 38, 76, '2018-04-06', 'Processed'),
(5, 39, 2, 38, 76, '2018-04-06', 'Processed'),
(5, 48, 3, 85, 255, '2018-04-06', 'Processed'),
(6, 39, 3, 38, 114, '2018-04-06', 'Processed'),
(6, 39, 4, 38, 152, '2018-04-06', 'Processed'),
(6, 39, 2, 38, 76, '2018-04-06', 'Processed'),
(6, 39, 3, 38, 114, '2018-04-06', 'Processed'),
(6, 40, 3, 20, 60, '2018-04-06', 'Processed'),
(6, 39, 4, 38, 152, '2018-04-06', 'Processed'),
(6, 45, 3, 55, 165, '2018-04-06', 'Processed'),
(6, 44, 3, 22, 66, '2018-04-06', 'Processed'),
(6, 44, 3, 22, 66, '2018-04-06', 'Processed'),
(6, 44, 4, 22, 88, '2018-04-06', 'Processed'),
(6, 47, 2, 12, 24, '2018-04-06', 'Processed'),
(6, 39, 2, 38, 76, '2018-04-06', 'Processed'),
(6, 39, 2, 38, 76, '2018-04-06', 'Processed'),
(8, 39, 3, 38, 114, '2018-04-06', 'Processed'),
(9, 40, 3, 20, 60, '2018-04-06', 'Processed'),
(9, 39, 3, 38, 114, '2018-04-06', 'Processed'),
(10, 39, 3, 38, 114, '2018-04-06', 'Processed'),
(11, 39, 3, 38, 114, '2018-04-06', 'Processed'),
(12, 39, 2, 38, 76, '2018-04-10', 'New Order'),
(13, 44, 2, 22, 44, '2018-04-10', 'New Order'),
(14, 46, 2, 102, 204, '2018-04-10', 'New Order'),
(15, 44, 2, 22, 44, '2018-04-10', 'New Order'),
(15, 39, 2, 38, 76, '2018-04-10', 'New Order'),
(15, 41, 2, 12, 24, '2018-04-10', 'New Order'),
(15, 42, 2, 12, 24, '2018-04-10', 'New Order'),
(16, 41, 5, 12, 60, '2018-04-11', 'Processed'),
(17, 39, 2, 38, 76, '2018-04-16', 'New Order'),
(18, 41, 3, 12, 36, '2018-04-16', 'New Order');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `custid` int(11) DEFAULT NULL,
  `orderid` int(11) NOT NULL,
  `orderdate` date DEFAULT NULL,
  `totalamount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`custid`, `orderid`, `orderdate`, `totalamount`) VALUES
(1, 1, '2018-04-04', 36),
(1, 2, '2018-04-04', 60),
(1, 3, '2018-04-06', 488),
(1, 4, '2018-04-06', 152),
(3, 5, '2018-04-06', 331),
(1, 6, '2018-04-06', 1229),
(1, 8, '2018-04-06', 114),
(1, 9, '2018-04-06', 174),
(1, 10, '2018-04-06', 114),
(1, 11, '2018-04-06', 114),
(1, 12, '2018-04-10', 76),
(1, 13, '2018-04-10', 44),
(5, 14, '2018-04-10', 204),
(1, 15, '2018-04-10', 168),
(1, 16, '2018-04-11', 60),
(1, 17, '2018-04-16', 76),
(1, 18, '2018-04-16', 36);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `transactionid` int(11) NOT NULL,
  `purchaseid` int(11) DEFAULT NULL,
  `paidamount` float DEFAULT NULL,
  `paiddate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`transactionid`, `purchaseid`, `paidamount`, `paiddate`) VALUES
(1, 22, 180000, '2018-04-04'),
(2, 23, 250000, '2018-04-04'),
(3, 1, 350000, '2018-04-04'),
(4, 2, 350000, '2018-04-04'),
(5, 5, 100000, '2018-04-06'),
(6, 6, 100000, '2018-04-06'),
(7, 7, 100000, '2018-04-06'),
(8, 8, 150000, '2018-04-06'),
(9, 28, 18000, '2018-04-09'),
(10, 29, 18000, '2018-04-09'),
(11, 28, 18000, '2018-04-09'),
(12, 29, 18000, '2018-04-09'),
(13, 3, 150000, '2018-04-10'),
(14, 9, 150000, '2018-04-10'),
(15, 4, 150000, '2018-04-10'),
(16, 10, 200000, '2018-04-10'),
(17, 11, 200000, '2018-04-11'),
(18, 12, 200000, '2018-04-11'),
(19, 13, 200000, '2018-04-11'),
(20, 14, 500000, '2018-04-11'),
(21, 15, 500000, '2018-04-11'),
(22, 16, 1000000, '2018-04-11'),
(23, 17, 100000, '2018-04-16'),
(24, 25, 350000, '2018-04-16'),
(25, 27, 18000, '2018-04-16'),
(26, 33, 50, '2018-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `purchaseid` int(11) NOT NULL,
  `farmerid` int(11) DEFAULT NULL,
  `purchasedate` date DEFAULT NULL,
  `vegid` int(11) DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `price` float DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `paymentdate` date DEFAULT NULL,
  `paymentstatus` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`purchaseid`, `farmerid`, `purchasedate`, `vegid`, `quantity`, `price`, `amount`, `paymentdate`, `paymentstatus`) VALUES
(1, 13, '2018-04-04', 39, 10000, 35, 350000, '2018-04-04', 'Paid'),
(2, 14, '2018-04-04', 39, 10000, 35, 350000, '2018-04-04', 'Paid'),
(3, 15, '2018-04-04', 40, 10000, 15, 150000, '2018-04-04', 'Paid'),
(4, 16, '2018-04-04', 40, 10000, 15, 150000, '2018-04-04', 'Paid'),
(5, 17, '2018-04-04', 41, 10000, 10, 100000, '2018-04-04', 'Paid'),
(6, 14, '2018-04-04', 42, 10000, 10, 100000, '2018-04-04', 'Paid'),
(7, 15, '2018-04-04', 42, 10000, 10, 100000, '2018-04-04', 'Paid'),
(8, 13, '2018-04-04', 43, 10000, 15, 150000, '2018-04-04', 'Paid'),
(9, 17, '2018-04-04', 43, 10000, 15, 150000, '2018-04-04', 'Paid'),
(10, 16, '2018-04-04', 44, 10000, 20, 200000, '2018-04-04', 'Paid'),
(11, 17, '2018-04-04', 44, 10000, 20, 200000, '2018-04-04', 'Paid'),
(12, 16, '2018-04-04', 44, 10000, 20, 200000, '2018-04-04', 'Paid'),
(13, 17, '2018-04-04', 44, 10000, 20, 200000, '2018-04-04', 'Paid'),
(14, 13, '2018-04-04', 45, 10000, 50, 500000, '2018-04-04', 'Paid'),
(15, 14, '2018-04-04', 45, 10000, 50, 500000, '2018-04-04', 'Paid'),
(16, 14, '2018-04-04', 46, 10000, 100, 1000000, '2018-04-04', 'Paid'),
(17, 14, '2018-04-04', 47, 10000, 10, 100000, '2018-04-04', 'Paid'),
(18, 15, '2018-04-04', 47, 10000, 10, 100000, '2018-04-04', 'Pending'),
(19, 15, '2018-04-04', 48, 10000, 80, 800000, '2018-04-04', 'Pending'),
(20, 16, '2018-04-04', 48, 10000, 80, 800000, '2018-04-04', 'Pending'),
(21, 14, '2018-04-04', 49, 10000, 18, 180000, '2018-04-04', 'Pending'),
(22, 16, '2018-04-04', 49, 10000, 18, 180000, '2018-04-04', 'Paid'),
(23, 16, '2018-04-04', 50, 10000, 25, 250000, '2018-04-04', 'Paid'),
(24, 13, '2018-04-06', 39, 10000, 35, 350000, '2018-04-06', 'Pending'),
(25, 14, '2018-04-06', 39, 10000, 35, 350000, '2018-04-06', 'Paid'),
(26, 14, '2018-04-09', 49, 1000, 18, 18000, '2018-04-09', 'Pending'),
(27, 16, '2018-04-09', 49, 1000, 18, 18000, '2018-04-09', 'Paid'),
(28, 14, '2018-04-09', 49, 1000, 18, 18000, '2018-04-09', 'Paid'),
(29, 16, '2018-04-09', 49, 1000, 18, 18000, '2018-04-09', 'Paid'),
(30, 15, '2018-04-10', 42, 1000, 10, 10000, '2018-04-10', 'Pending'),
(31, 16, '2018-04-10', 40, 10000, 15, 150000, '2018-04-10', 'Pending'),
(32, 17, '2018-04-11', 41, 10000, 10, 100000, '2018-04-11', 'Pending'),
(33, 14, '2018-04-16', 42, 5, 10, 50, '2018-04-16', 'Paid'),
(34, 15, '2018-04-16', 42, 10000, 10, 100000, '2018-04-16', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `loginid` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`loginid`, `password`, `role`) VALUES
('admin', 'darshan1', 'admin'),
('purchase', 'purchase', 'purchasemanager'),
('sales', 'sales', 'sales'),
('Darshan', 'darshan', 'purchasemanager');

-- --------------------------------------------------------

--
-- Table structure for table `vegetables`
--

CREATE TABLE `vegetables` (
  `vegid` int(11) NOT NULL,
  `vegtype` varchar(20) DEFAULT NULL,
  `vegname` varchar(20) DEFAULT NULL,
  `purchasecost` float DEFAULT NULL,
  `sellingcost` float DEFAULT NULL,
  `stock` float DEFAULT NULL,
  `stockbooked` float DEFAULT NULL,
  `stockavailible` float DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vegetables`
--

INSERT INTO `vegetables` (`vegid`, `vegtype`, `vegname`, `purchasecost`, `sellingcost`, `stock`, `stockbooked`, `stockavailible`, `image`) VALUES
(39, 'cereals', 'Barley', 35, 38, 39978, 24, 39954, 'VegImg/barley.jpg'),
(41, 'leafyvegetables', 'Cabbage', 10, 12, 19995, 5, 19990, 'VegImg/cabbage.jpg'),
(42, 'leafyvegetables', 'Carrot', 10, 12, 31002, 2, 31000, 'VegImg/carrot.jpg'),
(43, 'leafyvegetables', 'CauliFlower', 15, 18, 20000, 0, 20000, 'VegImg/cauli.jpg'),
(44, 'rawveg', 'Chillies', 20, 22, 39993, 11, 39982, 'VegImg/chillies.jpg'),
(45, 'rawveg', 'Garlic', 50, 55, 19997, 0, 19997, 'VegImg/garlic.jpg'),
(46, 'cereals', 'Mustard', 100, 102, 10000, 2, 9998, 'VegImg/mustard.jpg'),
(47, 'rawveg', 'Onion', 10, 12, 19998, 0, 19998, 'VegImg/onion.jpg'),
(48, 'cereals', 'Pea', 80, 85, 19997, 0, 19997, 'VegImg/pea.jpg'),
(50, 'rawveg', 'Tomato', 25, 26, 10000, 0, 10000, 'VegImg/tomato.jpg'),
(51, 'rawveg', 'Beans', 15, 20, 0, 0, 0, 'VegImg/beans.jpg'),
(52, 'rawveg', 'Banana', 10, 12, 0, 0, 0, 'VegImg/carrot.jpg'),
(53, 'rawveg', 'Onion', 15, 18, 0, 0, 0, 'VegImg/onion.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `farmercrops`
--
ALTER TABLE `farmercrops`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`farmerid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchaseid`);

--
-- Indexes for table `vegetables`
--
ALTER TABLE `vegetables`
  ADD PRIMARY KEY (`vegid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `farmercrops`
--
ALTER TABLE `farmercrops`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `farmerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `transactionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `purchaseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `vegetables`
--
ALTER TABLE `vegetables`
  MODIFY `vegid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
