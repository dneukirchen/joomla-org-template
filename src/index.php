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
			<div class="hero-overlay">
				<div class="container">
					<div class="row">
						<jdoc:include type="modules" name="hero" style=""/>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<?php if (!$isFrontpage) : ?>
		<jdoc:include type="component"/>
	<?php endif; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<small>You are here: Home</small>
				<h1 class="hero-title">This is the hero title</h1>
				<p class="hero-text">Hero text using small trompet paragraph style proin sed fringilla risus.
					Pellentesque tempus elit non felis vulputate tristique.</p>
				<h1>This is the h1<br/>Font:Merriweather light</h1>
				<p class="lead-xl">Consectetur adipiscing elit. Maecenas sed lobortis orci, sed suscipit metus. Duis
					tincidunt nunc et odio bibendum tincidunt a non magna. Proin sed fringilla risus. Pellentesque
					tempus elit non felis vulputate tristique.</p>
				<h2>h2 Integer condimentum<br/>line 2</h2>
				<p class="lead">Small trompet duis tincidunt nunc et odio bibendum tincidunt a non magna. Consectetur
					adipiscing elit.</p>
				<p>Augue vel diam lobortis efficitur. Quisque sollicitudin vulputate lorem, eget dignissim magna
					ullamcorper id. Quisque sodales nibh vel odio tincidunt, vitae auctor lacus interdum. Ut mollis
					lectus a varius vestibulum. Nullam facilisis ornare pretium. Ut gravida, ex ac volutpat ultrices,
					urna justo imperdiet sapien, ac rhoncus lorem odio in est.</p>
				<p class="lead-lg text-serif">Nunc varius suscipit mauris vel convallis. Curabitur mattis placerat mi
					eget vestibulum. Donec eros ligula, viverra a erat sit amet, facilisis lobortis lorem. Aliquam non
					dapibus sapien, id faucibus mauris.</p>
				<p>Proin a mi lobortis, molestie arcu quis, scelerisque tellus. Vestibulum faucibus tristique
					ullamcorper. Sed molestie eget quam at finibus. Mauris et ante non nibh mollis dapibus ac in lacus.
					Nunc euismod auctor ex et mollis.</p>
				<h3>h3 Mauris gravida molestie commodo</h3>
				<p>Vivamus et elit blandit, tincidunt orci elementum, molestie justo. Morbi ornare lectus felis, vitae
					fermentum tellus finibus sit amet. Nulla facilisi. In suscipit magna quis arcu bibendum, sit amet
					egestas nunc laoreet. Vestibulum consectetur elementum tellus convallis tristique. Sed lacinia
					varius tincidunt. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
					mus.</p>
				<h4>h4 Sed quis leo ac lacus ultricies pellentesque</h4>
				<p>Mauris at risus rutrum, malesuada nibh at, volutpat libero. Mauris elit leo, consequat sit amet
					sapien cursus, egestas tempor ante. Proin nec justo eu nunc luctus varius. Etiam vestibulum
					dignissim vehicula.</p>
				<h5>h5 Vestibulum dignissim condimentum dapibus</h5>
				<p>Suspendisse cursus, lorem eu pretium placerat, lacus enim blandit ipsum, a efficitur enim nibh at
					sem. Pellentesque commodo, nunc vestibulum aliquam maximus, justo augue mattis eros, eu viverra
					metus nisi vel erat. Quisque faucibus dapibus turpis, et consectetur libero sodales at.</p>
				<ul>
					<li>Donec vitae metus sodales</li>
					<li>Pretium lacus ullamcorper, porttitor enim
						<ul>
							<li>Mauris at leo nec ipsum vestibulum</li>
							<li>Blandit hendrerit eu sapien</li>
						</ul>
					</li>
					<li>Mauris at leo nec ipsum vestibulum</li>
					<li>Blandit hendrerit eu sapien</li>
					<li>Cras in est aliquet, ullamcorper leo eget</li>
				</ul>
				<p>Nunc varius suscipit mauris vel convallis. Curabitur mattis placerat mi eget vestibulum. Donec eros
					ligula, viverra a erat sit amet, facilisis lobortis lorem. Aliquam non dapibus sapien, id faucibus
					mauris.</p>
				<p>Proin a mi lobortis, molestie arcu quis, scelerisque tellus. Vestibulum faucibus tristique
					ullamcorper. Sed molestie eget quam at finibus. Mauris et ante non nibh mollis dapibus ac in lacus.
					Nunc euismod auctor ex et mollis.</p>

				<h2 class="text-center">h2 Integer condimentum</h2>
				<p class="text-center">Small trompet duis tincidunt nunc et odio bibendum tincidunt a<br/> non magna.
					Consectetur adipiscing elit.</p>
				<h3 class="text-center">h3 centered Mauris gravida molestie commodo</h3>
				<p class="text-center">Vivamus et elit blandit, tincidunt orci elementum, molestie justo.</p>

				<h4 class="text-center">h4 centered →</h4>
				<h4 class="text-center">h4 centered →</h4>
				<h4 class="text-center">h4 centered →</h4>
			</div>
		</div>
	</div>
</main>
<footer>
</footer>
<jdoc:include type="modules" name="debug"/>
<script src="<?php echo $templatePath; ?>/js/template.min.js"></script>
</body>
</html>




