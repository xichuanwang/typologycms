<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

//
// !!!! DO NOT EDIT THIS FILE !!!!
// If you would like to customize your cms install use the config editor in admin 
//


// ------------------------------------------------------------------------
// ADMIN CONFIG

	$config['admin_email']			= '';
	$config['site_title']			= 'CMS';
	
	$config['default_from_email']	= 'noreply@'.$_SERVER["HTTP_HOST"];
	
	// ------------------------------------------------------------------------
	
	$config['google_api_key']		= '';
	$config['google_api_js']		= 'http://maps.google.com/maps?file=api&v=2&key=';
	
	// ------------------------------------------------------------------------
	
	$config['cron_key']				= 'wakkawakka';
	$config['cron_alert_email']		= '';


// ------------------------------------------------------------------------
// OUTPUT

	$config['output']['wrappers']['default_html'] 	= 'wrappers/default';
	$config['output']['wrappers']['popup'] 			= 'wrappers/popup';
	$config['output']['wrappers']['plain'] 			= 'wrappers/plain';
	$config['output']['wrappers']['ajax'] 			= 'wrappers/blank';

	$config['output']['meta_keywords']				= '';
	$config['output']['meta_description']			= '';

	$config['output_assets']['js_proto']			= array('js/prototype_min.js', 'js/prototype_element_tohtml.js', 'js/prototype_form_observer.js', 'js/scriptaculous/scriptaculous.js', 'js/scriptaculous/effects.js', 'js/scriptaculous/controls.js', 'js/scriptaculous/builder.js', 'js/scriptaculous/dragdrop.js');
	$config['output_assets']['js_misc']				= array('js/functions.js', 'js/widg/widgEditor.js', 'js/control.tabs.js');
	$config['output_assets']['js_cms']				= array('js/TreeNav.js', 'js/tndr_form.js', 'js/tndr_modal.js', 'js/calendar.js');
	$config['output_assets']['css_screen']			= array('css/reset.css', 'css/admin.css', 'css/form.css', 'css/pickers.css', 'css/tndr_form.css', 'css/tndr_modal.css', 'css/nav.css', 'css/calendar.css', 'js/widg/widgEditor.css');

// ------------------------------------------------------------------------
// ASSET COMPRESSION

	$config['assets']['add_app_path']				= TRUE;												// true || false
	// TODO: This should use base_path instead of sitepath so both sites can be on the same domain
	$config['assets']['cache_directory']			= 'cache';
	$config['assets']['compression_enabled']		= TRUE;													// true || false
	$config['assets']['compression_minify']			= TRUE;													// true || false


// ------------------------------------------------------------------------
// THEMES

	$config['theme']['header_image'] 		= '';
	$config['theme']['highlight_color'] 	= '#333';
	$config['theme']['highlight_rules'] 	= array(
												'.access_menu LI .current { color: %s; }'
												, '.access_menu LI .current A { color: %s; }'
												, '.access_menu_tree LI .current { color: %s; }'
												, '.access_menu_tree LI .current A { color: %s; }'
												, '.content_header H2 { color: %s !important; }'
												, '#popup_header { color: %s; }'
												, '#logo .logo_text { color: %s; }'
												);


// ------------------------------------------------------------------------
// PUBLISH & WORKFLOW

	$config['publish']['remote_url'] 				= '';
	$config['publish']['remote_auth_code'] 			= '';
	$config['publish']['publish_url'] 				= '';

	$config['workflow']['send_immediate_emails'] 	= TRUE;
	$config['workflow']['send_daily_emails'] 		= TRUE;


// ------------------------------------------------------------------------
// MODULES

	$config['modules']				= array(
										'page'				=> 'Pages'
										, 'template'		=> 'Page Templates'
										, 'file'			=> 'Files'
										, 'user'			=> 'Users'
										, 'config'			=> 'Config'
										, 'util'			=> 'Utilities'
										);

	$config['publish_modules']		= array(
										'file'	
										, 'config'	
										);

// ------------------------------------------------------------------------
// XML

	$config['xml_root_node']		= 'data';
	$config['xml_empty']			= '<data />';


// ------------------------------------------------------------------------
// USER PERMISSIONS

	$config['login']['req_password_len']		= 6;
	$config['login']['expiration_mins'] 		= 60;

	$config['login']['limit_failed_login']		= FALSE;
	$config['login']['limit_failed_mins']		= 30;
	$config['login']['limit_failed_cnt']		= 5;

	$config['login']['limit_inactive_login']	= FALSE;
	$config['login']['limit_inactive_days']		= 90;

	$config['login']['instructions']			= '';

	$config['login']['path']					= '/login';
	
	$config['user_groups']			= array(

										'content_editor'		=> array(
											'name'				=> 'Content Editor'
											, 'desc'			=> 'Only allowed to edit existing content and save as draft.'
											, 'permissions'		=> array(
																	'admin_access'
																	, 'module_file'
																	, 'module_page'
											)
										)

										/*
										, 'content_creator'		=> array(
											'name'				=> 'Content Creator'
											, 'desc'			=> 'Allowed to edit create and delete content.'
											, 'permissions'		=> array(
																	'admin_access'
																	, 'global_create'
																	, 'global_delete'
																	, 'module_file'
																	, 'module_page'
											)
										)
										*/

										, 'content_publisher'		=> array(
											'name'				=> 'Content Approver/Publisher'
											, 'desc'			=> 'Full content access including able to publish to website.'
											, 'permissions'		=> array(
																	'admin_access'
																	, 'global_create'
																	, 'global_delete'
																	, 'global_publish'
																	, 'module_file'
																	, 'module_page'
																	, 'modulle_page_import'
											)
										)

										, 'site_supervisor'		=> array(
											'name'				=> 'Website Supervisor'
											, 'desc'			=> 'Full content/publish access, able to view activity logs and create new users.'
											, 'permissions'		=> array(
																	'admin_access'
																	, 'global_create'
																	, 'global_delete'
																	, 'global_publish'
																	, 'module_file'
																	, 'module_page'
																	, 'module_util'
																	, 'module_user'
																	, 'module_activity'
		
																	/* Page module specific permissions */
																	//, 'page_options'	
											)
										)

										, 'administrator'		=> array(
											'name'				=> 'Administrator'
											, 'desc'			=> ''
											, 'permissions'		=> array('*')
											)
										);

	// ------------------------------------------------------------------------

	$config['forgot_pw_email']		= array(
											'from_name'	=> 'CMS'
											, 'from_email'	=> $config['admin_email']
											, 'subject'		=> 'Your password has been reset.'
											, 'message'		=> 'Your password has been successfully reset. Please use the new password listed below to access the cms. '
																. chr(10). chr(10)
											);

	$config['optoions_yes_no']		= array(
											'yes'			=> 'Yes'
											, 'no'			=> 'No'
											);

											