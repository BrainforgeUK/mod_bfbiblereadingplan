<?php
/**
 * @package      Joomla.Site
 * @subpackage   mod_bfbiblereadingplan
 * @copyright    Copyright 2021 Jonathan Brain. All rights reserved.
 * @license      GNU General Public License version 2 or later; see LICENSE.txt
 */

use Joomla\CMS\Factory;

// no direct access
defined('_JEXEC') or die;

$db = Factory::getDbo();

$query = $db->getQuery(true);
$query->select(
		'a.readingplan_id, a.readingplan_day, a.readingplan_notes,' .
		'a.readingplan_notes1, a.readingplan_notes2, a.readingplan_notes3,' .
		'a.readingplan_ref1, a.readingplan_ref2, a.readingplan_ref3'
);
$query->from('#__bfbiblereadingplan AS a');
$db->setQuery($query);

$items = $db->loadObjectList();

require_once(__DIR__ . '/helpers/general.php');

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_bfbiblereadingplan', $params->get('layout', 'default'));
