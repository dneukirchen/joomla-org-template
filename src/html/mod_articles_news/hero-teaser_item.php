<?php defined('_JEXEC') or die;
$itemHeading  = $params->get('item_heading', 'h4');
$images       = json_decode($item->images);
$urls         = json_decode($item->urls);
$showReadmore = (isset($item->link) && $item->readmore != 0 && $params->get('readmore'));
?>
<article>
	<?php if ($params->get('item_title')) : ?>
		<header>
		<?php if (!empty($images->image_intro)) : ?>
			<img src="<?php echo $images->image_intro; ?>" alt="<?php echo $images->image_intro_alt; ?>"
			     class="hero-teaser-image"/>
		<?php elseif (!empty($images->image_intro_alt)) : ?>
			<span class="icon-rounded icon-rounded-sm icon-shadowed">
					<span class="<?php echo $images->image_intro_alt; ?>"></span>
				</span>
		<?php endif; ?>
		<<?php echo $itemHeading; ?> class="hero-teaser-title">
		<?php if ($params->get('link_titles') && $item->link != '') : ?>
			<a href="<?php echo $item->link; ?>">
				<?php echo $item->title; ?>
			</a>
		<?php else : ?>
			<?php echo $item->title; ?>
		<?php endif; ?>
		</<?php echo $itemHeading; ?>>
		</header>
	<?php endif; ?>
	<div class="hero-teaser-body">
		<?php if (!$params->get('intro_only')) : ?>
			<?php echo $item->afterDisplayTitle; ?>
		<?php endif; ?>
		<?php echo $item->beforeDisplayContent; ?>
		<?php echo $item->introtext; ?>
	</div>
	<?php if (!empty($urls->urla) || $showReadmore) : ?>
		<footer>
			<?php if (!empty($urls->urla)) : ?>
				<a href="<?php echo $urls->urla; ?>"><?php echo (!empty($urls->urlatext) ? $urls->urlatext : $urls->urla); ?> &rarr;</a>
			<?php else : ?>
				<a href="<?php echo $item->link; ?>"><?php echo $item->linkText; ?> &rarr;</a>
			<?php endif; ?>
		</footer>
	<?php endif; ?>
</article>
