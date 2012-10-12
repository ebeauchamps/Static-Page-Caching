<?php

 /**
 * Solspace - Static Page Caching
 *
 * @package		Solspace:Static Page Caching
 * @author		Solspace DevTeam
 * @copyright	Copyright (c) 2008-2012, Solspace, Inc.
 * @link		http://solspace.com/docs/addon/c/Static_Page_Caching/
 * @version		2.1.2
 * @filesource 	./system/expressionengine/third_party/static_page_caching/language/english/
 */

$L = $lang = array(

//----------------------------------------
// Required for MODULES page
//----------------------------------------

"static_page_caching_module_name" =>
"Static Page Caching",

"static_page_caching_module_description" =>
"Cache an entire page in ExpressionEngine based on its URI.",

'static_page_caching_module_version' =>
'Static Page Caching',

//----------------------------------------
//  Main Menu
//----------------------------------------

'homepage' =>
"Home",

'preferences' =>
"Preferences",

'online_documentation' =>
"Online Documentation",

//----------------------------------------
//  Buttons
//----------------------------------------

'save' =>
"Save",

//----------------------------------------
//  Generic Module Errors
//----------------------------------------

'invalid_request' =>
"Invalid Request",

'static_page_caching_module_disabled' =>
"The Static Page Caching module is currently disabled.  Please insure it is installed and up to date by going 
to the module's control panel in the ExpressionEngine Control Panel",

'disable_module_to_disable_extension' =>
"To disable this extension, you must disable its corresponding <a href='%url%'>module</a>.",

'enable_module_to_enable_extension' =>
"To enable this extension, you must install its corresponding <a href='%url%'>module</a>.",

'cp_jquery_requred' =>
"The 'jQuery for the Control Panel' extension must be <a href='%extensions_url%'>enabled</a> to use this module.",

//----------------------------------------
//  Update routine
//----------------------------------------

'update_static_page_caching_module' =>
"Update Static Page Caching Module",

'static_page_caching_update_message' =>
"You have recently uploaded a new version of Static Page Caching, please click here to run the update script.",

"update_successful" =>
"The module was successfully updated.",

"update_failure" =>
"There was an error while trying to update your module to the latest version.",

//----------------------------------------
//  ToolBar
//----------------------------------------

'refresh_uri' =>
"Refresh URI",

'uncache_uri' =>
"Uncache URI",

'cache_uri' =>
"Cache URI",

'toolbar_successful_uri_uncaching' =>
"The URI was successfully uncached.  Page will be reloaded.",

'toolbar_successful_uri_refreshed' =>
"The URI was successfully refreshed. Page will be reloaded.",

'toolbar_successful_uri_caching' =>
"The URI was successfully cached. Page will be reloaded.",

//----------------------------------------
//  Homepage & Global
//----------------------------------------

'site_switcher' =>
"Site Switcher",

'cached_uris' =>
"Cached URIs",

'uri' =>
"URI",

'cached' =>
"Cached",

'uris' =>
"URIs",

'refresh_cached_uris' =>
"Refresh Cached URIs",

'delete_cached_uris' =>
"Delete Cached URIs",

'no_cached_uris' =>
"No Cached URIs",

'successful_uris_deleting' =>
"The URIs were successfully deleted.",

'successful_uris_refreshing' =>
"The URIs were successfully uncached and put into the Queue for recaching.",

'return_to_uri' =>
"Return to URI",

'success' =>
"Success!",

'search_placeholder' =>
"Search...",

'cached_uri_search' =>
"Cached URI Search",

//----------------------------------------
//  Add URIs
//----------------------------------------

'spc_site' =>
"Site",

'spc_site_subtext' =>
"If a site is not listed here, then please insure you have filled out its path and .htaccess information under the Preferences tab.",

'add_uris' =>
"Add URIs",

'uris_separate_line_limit_eight' =>
"Put each URI on a single line. Limit of eight URIs at a time, if not using the Queue.",

'valid_site_required' =>
"A valid Site is Required",

'successful_uri_caching' =>
"The URI was successfully cached!",

'successful_uris_caching' =>
"The URIs were successfully cached!",

'error_caching_uri' =>
"There was an error while caching your URI: ",

'maximum_eight_uris_cached_at_one_time' =>
"A Maximum of eight URIs can be cached at one time.  Please reduce the number of URIs submitted.",

'spc_use_queue' =>
"Use the Queue?",

'spc_use_queue_subtext' =>
"When using the Queue, you can enter as many URIs as you want. However, they must be cached
in small batches by using the Check Queue tag or the Cron URL.",

//----------------------------------------
//  Queue
//----------------------------------------

'queue' =>
"Queue",

'cache_queued_uris' =>
"Cache Queued URIs",

'no_queued_uris' =>
"No Queued URIs",

//----------------------------------------
//  Preferences
//----------------------------------------

'htaccess_path' =>
"Server Path for .htaccess File",

'cache_folder_url' =>
"URL for Cache Folder",

'cache_folder_path' =>
"Server Path for Cache Directory",

'preferences_updated' =>
"Preferences Updated",

'cache_renewal_interval' =>
"Renew Cache Files",

'spc_never' =>
"Never",

'spc_every_thirty_minutes' =>
"Every 30 Minutes",

'spc_every_hour' =>
"Every Hour",

'spc_2_hours' =>
"Every 2 Hours",

'spc_6_hours' =>
"Every 6 Hours",

'spc_12_hours' =>
"Every 12 Hours",

'spc_24_hours' =>
"Every 24 Hours",

'spc_every_2_days' =>
"Every 2 Days",

'spc_every_5_days' =>
"Every 5 Days",

'spc_every_7_days' =>
"Every 7 Days",


'smart_template_editing_enabled' =>
"Smart Template Editing Enabled",

'smart_entry_editing_enabled' =>
"Smart Entry Editing Enabled",

'spc_cron_url' =>
"Cron URL",

//----------------------------------------
//  File Writing Errors
//----------------------------------------

'invalid_request' =>
"Invalid Request",

'invalid_htaccess_path' =>
"Invalid .htaccess path",

'invalid_htaccess_path_include_htaccess' =>
"Invalid .htaccess path, make sure you include the '.htaccess' in the path.",

'no_cache_directory_set' =>
"No Cache Directory Set for Site: ",

'invalid_cache_directory_set' =>
"Invalid Cache Directory Set for Site: ",

'cache_directory_not_writable' =>
"Cache Directory Not Writable",

'unable_to_create_directories' =>
"Unable to create directories for URI:",

'unable_to_write_cache_htaccess' =>
"Unable to Write An .htaccess file to Cache Directory",

'unable_to_delete_old_cache_file' =>
"Unable to Delete Old Cache File: ",

'unable_to_write_temporary_cache_file' =>
"Unable to Write Temporary Cache File",

'locking_error' =>
"Locking Error: Unable to Write File",


// END
''=>''
);
?>