<?php defined('_JEXEC') or die;

/**
 * Module chrome default
 *
 * @param $module
 * @param $params
 * @param $attribs
 */
function modChrome_default($module, &$params, &$attribs)
{
	$bootstrapSize = $params->get('bootstrap_size');
	$suffix = $params->get('moduleclass_sfx', '');

	if (!empty($module->content)) :?>
		<div class="module<?php echo $suffix; ?><?php echo ($bootstrapSize != '0') ? ' col-md-' . $bootstrapSize : ''; ?>">
			<?php if ($module->showtitle != 0) : ?>
				<<?php echo $params->get('header_tag',
					'h3'); ?> class="title<?php echo $params->get('header_class',
					''); ?>"><?php echo $module->title; ?></<?php echo $params->get('header_tag', 'h3'); ?>>
			<?php endif; ?>
			<?php echo $module->content; ?>
			</div>
	<?php endif;
}