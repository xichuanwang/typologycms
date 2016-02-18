<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

//
// !!!! DO NOT EDIT THIS FILE !!!!
// If you would like to customize your cms install use the config editor in admin 
//


// ------------------------------------------------------------------------
// Site config

	$config['application_name']					= 'TypologyCMS';
	$config['application_version']				= 'v2.1';
	$config['application']						= 'VSA Partners - www.vsapartners.com';

	$config['author']							= '';
	
	
	$config['site_active']						= TRUE;
	
	$config['default_path'] 					= '/'; 													// Include leading slash.
	
	$config['pdf_uri_trigger'] 					= '/PDF';												// Include leading slash.
	$config['xml_uri_trigger'] 					= '/XML';												// Include leading slash.
	$config['file_uri_trigger'] 				= '/FILE';												// Include leading slash.
	$config['popup_uri_trigger'] 				= '/POPUP';												// Include leading slash.
	$config['service_uri_trigger'] 				= '/SERVICE';											// Include leading slash.
	
	$config['site_title']						= '';
	$config['title_seperator']					= ':';

	$config['meta']['meta_description']			= '';
	$config['meta']['meta_image']				= '';
	$config['meta']['head_extra']				= '';
	
	$config['custom_404']['enabled']			= TRUE;
	$config['custom_404']['path']				= '/404';												// Include leading slash.
	
	$config['timezone']							= 'America/New_York';
	
	$config['google_analytics_id']				= '';

// ------------------------------------------------------------------------
// SITEMAP

	$config['sitemap']['allow']					= TRUE;
	$config['sitemap']['uri_trigger']			= '/sitemap.xml';									// Include leading slash.
	$config['sitemap']['view']					= '/sitemap_xml';

// ------------------------------------------------------------------------
// PASSWORD

	$config['password']['protect_site']			= FALSE;
	$config['password']['password']				= '';
	$config['password']['domain']				= '';

// ------------------------------------------------------------------------
// Cache

	$config['cache_enabled']				= TRUE;														// true || false
	$config['cache_default_time']			= '1 Day';
	$config['cache_params']					= array('filter', 'xsl_request', 'attribute', 'page');
	$config['cache_recache_param']			= 'recache';


// ------------------------------------------------------------------------
// Encryption

	// IMPORTANT:
	// Do not change any of these after a site is set up. Will break previously encrypted values.

	$config['encryption_salt']				= '';

	// Encryption key (256-bit / 32-chars)
	$config['encryption_key']				= '77498967afccea51a4d5e36430cfa6128767abd20401c1c18bc3a7f2341fe69c';

	// Initialization vector (128-bit / 16-chars)
	$config['encryption_iv']				= 'f2ef4ec12154ff017065d7ba6a0475c9fdfa39ed2c95d63e69508090f1f66056';
	
