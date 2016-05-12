<?php defined('_JEXEC') or die;

/**
 * Class RelaunchHelper
 *
 * This helper is for all the ugly relaunch/static html stuff
 */
class RelaunchHelper
{

	/**
	 * Get the joomla main menu html from cdn
	 *
	 * @return string
	 */
	public static function mainMenu()
	{
		$url  = 'https://cdn.joomla.org/template/menu/v3_menu.php';
		$html = file_get_contents($url);

		// Extract the main menu (#nav-joomla)
		$doc  = new DOMDocument();
		$doc->loadHTML($html);
		$mainMenu = $doc->getElementById("nav-joomla");
		$mainMenu->setAttribute('class', 'nav navbar-nav');
		$mainMenu->removeAttribute('id');

		return $doc->saveHTML($mainMenu);
	}
}