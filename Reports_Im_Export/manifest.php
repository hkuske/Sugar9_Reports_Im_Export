<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$manifest = array (
  'acceptable_sugar_versions' => 
  array (
    0 => '9.*.*',
    1 => '10.*.*',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'ENT',
    1 => 'ULT',
    2 => 'PRO',
  ),
  'readme' => '',
  'key' => '',
  'author' => '',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Reports_Im_Export',
  'published_date' => '2020-03-17 10:00:00',
  'type' => 'module',
  'version' => 20200317,
  'remove_tables' => 'false',
);


$installdefs = array (
	'id' => 'Reports_Im_Export',
  
	'copy' =>  array (
		array ('from' => '<basepath>/custom/Extension/modules/Reports/Ext/clients/base/views/recordlist/_override_RIE_recordlist.php',
			   'to' =>              'custom/Extension/modules/Reports/Ext/clients/base/views/recordlist/_override_RIE_recordlist.php',
		),
		array ('from' => '<basepath>/custom/Extension/modules/Reports/Ext/clients/base/menus/header/_override_RIE_header.php',
			   'to' =>              'custom/Extension/modules/Reports/Ext/clients/base/menus/header/_override_RIE_header.php',
		),
	),
  
	'vardefs'=> array(
		array('from'=> '<basepath>/custom/Extension/modules/Reports/Ext/Vardefs/_override_RIE.php',
			  'to_module'=> 'Reports',
		),
	),
	
	'language' => array (
		array ('from' => '<basepath>/custom/Extension/modules/Reports/Ext/Language/en_us.RIE.lang.php',
			   'to_module' => 'Reports',
			   'language' => 'en_us',
		),				
	),
	
);