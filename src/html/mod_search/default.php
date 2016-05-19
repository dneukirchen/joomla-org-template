<?php defined('_JEXEC') or die;

// TODO Rename this file to navbar.php after the full relaunch (right now this override overrides all search modules on the site)

// Including fallback code for the placeholder attribute in the search field.
JHtml::_('script', 'system/html5fallback.js', false, true);
?>
<form action="<?php echo JRoute::_('index.php'); ?>" method="post" class="navbar-form navbar-right<?php echo $moduleclass_sfx; ?>"
      role="search">
	<label for="mod-search-searchword" class="sr-only"><?php echo $label; ?></label>
	<div class="input-group">
		<input name="searchword" id="mod-search-searchword" maxlength="<?php echo $maxlength; ?>'" type="search"
		       class="form-control search-query" placeholder="<?php echo $text; ?>">
		<span class="input-group-btn">
			<button class="btn btn-default" onclick="this.form.searchword.focus();"><span class="fa fa-search"></span></button>
		</span>
	</div>
	<input type="hidden" name="task" value="search"/>
	<input type="hidden" name="option" value="com_search"/>
	<input type="hidden" name="Itemid" value="<?php echo $mitemid; ?>"/>
</form>