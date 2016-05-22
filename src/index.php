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
	<?php if (count($app->getMessageQueue())) : ?>
		<jdoc:include type="message"/>5
	<?php endif; ?>
	<?php if ($this->countModules('hero')) : ?>
		<section id="hero">
			<div class="hero-overlay">
				<div class="container">
					<div class="row">
						<jdoc:include type="modules" name="hero" />
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<?php if (!$isFrontpage) : ?>
		<section class="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<jdoc:include type="component"/>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<section class="section-1 why-joomla">
		<div class="container">
			<div class="row"><?php include __DIR__ . '/demo/why-joomla.php'; ?></div>
		</div>
	</section>
	<section class="section-2 features">
		<div class="container">
			<div class="row"><?php include __DIR__ . '/demo/features.php'; ?></div>
		</div>
	</section>
	<section class="section-3 finder">
		<div class="container">
			<div class="row"><?php include __DIR__ . '/demo/finder.php'; ?></div>
		</div>
	</section>
	<section class="section-4 numbers">
		<div class="container-fluid">
			<div class="row no-gutter"><?php include __DIR__ . '/demo/numbers.php'; ?></div>
		</div>
	</section>
	<section class="section-5 who-is-using">
		<div class="container">
			<div class="row"><?php include __DIR__ . '/demo/who-is-using.php'; ?></div>
		</div>
	</section>
	<section class="section-6 showcase">
		<div class="container">
			<div class="row"><?php include __DIR__ . '/demo/showcase.php'; ?></div>
		</div>
	</section>
	<section class="section-7 info">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<jdoc:include type="modules" name="announcements" style="default"/>
				</div>
				<div class="col-sm-7">
					<div class="events">
						<h2>Latest Event Gallery</h2>
						<a href="http://jandbeyond.org/">
							<img src="<?php echo $templatePath . '/demo/img/info/jandbeyond.jpg'; ?>"
							     alt="JandBeyond 2016" class="img-responsive">
						</a>
						<h3><a href="http://jandbeyond.org/">JandBeyond 2016</a></h3>
						<p>JandBeyond is the conference for Joomla Developers and site integrators from around the
							world. Now in it's 7th year, the conference attracts approx 200-250 of the top minds in the
							Joomla world from more than 30 different countries.</p>
						<div class="events-bg"></div>
					</div>
					<div class="contribution">
						<div class="contribution-bg"></div>
						<h2>Joomla Means Community</h2>
						<p>Joomla is the only major CMS that is built entirely by volunteers from all over the world. We
							have a strong community bond and all take pleasure in building something that has a large
							global impact. If you are interested in volunteering please head over to the volunteer
							portal.</p>
						<p><a href="https://www.joomla.org/contribute-to-joomla.html" class="btn btn-danger">Get
								involved</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="typo">
		<div class="container">
			<div class="row"><?php include __DIR__ . '/demo/typography.php'; ?></div>
		</div>
	</section>
</main>
<footer>
</footer>
<jdoc:include type="modules" name="debug"/>
<script src="<?php echo $templatePath; ?>/js/template.min.js"></script>
</body>
</html>




