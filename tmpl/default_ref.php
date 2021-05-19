<?php
/**
 * @package      Joomla.Site
 * @subpackage   mod_bfbiblereadingplan
 * @copyright    Copyright 2021 Jonathan Brain. All rights reserved.
 * @license      GNU General Public License version 2 or later; see LICENSE.txt
*/

// No direct access
defined('_JEXEC') or die('Restricted access');

/** @var object $item */
/** @var string $field */

?>
<a class="btn btn-primary"
   href="<?php
	echo bfbiblereadingplanHelperGeneral::bibleReferenceLink($item->$field); ?>">
	<?php
    $field = htmlspecialchars($item->$field);
    echo preg_replace('/([^,]) /', '$1&nbsp;', $field);
    ?>
</a>
