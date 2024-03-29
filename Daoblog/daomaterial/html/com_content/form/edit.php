<?php

// no direct access
defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.calendar');
JHtml::_('behavior.formvalidation');

// Create shortcut to parameters.
$params = $this->state->get('params');
//$images = json_decode($this->item->images);
//$urls = json_decode($this->item->urls);

// This checks if the editor config options have ever been saved. If they haven't they will fall back to the original settings.
$editoroptions = isset($params->show_publishing_options);
if (!$editoroptions):
	$params->show_urls_images_frontend = '0';
endif;
?>

<script type="text/javascript">
	Joomla.submitbutton = function(task)
	{
		if (task == 'article.cancel' || document.formvalidator.isValid(document.getElementById('adminForm')))
		{
			<?php echo $this->form->getField('articletext')->save(); ?>
			Joomla.submitform(task);
		}
	}
</script>
<div class="card white">
	<div class="card-content">
<div class="edit item-page<?php echo $this->pageclass_sfx; ?>">
<?php if ($params->get('show_page_heading')) : ?>
<h1>
	<?php echo $this->escape($params->get('page_heading')); ?>
</h1>
<?php endif; ?>

<form action="<?php echo JRoute::_('index.php?option=com_content&a_id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="adminForm" class="form-validate">
	<fieldset>
		<legend><?php echo JText::_('COM_CONTENT_ARTICLE_CONTENT'); ?></legend>

			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('title'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('title'); ?>
				</div>
			</div>

		<?php if (is_null($this->item->id)):?>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('alias'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('alias'); ?>
				</div>
			</div>
		<?php endif; ?>

			<div class="btn-group">
				<button type="button" class="btn btn-primary" onclick="Joomla.submitbutton('article.save')">
					<?php echo JText::_('JSAVE') ?>
				</button>
				<button type="button" class="btn" onclick="Joomla.submitbutton('article.cancel')">
					<?php echo JText::_('JCANCEL') ?>
				</button>
			</div>

			<?php echo $this->form->getInput('articletext'); ?>

	</fieldset>
	<?php if ($params->get('show_urls_images_frontend')  ) : ?>
	<fieldset>
		<legend><?php echo JText::_('COM_CONTENT_IMAGES_AND_URLS'); ?></legend>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('image_intro', 'images'); ?>
					<?php echo $this->form->getInput('image_intro', 'images'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('image_intro_alt', 'images'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('image_intro_alt', 'images'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('image_intro_caption', 'images'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('image_intro_caption', 'images'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('float_intro', 'images'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('float_intro', 'images'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('image_fulltext', 'images'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('image_fulltext', 'images'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('image_fulltext_alt', 'images'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('image_fulltext_alt', 'images'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('image_fulltext_caption', 'images'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('image_fulltext_caption', 'images'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('float_fulltext', 'images'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('float_fulltext', 'images'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('urla', 'urls'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('urla', 'urls'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('urlatext', 'urls'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('urlatext', 'urls'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="input-field">
					<?php echo $this->form->getInput('targeta', 'urls'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('urlb', 'urls'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('urlb', 'urls'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('urlbtext', 'urls'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('urlbtext', 'urls'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="input-field">
					<?php echo $this->form->getInput('targetb', 'urls'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('urlc', 'urls'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('urlc', 'urls'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('urlctext', 'urls'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('urlctext', 'urls'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="input-field">
					<?php echo $this->form->getInput('targetc', 'urls'); ?>
				</div>
			</div>
	</fieldset>
	<?php endif; ?>

	<fieldset>
		<legend><?php echo JText::_('COM_CONTENT_PUBLISHING'); ?></legend>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('catid'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('catid'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('tags'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('tags'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('created_by_alias'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('created_by_alias'); ?>
				</div>
			</div>

			<?php if ($this->item->params->get('access-change')) : ?>
				<div class="control-group">
					<div class="control-label">
						<?php echo $this->form->getLabel('state'); ?>
					</div>
					<div class="input-field">
						<?php echo $this->form->getInput('state'); ?>
					</div>
				</div>
				<div class="control-group">
					<div class="control-label">
						<?php echo $this->form->getLabel('featured'); ?>
					</div>
					<div class="input-field">
						<?php echo $this->form->getInput('featured'); ?>
					</div>
				</div>
				<div class="control-group">
					<div class="control-label">
						<?php echo $this->form->getLabel('publish_up'); ?>
					</div>
					<div class="input-field">
						<?php echo $this->form->getInput('publish_up'); ?>
					</div>
				</div>
				<div class="control-group">
					<div class="control-label">
						<?php echo $this->form->getLabel('publish_down'); ?>
					</div>
					<div class="input-field">
						<?php echo $this->form->getInput('publish_down'); ?>
					</div>
				</div>
			<?php endif; ?>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('access'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('access'); ?>
				</div>
			</div>
			<?php if (is_null($this->item->id)):?>
				<div class="control-group">
					<div class="control-label">
					</div>
					<div class="input-field">
						<?php echo JText::_('COM_CONTENT_ORDERING'); ?>
					</div>
				</div>
			<?php endif; ?>
	</fieldset>

	<fieldset>
		<legend><?php echo JText::_('JFIELD_LANGUAGE_LABEL'); ?></legend>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('language'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('language'); ?>
				</div>
			</div>
	</fieldset>

	<fieldset>
		<legend><?php echo JText::_('COM_CONTENT_METADATA'); ?></legend>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('metadesc'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('metadesc'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('metakey'); ?>
				</div>
				<div class="input-field">
					<?php echo $this->form->getInput('metakey'); ?>
				</div>
			</div>

		<input type="hidden" name="task" value="" />
		<input type="hidden" name="return" value="<?php echo $this->return_page;?>" />
		<?php if ($this->params->get('enable_category', 0) == 1) : ?>
			<input type="hidden" name="jform[catid]" value="<?php echo $this->params->get('catid', 1);?>"/>
		<?php endif;?>
		<?php echo JHtml::_('form.token'); ?>
	</fieldset>
</form>
</div>
</div></div>