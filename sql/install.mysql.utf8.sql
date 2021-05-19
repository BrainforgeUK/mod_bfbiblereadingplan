-- @package   Component for managing Bible reading notes
-- @version   0.0.1
-- @author    http://www.brainforge.co.uk
-- @copyright Copyright (C) 2021 Jonathan Brain. All rights reserved.
-- @license	 GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html

CREATE TABLE IF NOT EXISTS `#__bfbiblereadingplan` (
    `readingplan_id` int(11) NOT NULL AUTO_INCREMENT,
    `readingplan_day` char(4) NOT NULL,
    `readingplan_notes` text,
    `readingplan_ref1` varchar (128),
    `readingplan_notes1` text,
    `readingplan_ref2` varchar (128),
    `readingplan_notes2` text,
    `readingplan_ref3` varchar (128),
    `readingplan_notes3` text,
    `readingplan_state` tinyint(1) NOT NULL DEFAULT 1,
    `readingplan_params` text,
    `readingplan_access` int(10) unsigned NOT NULL DEFAULT 0,
    `readingplan_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
    `readingplan_created_by` int(10) unsigned NOT NULL DEFAULT 0,
    `readingplan_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
    `readingplan_modified_by` int(10) unsigned NOT NULL DEFAULT 0,
    PRIMARY KEY (`readingplan_id`),
    UNIQUE `idx_date` (`readingplan_day`),
    KEY `idx_ref1` (`readingplan_ref1`),
    KEY `idx_ref2` (`readingplan_ref2`),
    KEY `idx_ref3` (`readingplan_ref3`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;
