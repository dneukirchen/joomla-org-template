<?php defined('_JEXEC') or die;
$logos = glob(dirname(dirname(__FILE__)) .'/img/using-joomla/*.{jpg,png}');
?>
<div class="col-xs-8 col-xs-offset-2">
	<h2 class="section-title">Who is using Joomla!?</h2>
	<p>Joomla is trusted by some of the world’s most well-known companies and much-loved brands like Peugeot, Maersk, Harvard University and even websites for MTV and Gorillaz!</p>
</div>

<div class="row">
	<?php foreach($logos as $logo) : ?>
		<div class="col-md-3"></div>
	<?php endforeach; ?>
</div>