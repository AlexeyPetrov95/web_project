<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$params =& $this->item->params;
$app = JFactory::getApplication();

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

?>

<h3><?php echo JText::_('COM_CONTENT_MORE_ARTICLES'); ?></h3>
<div class="collection">
<?php
	foreach ($this->link_items as &$item) :
?>
		  		<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catid, $item->language)); ?>" class="collection-item blue-text"><?php echo $item->title; ?></a>
<?php endforeach; ?>
</div>