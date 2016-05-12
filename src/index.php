<?php defined('_JEXEC') or die;

// Load the template helpers
require_once __DIR__ . '/helpers/relaunch.php';

// Set some variables used by the template
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$menu = $app->getMenu();
$activeMenuItem = $menu->getActive();
$params = $app->getParams();
$pageClass = $params->get('pageclass_sfx');
$templatePath = $this->baseurl . '/templates/' . $this->template;

// Construct the body class
$bodyClass = ($menu->getActive() == $menu->getDefault()) ? 'frontpage' : 'site';
$bodyClass .= ' ' . trim($activeMenuItem->alias) . ' ' . trim($pageClass);

// Force latest IE & chrome frame
$doc->setMetadata('x-ua-compatible', 'IE=edge,chrome=1');
// Set the viewport
$doc->setMetaData('viewport', 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0');

// Add jquery framework
JHtml::_('jquery.framework');

// Add the template stylesheet
$doc->addStyleSheet($templatePath . '/css/template.min.css');
?><!doctype html>
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
				<a href="<?php echo $this->baseurl; ?>">
					<div class="navbar-brand"></div>
				</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<?php echo RelaunchHelper::mainMenu(); ?>
			</div>
		</div>
	</nav>
</header>
<jdoc:include type="modules" name="debug"/>
<script src="<?php echo $templatePath; ?>/js/template.min.js"></script>
</body>
</html>




