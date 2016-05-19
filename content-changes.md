# Content Changes/Adjustments

## Basics
* Install the new template
* Assign the "Home" menu item to the template 

## Hero
* Create a new "custom html" module with the following settings:
	* title: "Hero Heading" (optional)
	* show_title: false
	* content: ```<h2>The Free Software Powering Millions of Websites</h2>
                  <p>Joomla! is an award-winning content management system (CMS), which enables you to build web sites and powerful online applications.</p>```
    * position: "hero"
    * menu assignment: only frontpage
    * module class suffix: " hero-heading"
* Create a new content category "Hero Articles"
* Create a new article with the following settings
	* title: "Download Joomla!"
	* content ```<p>Download and Install Joomla in your own server or development environment</p>```
	* category: "Hero Articles"
	* Link A: "https://www.joomla.org/download.html"
	* Link A Text: "Download Joomla!"
* Create a new article with the following settings
	* title: "Use Joomla!"
	* content ```<p>Quickly launch a basic version of Joomla! on joomla.com. Easily upgrade for additional features.</p>```
	* category: "Hero Articles"
	* Link A: "https://www.joomla.com/"
	* Link A Text: "Launch Joomla!"
* Create a new article with the following settings
	* title: "Try Joomla!"
	* content ```<p>Experiment with a full 90 day demo version of Joomla. Great for testing an extension or template.</p>```
	* category: "Hero Articles"
	* Link A: "https://demo.joomla.org/"
	* Link A Text: "Start Joomla! Demo"
* Create a new module "Articles Newsflash" with the following settings:
	* title: "Hero Articles" (optional)
	* Categories: "Hero Articles"
	* show_images: false
	* show_article_titles: true
	* link_article_titles: false
	* heading_level: h3
	* show_last_separator: false
	* show_readmore: false
	* number_of_articles: 3
	* ordering: "ordering"
	* show_title: false
	* position: "hero"
	* menu assignment: only frontpage
	* module class suffix: " hero-teaser"
	
