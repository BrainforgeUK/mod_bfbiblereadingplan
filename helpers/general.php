<?php
/**
 * @package      Joomla.Site
 * @subpackage   mod_bfbiblereadingplan
 * @copyright    Copyright 2021 Jonathan Brain. All rights reserved.
 * @license      GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Access\Exception\NotAllowed;
use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;

abstract class bfbiblereadingplanHelperGeneral
{
	/**
	 */
	public static function formatDayDisplay($readingplan_day)
	{
		if (empty($readingplan_day))
		{
			return null;
		}

		$dateObj = DateTime::createFromFormat('!m-d',
			substr($readingplan_day, 0, 2) . '-' . substr($readingplan_day, 2, 2));
		return $dateObj->format('jS F');
	}

	/**
	 */
	public static function bibleReferenceLink($reference)
	{
		return 'index.php/la-bible?search=' . urlencode($reference) . '&version=' . $version;
	}
}