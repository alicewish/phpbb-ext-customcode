<?php

/**
* phpBB Extension - marttiphpbb customcode
* @copyright (c) 2014 - 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'CUSTOMCODE_HIDE_TEMPLATE_EVENTS_LOCATIONS'=> 'Özel kod şablon olayı konumlarını gizle',
	'CUSTOMCODE_INSIDE_HTML_HEAD'							=> '(html head içinde)',
));
