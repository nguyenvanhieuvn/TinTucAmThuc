<?php
/**
 *------------------------------------------------------------------------------
 * @package Teline V Template - JoomlArt
 * @version 1.0 Feb 1, 2014
 * @author JoomlArt http://www.joomlart.com
 * @copyright Copyright (c) 2004 - 2014 JoomlArt.com
 * @license GNU General Public License version 2 or later;
 *------------------------------------------------------------------------------
 */

defined('_JEXEC') or die;

$aparams = JATemplateHelper::getParams();
$aparams->loadArray($helper->toArray(true));

// get news
$items = JATemplateHelper::getArticles($aparams, 0, $aparams->get('count', 4));
?>

<div class="magazine-links">
	<?php foreach ($items as $item): ?>
	<?php //echo JATemplateHelper::render($item, 'joomla.content.link', array('item' => $item, 'params' => $aparams)); ?>
	<?php echo JLayoutHelper::render('joomla.content.link.default', array('item' => $item, 'params' => $aparams)); ?>
	<?php endforeach ?>
</div>