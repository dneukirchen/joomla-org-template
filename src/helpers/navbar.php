<?php defined('_JEXEC') or die;

/**
 * Class NavbarHelper
 *
 * This helper is for all the ugly relaunch/static-html stuff
 */
class NavbarHelper
{
	/**
	 * @var string
	 */
	protected $url = 'https://cdn.joomla.org/template/menu/v3_menu.php';

	/**
	 * @var string
	 */
	protected $content;

	/**
	 * Get the joomla main menu html from cdn
	 *
	 * @return string
	 */
	public function mainMenu()
	{
		if ($this->getContent() !== false)
		{
			// Enable user error handling
			libxml_use_internal_errors(true);

			// Load the html
			$doc = new DOMDocument();
			if (!$doc->loadHTML($this->content))
			{
				JFactory::getApplication()->enqueueMessage(libxml_get_last_error(), 'error');
				libxml_clear_errors();
			}

			// Get and modify the main menu
			$mainMenu = $doc->getElementById("nav-joomla");
			$mainMenu->setAttribute('class', 'nav navbar-nav');
			$mainMenu->removeAttribute('id');

			return $doc->saveHTML($mainMenu);
		}
	}

	/**
	 * Get the joomla main menu html from cdn
	 *
	 * @return string
	 */
	public function internationalMenu()
	{
		if ($this->getContent() !== false)
		{
			// Enable user error handling
			libxml_use_internal_errors(true);

			// Load the html
			$doc = new DOMDocument();
			if (!$doc->loadHTML($this->content))
			{
				JFactory::getApplication()->enqueueMessage(libxml_get_last_error(), 'error');
				libxml_clear_errors();
			}

			// Get and modify the main menu
			$internationalMenu = $doc->getElementById("nav-international");
			$internationalMenu->setAttribute('class', 'nav navbar-nav navbar-right');
			$internationalMenu->removeAttribute('id');

			return $doc->saveHTML($internationalMenu);
		}
	}

	/**
	 * Get the contents
	 *
	 * @return string
	 */
	protected function getContent()
	{
		if (!$this->content)
		{
			$this->content = file_get_contents($this->url);
		}

		return $this->content;
	}
}