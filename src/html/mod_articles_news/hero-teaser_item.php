<?php defined('_JEXEC') or die;
$item_heading = $params->get('item_heading', 'h4');
?>
<article>
	<?php if ($params->get('item_title')) : ?>
		<header>
			<<?php echo $item_heading; ?> class="hero-teaser-heading">
				<?php if ($params->get('link_titles') && $item->link != '') : ?>
					<a href="<?php echo $item->link; ?>">
						<?php echo $item->title; ?>
					</a>
				<?php else : ?>
					<?php echo $item->title; ?>
				<?php endif; ?>
			</<?php echo $item_heading; ?>>
		</header>
	<?php endif; ?>
	<div class="hero-teaser-body">
		<?php if (!$params->get('intro_only')) : ?>
			<?php echo $item->afterDisplayTitle; ?>
		<?php endif; ?>
		<?php echo $item->beforeDisplayContent; ?>
		<?php echo $item->introtext; ?>
	</div>
	<?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) : ?>
		<?php echo '<a class="readmore" href="' . $item->link . '">' . $item->linkText . '</a>'; ?>
	<?php endif; ?>
	<footer>

	</footer>
</article>
