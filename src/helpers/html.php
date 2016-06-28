<?php defined('_JEXEC') or die;

/**
 * Class HtmlHelper
 */
class HtmlHelper
{
	/**
	 * Display an svg icon
	 *
	 * @param $name
	 *
	 * @return string
	 */
	public static function svgIcon($name)
	{
		$class = "svg-icon svg-icon-{$name}";
		$href = '#' . $name;

		$html = "<svg class='{$class}'>";
		$html .= "<use xlink:href='{$href}'></use>";
		$html .= "</svg>";

		return $html;
	}
}