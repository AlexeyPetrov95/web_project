<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$templateparams = $app->getTemplate(true)->params;
$images = json_decode($this->item->images);
$urls = json_decode($this->item->urls);
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
JHtml::_('behavior.caption');

// Create shortcut to parameters.
$params = $this->item->params;

?>
<article class="item-page<?php echo $this->pageclass_sfx?>">
<div class="card white">

<div class="card-image waves-effect waves-block waves-light">
<?php  if (isset($images->image_intro) and !empty($images->image_intro)) { ?>
	<?php $imgfloat = (empty($images->float_intro)) ? $params->get('float_intro') : $images->float_intro; ?>
	
	<img
		<?php if ($images->image_intro_caption):
			echo 'class="caption"'.' title="' .htmlspecialchars($images->image_intro_caption) .'"';
		endif; ?>
		src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/>
		<?php } else { ?>
		<img src="images/headers/windows.jpg"/>
	<?php } ?>
</div>

<?php if ($canEdit) : ?>
	<ul class="card-action-buttons">
		<?php if ($canEdit) : ?>
		<li class="edit-icon btn-floating waves-effect waves-light red">
			<?php echo JHtml::_('icon.edit', $this->item, $params, array(), true); ?>
		</li>
		<?php endif; ?>
	</ul>
<?php endif; ?>
	<div class="card-content">
<?php if ($this->params->get('show_page_heading') and $params->get('show_title')) :?>
<hgroup>
<?php endif; ?>

<?php
if (!empty($this->item->pagination) && $this->item->pagination && !$this->item->paginationposition && $this->item->paginationrelative)
{
	echo $this->item->pagination;
}
if ($params->get('show_title')) : ?>
		<h1>
			<?php echo $this->escape($this->item->title); ?>
		</h1>
<?php endif; ?>
<?php if ($this->params->get('show_page_heading') and $params->get('show_title')) :?>
</hgroup>
<?php endif; ?>

	<?php  if (!$params->get('show_intro')) :
		echo $this->item->event->afterDisplayTitle;
	endif; ?>

	<?php echo $this->item->event->beforeDisplayContent; ?>

<?php $useDefList = (($params->get('show_author')) or ($params->get('show_category')) or ($params->get('show_parent_category'))
	or ($params->get('show_create_date')) or ($params->get('show_modify_date')) or ($params->get('show_publish_date'))
	or ($params->get('show_hits'))); ?>


	<?php if (isset ($this->item->toc)) : ?>
		<?php echo $this->item->toc; ?>
	<?php endif; ?>
	

<?php if (isset($urls) AND ((!empty($urls->urls_position) AND ($urls->urls_position == '0')) OR ($params->get('urls_position') == '0' AND empty($urls->urls_position)))
		OR (empty($urls->urls_position) AND (!$params->get('urls_position')))) : ?>

	<?php echo $this->loadTemplate('links'); ?>
<?php endif; ?>

<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND !$this->item->paginationposition AND !$this->item->paginationrelative):
	echo $this->item->pagination;
endif;
?>
	<?php echo $this->item->text; ?>
</div>

<div class="card-action">
<?php if ($params->get('show_parent_category') && $this->item->parent_id != 1) : ?>
			<?php $title = $this->escape($this->item->parent_title);
				$title = ($title) ? $title : JText::_('JGLOBAL_UNCATEGORISED');
				$url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->parent_slug)) . '">' . $title . '</a>'; ?>
			<?php if ($params->get('link_parent_category') and $this->item->parent_slug) : ?>
				<?php echo JText::sprintf('COM_CONTENT_PARENT', $url); ?>
				<?php else : ?>
				<?php echo JText::sprintf('COM_CONTENT_PARENT', $title); ?>
			<?php endif; ?>
<?php endif; ?>

<?php if ($params->get('show_category')) : ?>
			<?php 	$title = $this->escape($this->item->category_title);
					$title = ($title) ? $title : JText::_('JGLOBAL_UNCATEGORISED');
					$url = '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->catslug)).'">'.$title.'</a>';?>
			<?php if ($params->get('link_category') and $this->item->catslug) : ?>
				<?php echo JText::sprintf($url); ?>
				<?php else : ?>
				<?php echo JText::sprintf($title); ?>
			<?php endif; ?>
		
<?php endif; ?>
<?php if ($params->get('show_create_date')) : ?>
		/ <?php echo JText::sprintf(JHtml::_('date', $this->item->created, JText::_('DATE_FORMAT_LC1'))); ?>
<?php endif; ?>

<?php if ($params->get('show_modify_date')) : ?>
		/ <?php echo JText::sprintf(JHtml::_('date', $this->item->modified, JText::_('DATE_FORMAT_LC1'))); ?>
<?php endif; ?>

<?php if ($params->get('show_publish_date')) : ?>
		/ <?php echo JText::sprintf(JHtml::_('date', $this->item->publish_up, JText::_('DATE_FORMAT_LC1'))); ?>
<?php endif; ?>

<?php if ($params->get('show_author') && !empty($this->item->author )) : ?>
		<?php $author = $this->item->author; ?>
		<?php $author = ($this->item->created_by_alias ? $this->item->created_by_alias : $author);?>
		<?php if (!empty($this->item->contact_link ) &&  $params->get('link_author') == true) : ?>
			/ <?php echo JText::sprintf(JHtml::_('link', $this->item->contact_link, $author)); ?>
		<?php else :?>
			/ <?php echo JText::sprintf($author); ?>
		<?php endif; ?>
<?php endif; ?>

<?php if ($params->get('show_hits')) : ?>
		/ <?php echo JText::sprintf('COM_CONTENT_ARTICLE_HITS', $this->item->hits); ?>
<?php endif; ?>

</div>
</div>
<?php // TAGS ?>
<?php if ($params->get('show_tags', 1) && !empty($this->item->tags)) : ?>
	<?php $this->item->tagLayout = new JLayoutFile('joomla.content.tags'); ?>
	<?php echo $this->item->tagLayout->render($this->item->tags->itemTags); ?>
<?php endif; ?>

<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND!$this->item->paginationrelative):
	echo $this->item->pagination;?>
<?php endif; ?>

	<?php if (isset($urls) AND ((!empty($urls->urls_position) AND ($urls->urls_position == '1')) OR ( $params->get('urls_position') == '1'))) : ?>

	<?php echo $this->loadTemplate('links'); ?>
	<?php endif; ?>
<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND $this->item->paginationrelative):
	echo $this->item->pagination;?>
<?php endif; ?>
	<?php echo $this->item->event->afterDisplayContent; ?>
</article>