<?php defined('_JEXEC') or die;

// Set some variables used by the template
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$menu = $app->getMenu();
$activeMenuItem = $menu->getActive();
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx');
$templatePath = $this->baseurl . '/templates/' . $this->template;

// Construct the body class
$bodyClass = ($menu->getActive() == $menu->getDefault()) ? 'frontpage' : 'site';
$bodyClass .= ' ' . trim($activeMenu->alias) . ' ' . trim($pageclass);

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
<body class="<?php echo $bodyClass; ?>" role="document">
<jdoc:include type="modules" name="debug"/>
<script src="<?php echo $templatePath; ?>/js/template.min.js"></script>
</body>
</html>




