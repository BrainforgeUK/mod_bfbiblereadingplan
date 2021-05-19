<?php
/**
 * @package      Joomla.Site
 * @subpackage   mod_bfbiblereadingplan
 * @copyright    Copyright 2021 Jonathan Brain. All rights reserved.
 * @license      GNU General Public License version 2 or later; see LICENSE.txt
*/

// No direct access
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Language\Text;
use Joomla\CMS\Layout\LayoutHelper;

$readingplan_day = date('md');
?>
<div id="bfbiblereadingplan-container">
    <div id="bfbiblereadingplan-inner" style="height:400px;overflow:scroll;">
        <?php
        if (empty($items))
        {
            if ($items !== null)
            {
                ?>
                <div style="text-align:center;">
                    <?php
                    echo Text::_('COM_BIBLEREADINGNOTES_NOREADINGPLAN');
                    ?>
                </div>
                <?php
            }
        }
        else
        {
            ?>
            <table class="table table-striped" id="biblereadingnotes-readingplan">
                <tbody>
                    <?php
                    foreach($items as $i=>$item)
                    {
                        $canEdit = true;
                        ?>
                        <tr>
                            <th id="day-<?php echo $item->readingplan_day ?>"
                                <?php echo ($readingplan_day == $item->readingplan_day) ? 'style="color:#ff0000;"' : ''?>
                            >
                                <?php
                                echo bfbiblereadingplanHelperGeneral::formatDayDisplay($item->readingplan_day);
                                ?>
                            </th>

                            <td>
                                <?php
                                $field = 'readingplan_ref1';
                                include __DIR__ . '/default_ref.php';
                                ?>
                            </td>

                            <td>
                                <?php
                                $field = 'readingplan_ref2';
                                include __DIR__ . '/default_ref.php';
                                ?>
                            </td>

                            <td>
                                <?php
                                $field = 'readingplan_ref3';
                                include __DIR__ . '/default_ref.php';
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
        }
        ?>
    </div>
</div>
<script>
    function scroll2day()
    {
        var el = document.getElementById("day-<?php echo ($readingplan_day == '0229') ? '0228' : $readingplan_day; ?>");
        if (el) {
            var mc = document.getElementById("bfbiblereadingplan-inner");
            mc.scrollTop = el.offsetTop;
        }
    }
    window.onload = scroll2day;
</script>
<style>
    #biblereadingnotes-readingplan td {
        text-align: left;
    }

    #biblereadingnotes-readingplan td .btn {
        width: 90%;
        text-align: left;
    }

    @media (max-width:975px) {
        #biblereadingnotes-readingplan tr td:nth-child(2),
        #biblereadingnotes-readingplan tr td:nth-child(3),
        #biblereadingnotes-readingplan tr td:nth-child(4) {
            display: block;
        }
    }
</style>
