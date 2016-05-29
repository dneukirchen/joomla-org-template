<?php defined('_JEXEC') or die;
$colClass = 'col-md-' . ceil(12 / count($list));
?>
<div class="hero-teaser<?php echo $moduleclass_sfx; ?>">
	<?php foreach ($list as $item) : ?>
		<div class="<?php echo $colClass; ?>">
			<?php require JModuleHelper::getLayoutPath('mod_articles_news', 'hero-teaser_item'); ?>
		</div>
	<?php endforeach; ?>
</div>
