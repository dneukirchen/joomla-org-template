<?php defined('_JEXEC') or die; ?>
<div class="announcements<?php echo $moduleclass_sfx; ?>">
	<?php foreach ($list as $item) : ?>
		<?php require JModuleHelper::getLayoutPath('mod_articles_news', 'announcements_item'); ?>
	<?php endforeach; ?>
	<a class="read-all" href="https://www.joomla.org/announcements.html">Read all <span class="fa fa-angle-right"></span></a>
</div>