<?php
/**
 * ArticleProperties - Creates a flexible interface to the page_props table which stores per-article named-properties
 *
 * @package MediaWiki
 * @subpackage Extensions
 * @author Aran Dunkley (http://www.organicdesign.co.nz/nad)
 * @copyright © 2012 Aran Dunkley
 * @licence GNU General Public Licence 2.0 or later
 */
if( !defined( 'MEDIAWIKI' ) ) die( "Not an entry point." );
define( 'ARTICLEPROPS_VERSION', "0.2.0, 2012-03-10" );

$wgExtensionCredits['other'][] = array(
	'name'        => "ArticleProperties",
	'author'      => "[http://www.organicdesign.co.nz/nad Aran Dunkley]",
	'description' => "Creates a flexible interface to the page_props table which stores per-article named-properties",
	'url'         => "http://www.mediawiki.org/wiki/ArticleProperties",
	'version'     => ARTICLEPROPS_VERSION
);

$dir = dirname( __FILE__ );
require_once( "$dir/ArticleProperties.class.php" );

// This hook allows us to change the class of article to one of our classes
$wgHooks['ArticleFromTitle'][] = 'ArticleProperties::onArticleFromTitle';