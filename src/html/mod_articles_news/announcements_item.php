<?php defined('_JEXEC') or die;
$item_heading = $params->get('item_heading', 'h4');

// Prepare the intro text
// strip tags and cleanup whitespace
$text = strip_tags($item->introtext);
$text = preg_replace('|  +|', ' ', $text);

// word limit check
$max_words = 35;
$words     = explode(' ', $text);
if (count($words) > $max_words)
{
	$words = array_splice($words, 0, $max_words);
	$text  = implode(' ', $words);
	$text .= '...';
}
else
{
	$text = implode(' ', $words);
}
?>
<div class="announcement">
	<em class="announcement-date"><?php echo JHtml::_('date', $item->publish_up, JText::_('DATE_FORMAT_LC3')); ?></em>
	<?php if ($params->get('item_title')) : ?>
		<<?php echo $item_heading; ?> class="announcement-title<?php echo $params->get('moduleclass_sfx'); ?>">
		<?php if ($params->get('link_titles') && $item->link != '') : ?>
			<a href="<?php echo $item->link; ?>">
				<?php echo $item->title; ?>
			</a>
		<?php else : ?>
			<?php echo $item->title; ?>
		<?php endif; ?>
	</<?php echo $item_heading; ?>>
	<?php endif; ?>

	<?php if (!$params->get('intro_only')) : ?>
		<?php echo $item->afterDisplayTitle; ?>
	<?php endif; ?>

	<?php echo $item->beforeDisplayContent; ?>

	<p class="announcement-text"><?php echo $text; ?></p>

	<?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) : ?>
		<p>
			<?php echo '<a class="readmore" href="' . $item->link . '">' . $item->linkText . ' <span class="fa fa-angle-right"></span></a>'; ?>
		</p>
	<?php endif; ?>
</div>