<?php
$module_name = 'Reports';
$viewdefs[$module_name]['base']['menu']['header'][] =
    array(
        'route' => '#bwc/index.php?' . http_build_query(
            array(
                'module' => 'Import',
                'action' => 'Step1',
                'import_module' => $module_name,
            )
        ),
        'label' =>'LNK_IMPORT_REPORTS',
        'acl_action'=>'import',
        'acl_module'=>$module_name,
        'icon' => 'fa-arrow-circle-o-up',
    );

