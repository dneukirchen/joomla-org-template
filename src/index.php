<?php defined('_JEXEC') or die;

// Load the template helpers
require_once __DIR__ . '/helpers/navbar.php';

// Set some variables used by the template
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$menu = $app->getMenu();
$activeMenuItem = $menu->getActive();
$params = $app->getParams();
$pageClass = $params->get('pageclass_sfx');
$templatePath = $this->baseurl . '/templates/' . $this->template;
$isFrontpage = ($menu->getActive() == $menu->getDefault());

// Helpers
$navbarHelper = new NavbarHelper();

// Construct the body class
$bodyClass = ($isFrontpage) ? 'frontpage' : 'site';
$bodyClass .= ' ' . trim($activeMenuItem->alias) . ' ' . trim($pageClass);

// Force latest IE & chrome frame
$doc->setMetadata('x-ua-compatible', 'IE=edge,chrome=1');
// Set the viewport
$doc->setMetaData('viewport', 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0');

// Add jquery framework
JHtml::_('jquery.framework');

// Add the template stylesheet
$doc->addStyleSheet($templatePath . '/css/template.min.css');
?><!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
<head>
	<jdoc:include type="head"/>
</head>
<body class="<?php echo trim($bodyClass); ?>" role="document">
<header>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
				        aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1 class="navbar-brand">
					<a href="<?php echo $this->baseurl; ?>" title="Joomla Frontpage">
						<img id="joomla-logo" src="<?php echo $templatePath . '/img/joomla-logo.png'; ?>"
						     alt="Joomla Logo"/>
						<span>Joomla!<sup>&reg;</sup></span>
					</a>
				</h1>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<?php echo $navbarHelper->mainMenu(); ?>
				<?php if ($this->countModules('position-0')) : ?>
					<jdoc:include type="modules" name="position-0"/>
				<?php endif; ?>
				<?php echo $navbarHelper->internationalMenu(); ?>
			</div>
		</div>
	</nav>
</header>
<main>
	<?php if ($this->countModules('hero')) : ?>
		<section id="hero">
			<div class="hero-color">
				<div class="hero-gradient">
					<div class="container">
						<div class="row">
							<jdoc:include type="modules" name="hero" style=""/>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<?php if (!$isFrontpage) : ?>
		<jdoc:include type="component"/>
	<?php endif; ?>
</main>
<footer>
	Joomla!Download Page: Get Joomla .<br/>
	Joomla!Demo Site: Try Joomla .<br/>
	Joomla . com: Get a Joomla!hosted website for free < br />
	Technical Requirements: Get ready to install .<br/>
	Joomla!Documentation: Learn how to use Joomla.<br/>
	Joomla!Site Showcase: See great Joomla!sites .<br/>
	Joomla!Extensions Directory: Find an extension .<br/>
	Joomla!Resources Directory: Find Joomla!Pros .<br/>
	Joomla!Core Features: Learn what Joomla!includes .<br/>
	Joomla!Forums: Get support .<br/>
	About The Joomla!Project: Learn who we are and how we're organized.<br/>
	Joomla! Download Page: Get Joomla.<br/>
	Joomla! Demo Site: Try Joomla.<br/>
	Joomla.com: Get a Joomla! hosted website for free<br/>
	Technical Requirements: Get ready to install.<br/>
	Joomla! Documentation: Learn how to use Joomla.<br/>
	Joomla! Site Showcase: See great Joomla! sites.<br/>
	Joomla! Extensions Directory: Find an extension.<br/>
	Joomla! Resources Directory: Find Joomla! Pros.<br/>
	Joomla! Core Features: Learn what Joomla! includes.<br/>
	Joomla! Forums: Get support.<br/>
	About The Joomla! Project: Learn who we are and how we're organized .<br/>
	Joomla!Download Page: Get Joomla .<br/>
	Joomla!Demo Site: Try Joomla .<br/>
	Joomla . com: Get a Joomla!hosted website for free < br />
	Technical Requirements: Get ready to install .<br/>
	Joomla!Documentation: Learn how to use Joomla.<br/>
	Joomla!Site Showcase: See great Joomla!sites .<br/>
	Joomla!Extensions Directory: Find an extension .<br/>
	Joomla!Resources Directory: Find Joomla!Pros .<br/>
	Joomla!Core Features: Learn what Joomla!includes .<br/>
	Joomla!Forums: Get support .<br/>
	About The Joomla!Project: Learn who we are and how we're organized.<br/>
	Joomla! Forums: Get support.<br/>
	About The Joomla! Project: Learn who we are and how we're organized .<br/>
	Joomla!Download Page: Get Joomla .<br/>
	Joomla!Demo Site: Try Joomla .<br/>
	Joomla . com: Get a Joomla!hosted website for free < br />
	Technical Requirements: Get ready to install .<br/>
	Joomla!Documentation: Learn how to use Joomla.<br/>
	Joomla!Site Showcase: See great Joomla!sites .<br/>
	Joomla!Extensions Directory: Find an extension .<br/>
	Joomla!Resources Directory: Find Joomla!Pros .<br/>
	Joomla!Core Features: Learn what Joomla!includes .<br/>
	Joomla!Forums: Get support .<br/>
	About The Joomla!Project: Learn who we are and how we're organized.<br/>
</footer>
<jdoc:include type="modules" name="debug"/>
<script src="<?php echo $templatePath; ?>/js/template.min.js"></script>
</body>
</html>




