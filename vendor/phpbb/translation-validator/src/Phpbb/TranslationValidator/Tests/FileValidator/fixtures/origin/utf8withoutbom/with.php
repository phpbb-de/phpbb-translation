<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$foobar = 0;

$lang = array_merge($lang, array(
	'1_DAY'			=> '1 day',
	'1_MONTH'		=> '1 month',
	'1_YEAR'		=> '1 year',
	'2_WEEKS'		=> '2 weeks',
	'3_MONTHS'		=> '3 months',
	'6_MONTHS'		=> '6 months',
	// Missing language key '7_DAYS'		=> '7 days',
	'8_DAYS'		=> 'Additional language key',
));

?>