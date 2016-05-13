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
		if ($html !== false)
		{
			$doc = new DOMDocument();
			$doc->loadHTML($html);
			$mainMenu = $doc->getElementById("nav-joomla");
			$mainMenu->setAttribute('class', 'nav navbar-nav');
			$mainMenu->removeAttribute('id');

			return $doc->saveHTML($mainMenu);
		}

		return "<ul class=\"nav navbar-nav\">
		<li class=\"dropdown\">
			<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
				<span aria-hidden=\"true\" class=\"icon-joomla\"></span> Joomla!<sup>®</sup> <span class=\"caret\"></span>
			</a>
			<ul class=\"dropdown-menu\">
				<li>
					<a href=\"https://www.joomla.org\">
						<span aria-hidden=\"true\" class=\"icon-joomla\"></span> Joomla! Home
					</a>
				</li>
				<li class=\"divider\"><span></span></li>
				<li class=\"nav-header\"><span>Recent News</span></li>
				<li><a href=\"https://www.joomla.org/announcements.html\">Announcements</a></li>
				<li><a href=\"http://community.joomla.org/blogs.html\">Blogs</a></li>
				<li><a href=\"http://magazine.joomla.org\">Magazine</a></li>
				<li class=\"divider\"><span></span></li>
				<li class=\"nav-header\"><span>Support Joomla!</span></li>
				<li><a href=\"https://volunteers.joomla.org\">Contribute</a></li>
				<li><a href=\"https://shop.joomla.org\">Shop Joomla Gear</a></li>
				<li><a href=\"https://www.joomla.org/sponsorship\">Sponsorship</a></li>
			</ul>
		</li>
		<li class=\"dropdown\">
			<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">About <span class=\"caret\"></span></a>
			<ul class=\"dropdown-menu\">
				<li><a href=\"https://www.joomla.org/about-joomla.html\">About Joomla!</a></li>
				<li><a href=\"https://www.joomla.org/core-features.html\">Core Features</a></li>
				<li><a href=\"https://www.joomla.org/about-joomla/the-project.html\">The Project</a></li>
				<li><a href=\"https://www.joomla.org/about-joomla/the-project/leadership-team.html\">Leadership</a></li>
				<li><a href=\"http://opensourcematters.org\">Open Source Matters</a></li>
			</ul>
		</li>
		<li class=\"dropdown\">
			<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Community <span class=\"caret\"></span></a>
			<ul class=\"dropdown-menu\">
				<li><a href=\"http://community.joomla.org\">Joomla! Community Portal</a></li>
				<li><a href=\"https://events.joomla.org\">Joomla! Events</a></li>
				<li><a href=\"https://tm.joomla.org\">Joomla! Trademark &amp; Licensing</a></li>
				<li><a href=\"http://community.joomla.org/user-groups.html\">Joomla! User Groups</a></li>
				<li><a href=\"https://volunteers.joomla.org\">Joomla! Volunteers Portal</a></li>
			</ul>
		</li>
		<li class=\"dropdown\">
			<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Support <span class=\"caret\"></span></a>
			<ul class=\"dropdown-menu\">
				<li><a href=\"http://forum.joomla.org\">Joomla! Forum</a></li>
				<li><a href=\"https://docs.joomla.org\">Joomla! Documentation</a></li>
				<li><a href=\"https://issues.joomla.org\">Joomla! Issue Tracker</a></li>
				<li><a href=\"http://resources.joomla.org\">Joomla! Resources Directory</a></li>
			</ul>
		</li>
		<li class=\"dropdown\">
			<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Read <span class=\"caret\"></span></a>
			<ul class=\"dropdown-menu\">
				<li><a href=\"http://magazine.joomla.org\">Joomla! Magazine</a></li>
				<li><a href=\"http://community.joomla.org/connect.html\">Joomla! Connect</a></li>
				<li><a href=\"https://www.joomla.org/mailing-lists.html\">Joomla! Mailing Lists</a></li>
			</ul>
		</li>
		<li class=\"dropdown\">
			<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Extend <span class=\"caret\"></span></a>
			<ul class=\"dropdown-menu\">
				<li><a href=\"http://extensions.joomla.org\">Extension Directory</a></li>
				<li><a href=\"http://community.joomla.org/showcase\">Showcase Directory</a></li>
				<li><a href=\"http://community.joomla.org/translations.html\">Language Packages</a></li>
				<li><a href=\"https://certification.joomla.org\">Certification Program</a></li>
			</ul>
		</li>
		<li class=\"dropdown\">
			<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Developers <span class=\"caret\"></span></a>
			<ul class=\"dropdown-menu\">
				<li><a href=\"https://developer.joomla.org\">Developer Network</a></li>
				<li><a href=\"https://docs.joomla.org\">Documentation</a></li>
				<li><a href=\"https://docs.joomla.org/Bug_Squad\">Joomla! Bug Squad</a></li>
				<li><a href=\"https://api.joomla.org\">Joomla! API</a></li>
				<li><a href=\"http://joomlacode.org\">JoomlaCode</a></li>
				<li><a href=\"https://framework.joomla.org\">Joomla! Framework</a></li>
			</ul>
		</li>
	</ul>";
	}
}